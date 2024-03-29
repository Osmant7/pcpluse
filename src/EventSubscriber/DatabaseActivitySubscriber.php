<?php

namespace App\EventSubscriber;

use App\Entity\Product;
use App\Entity\Category;
use Doctrine\ORM\Events;
use Doctrine\ORM\Event\PostRemoveEventArgs;
use Symfony\Component\HttpKernel\KernelInterface;
use Doctrine\Bundle\DoctrineBundle\EventSubscriber\EventSubscriberInterface;



class DatabaseActivitySubscriber implements EventSubscriberInterface
{
    // ici un écouteur d'évenement ( qu'on indique dans services.yaml )
    // si il ya une suppression systematiquement on fera appel
    // a postRemove qui lui fera appel a logActivity
    // qui lui vérifié si cest un produit alors il applique la condition if

    /**KernelInterface */
    private $appKernel;
    private $rootDir;

    public function __construct(KernelInterface $appKernel)
    {
        $this->appKernel = $appKernel;
        $this->rootDir = $appKernel->getProjectDir();
    }

    public function getSubscribedEvents(): array
    {
        return [
            Events::postRemove,
        ];
    }

    public function postRemove(PostRemoveEventArgs $args): void
    {
        $this->logActivity('remove', $args->getObject());
    }

    // si l'on l'entité est une instance de product et c'est une action de suppression alors on applique la condition if
    public function logActivity(string $action, mixed $entity): void
    {

        if(($entity instanceof Product) && $action === "remove" ){
            
            //remove image
            $imageUrls = $entity->getImageUrls();

            foreach ($imageUrls as $imageUrl) {
                $filelink = $this->rootDir. "/public/assets/images/products/".$imageUrl;
                $this->deleteImage($filelink);
            }

        }
        if(($entity instanceof Category) && $action === "remove" ){
            // remove image
            $filename = $entity->getImageUrl();
            // grace au appKernel prédéfini en haut, on peut retrouvé la racine du chemin
            $filelink = $this->rootDir. "/public/assets/images/categories/".$filename;
            
            $this->deleteImage($filelink);
            // dd($result);
        }
    }

    public function deleteImage(string $filelink): void
    {
            try {
                //code...
                $result = unlink($filelink);
            } catch (\Throwable $th) {
                //throw $th;
            }
    }
}
