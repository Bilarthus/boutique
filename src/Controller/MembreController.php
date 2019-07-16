<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MembreController extends AbstractController{

    /**
     * @Route("/inscription/", name="inscription")
     *
     *localhost:8000/inscription
     *
     */
    public function inscription(){
        return $this -> render('membre/register.html.twig');
    }


    /**
     * @Route("/connexion/", name="connexion")
     *
     *localhost:8000/connexion
     *
     */
    public function connexion(){
        return $this -> render('membre/login.html.twig');
    }


    /**
     * @Route("/profil/", name="profil")
     *
     *localhost:8000/profil
     *
     */
    public function profil(){
        return $this -> render('membre/profil.html.twig');
    }


    /**
     * @Route("/deconnexion/", name="deconnexion")
     *
     *localhost:8000/deconnexion
     *
     */
    public function deconnexion(){
        
    }







}
