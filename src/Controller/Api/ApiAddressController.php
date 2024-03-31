<?php

namespace App\Controller\Api;

use App\Entity\Address;
use App\Repository\AddressRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


#[Route('/api')]
class ApiAddressController extends AbstractController
{
    #[Route('/address', name: 'app_post_address', methods: ['POST'])]
    public function index( Request $req, EntityManagerInterface $manager, AddressRepository $addressRepository): Response
    {
        $user = $this->getUser();

        if(!$user){
            return $this->json([
                "isSuccess" => false,
                "message" => "Vous n'avez pas l'autorisation !",
                "data" => []
            ]);
        }

        $formData = $req->getPayload();

        $address = new Address();
        $address->setName($formData->get('name'))
                ->setClientName($formData->get('client_name'))
                ->setStreet($formData->get('street'))
                ->setCodePostal($formData->get('code_postal'))
                ->setCity($formData->get('city'))
                ->setState($formData->get('state'))
                ->setUser($user)
        ;
        $manager->persist($address);
        $manager->flush();

        $addresses = $addressRepository->findByUser($user);

        foreach ($addresses as $key => $address) {
            $address->setUser(null);
            $addresses[$key] = $address;
        }

        return $this->json([
            "isSuccess" => true,
            "data" =>$addresses
        ]);
    }

     #[Route('/address/{id}', name: 'app_api_put_address', methods: ['PUT'])]
    public function update($id,Request $req, AddressRepository $addressRepository,EntityManagerInterface  $manager): Response
    {
        $user = $this->getUser();

        if(!$user){
            return $this->json([
                "isSuccess"=> false,
                "message"=> "Vous n'avez pas l'autorisation !",
                "data" => []
            ]);
        }
        
        $address = $addressRepository->findOneById($id);

        if(!$address){
            return $this->json([
                "isSuccess"=> false,
                "message"=> "L'adresse n'a pas été trouvé !",
                "data" => []
            ]);
        }
        
        if($user !== $address->getUser()){
            return $this->json([
                "isSuccess"=> false,
                "message"=> "Vous n'avez pas l'autorisation !",
                "data" => []
            ]);
        }
        
        // start update 
        $formData = $req->getPayload();
        $address->setName($formData->get('name'))
                ->setClientName($formData->get('client_name'))
                ->setStreet($formData->get('street'))
                ->setCodePostal($formData->get('code_postal'))
                ->setCity($formData->get('city'))
                ->setState($formData->get('state'))
                ;

        $manager->persist($address);
        $manager->flush();
        

        $addresses = $addressRepository->findByUser($user);
        foreach ($addresses as $key => $address) {
            $address->setUser(null);
            $addresses[$key] = $address;
        }
        
        

        return $this->json([
            "isSuccess"=> true,
            "data" =>$addresses 
        ]);
    }

     #[Route('/address/{id}', name: 'app_api_delete_address', methods: ['DELETE'])]
    public function delete( $id, Request $req, EntityManagerInterface $manager, AddressRepository $addressRepository): Response
    {
        $user = $this->getUser();

        if(!$user){
            return $this->json([
                "isSuccess"=> false,
                "message"=> "Vous n'avez pas l'autoristation !",
                "data" => []
            ]);
        }

        
        $address = $addressRepository->findOneById($id);
        
        // si l'adresse n'est pas trouvé alors message d'erreur
        if(!$address){
            return $this->json([
                "isSuccess" => false,
                "message" => "L'adresse n'as pas été trouvé !",
                "data" => []
            ]);
        }
        // on vérifie si l'utilisateur qui veut supprimer cette adresse est bien l'utilisateur de cette adresse
        if($user !== $address->getUser()){
            return $this->json([
                "isSuccess" => false,
                "message" => "Vous n'avez pas l'autorisation !",
                "data" => []
            ]);
        }

        $manager->remove($address);
        $manager->flush();

        // une fois que la suppression est bonne alors on affichera toute la liste des addresse
        $addresses = $addressRepository->findByUser($user);

        foreach ($addresses as $key => $address) {
            $address->setUser(null);
            $addresses[$key] = $address;
        }

        return $this->json([
            "isSuccess" => true,
            "data" => $addresses
        ]);
    }
}
