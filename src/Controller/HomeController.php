<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    
    public function index()
    {
        // return $this->render('home/index.html.twig', [
        //     'controller_name' => 'HomeController',
        //     "user" => [
        //         "Nom"=> "Bob",
        //         "Prenom" => "Patrick",
        //         "avatar" => "https://cdn-s-www.ledauphine.com/images/BE7AB5BD-E580-45C4-B811-7236702E837F/LDL_V0_12/bob-l-eponge-et-son-ami-patrick-l-etoile-de-mer-capture-d-ecran-1508313090.jpg",
        //     ]
        // ]);
    
        return $this->redirectToRoute("login");
    }
}

