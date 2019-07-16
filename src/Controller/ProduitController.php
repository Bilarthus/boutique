<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     *
     *localhost:8000/
     *www.boutique.com
     */
    public function index()
    {
           //1 : Récupérer les données à afficher (tous les produits et la liste de catégories)

           //2 : Affiche la vue qui correspond
        return $this->render('produit/index.html.twig');
    }

    /**
     * @Route("/categorie/{cat}/", name="categorie")
     *localhost:8000/categorie/toto
     *
     */

     public function categorie($cat){
         //1 : Récupérer les données à afficher (les produits correspondant, la liste des catégories)

         //2 : Affiche la vue
         return $this -> render('produit/index.html.twig');

     }


     /**
     * @Route("/produit/{id}/", name="produit")
     *localhost:8000/produit/12
     *
     */
    public function produit($id){
        //1 : récupère les infos du produit

        //2 : Affichage de la vue
        return $this -> render('produit/show.html.twig', [
            'id' => $id
        ]);
    }


    /**
     * @Route("/recherche/", name="recherche")
     *localhost:8000/
     *
     */

    public function recherche(){

    }


     /**
     * @Route("/promotion/", name="promotion")
     *
     */

    public function promotion(){

    }





}
