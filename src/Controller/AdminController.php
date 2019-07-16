<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class AdminController extends AbstractController{

    //CRUD PRODUIT

    /**
     * @Route("/admin/produit/", name="admin_produit")
     *
     */
    public function AdminProduit(){
        //1 : Récupérer tous les produits

        //2 : Afficher la vue
        return $this -> render('admin/produit_list.html.twig');
    }

     /**
     * @Route("/admin/produit/add/", name="admin_produit_add")
     *
     */
    public function AdminProduitAdd(){
        //1 : Créer le formulaire 
        //2 : Afficher le formulaire dans la vue
        //3 : Traiter les infos du formulaire pour enregistrer le produit
        return $this -> render('admin/produit_form.html.twig');
    }


    /**
     * @Route("/admin/produit/update/{id}", name="admin_produit_update")
     *
     */
    public function AdminProduitUpdate($id){
        //1 : Récupérer le produict ($id)
        //2 : Créer le formulaire
        //3 : Afficher le formulaire dans la vue
        return $this -> render('admin/produit_form.html.twig');
        //4 : traiter les infos du formulaire
    }


     /**
     * @Route("/admin/produit/delete/{id}/", name="admin_produit_delete")
     *
     */
    public function AdminProduitDelete($id){
        //1 : récupérer le produit ($id)
        //2 : supprimer le produit
        //3 : Messsage + redirection
         $this -> addFlash('success', 'Le produit ' . $id . ' a bien été supprimé');

         return $this -> redirectToRoute('admin_produit');
    }



}
