<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LagrappeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
       
        return $this->render('lagrappe/home.html.twig', [
            
            'controller_name' => 'LagrappeController',
            'title_1' => 'Le premier site comparateur de vin !',
            'title_2' => 'LA GRAPPE'
        ]);
    }

    /**
     * @Route("/about", name="about")
    */
    public function about()
    {
        return $this->render('lagrappe/about.html.twig', [
            'title_1' => 'Le premier site comparateur de vin !',
            'title_2' => 'LA GRAPPE'
        ]);
    }

    /**
     * @Route("/products", name="products")
    */
    public function products()
    {
        return $this->render('lagrappe/products.html.twig', [
            'title_1' => 'Le premier site comparateur de vin !',
            'title_2' => 'LA GRAPPE'
        ]);
    }

    /**
     * @Route("/store", name="store")
    */
    public function store()
    {
        return $this->render('lagrappe/store.html.twig', [
            'title_1' => 'Le premier site comparateur de vin !',
            'title_2' => 'LA GRAPPE'
        ]);
    }

    /**
     * @Route("/pdt_note", name="pdt_note")
    */
    public function pdt_note()
    {
        return $this->render('lagrappe/products_note.html.twig', [
            'title_1' => 'Le premier site comparateur de vin !',
            'title_2' => 'LA GRAPPE'
        ]);
    }
}


