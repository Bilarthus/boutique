<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produit;

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

           // Select * FROM produit
           $repository = $this -> getDoctrine() -> getRepository(Produit::class); 
           $produits = $repository -> findAll();

           //2 : Affiche la vue qui correspond
        return $this->render('produit/index.html.twig', [
            'produits' => $produits
        ]);
    }

    /**
     * @Route("/categorie/{cat}/", name="categorie")
     *localhost:8000/categorie/toto
     *
     */

     public function categorie($cat){
         //1 : Récupérer les données à afficher (les produits correspondant, la liste des catégories)

         // SELECT * FROM produit WHERE categorie = $cat
        $repo = $this -> getDoctrine() -> getRepository(Produit::class);
        $produits = $repo -> findBy(array('categorie' => $cat ));




         //2 : Affiche la vue
         $params = array(
             'produits' => $produits
         );
         return $this -> render('produit/index.html.twig', $params);

     }


     /**
     * @Route("/produit/{id}/", name="produit")
     *localhost:8000/produit/12
     *
     */
    public function produit($id){
        //1 : récupère les infos du produit
        //SELEECT * FROM produit WHERE id = $id

        // Méthode 1
        $repository = $this -> getDoctrine() -> getRepository(Produit::class);
        $produit = $repository -> find($id);

        // Méthode 2
       // $em =$this -> getDoctrine() ->getManager();
        //$produit = $em -> find(Produit::class, $id); // em = "entity manager";

        //2 : Affichage de la vue
        return $this -> render('produit/show.html.twig', [
            'id' => $id, 
            'produit' => $produit
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
