<?php

namespace App\Controller;

use App\Repository\PageRepository;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use App\Repository\SettingsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    private $productRep;

    public function __construct(ProductRepository $productRep)
    {
        $this->productRep = $productRep;
    }

    #[Route('/', name: 'app_home')]
    public function index(SettingsRepository $settingsRep,PageRepository $pageRep,CategoryRepository $categoRep, Request $request): Response
    {
        $session = $request->getSession();
        $data = $settingsRep->findAll();
        $categories = $categoRep->findBy(['isMega' => true]);
        //grace a Request on vient d'ajouter dans la session "settings" il sera alors disponible dans toute les requetes

        $session->set("settings", $data[0]);


        // $productBestSeller = $this->productRep->findBy(['isBestSeller'=>true]);
        // $productNewArrival = $this->productRep->findBy(['isewArrival'=>true]);
        // dd([ $productBestSeller,$productNewArrival ]);

        $pagesHeader = $pageRep->findBy(['isHeader' => true]);
        $pagesFooter = $pageRep->findBy(['isFooter' => true]);
        
        $session->set("pagesHeader", $pagesHeader);
        $session->set("pagesFooter", $pagesFooter);
        $session->set("categories", $categories);
        

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            "productsBestSeller" => $this->productRep->findBy(['isBestSeller'=>true]),
            "productsNewArrival" => $this->productRep->findBy(['isNewArrival'=>true]),
        ]);
    }


    #[Route('/product/{slug}', name: 'app_product_by_slug')]
    public function showProduct(string $slug)
    {
        $product = $this->productRep->findOneBy(['slug' => $slug]);

        if(!$product){
            // rediriger sur la page erreur
            return $this->redirectToRoute('app_error');
        }


        return $this->render('product/show_product_by_slug.html.twig',[
            'product' => $product,
        ]);

    }

    // page d'erreur
    #[Route('/error', name: 'app_error')]
    public function errorPage()
    {

         return $this->render('page/notfound.html.twig', [
                'controller_name' => 'PageController',
            ]);

    }
}
