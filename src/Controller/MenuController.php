<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    #[Route('/menu', name: 'menu')]
    public function index(): Response
    {
        $menuItems= [
            ['label'=>'Accueil', 'route'=>'menu'],
            ['label'=>'A propos', 'route'=>'propos'],
            ['label'=>'Services', 'route'=>'services'],
            ['label'=>'Contact', 'route'=>'contact']
        ];
        return $this->render('menu/index.html.twig', [
            'menuItem' => $menuItems,
        ]);
    }

    #[Route('/propos', name: 'propos')]
    public function propos(): Response
    {
        $menuItems= [
            ['label'=>'Accueil', 'route'=>'menu'],
            ['label'=>'A propos', 'route'=>'propos'],
            ['label'=>'Services', 'route'=>'services'],
            ['label'=>'Contact', 'route'=>'contact']
        ];
        return $this->render('menu/propos.html.twig', [
            'menuItem' => $menuItems,
        ]);
    }



    #[Route('/services', name: 'services')]
    public function services(): Response
    {
        $menuItems= [
            ['label'=>'Accueil', 'route'=>'menu'],
            ['label'=>'A propos', 'route'=>'propos'],
            ['label'=>'Services', 'route'=>'services'],
            ['label'=>'Contact', 'route'=>'contact']
        ];
        return $this->render('menu/services.html.twig', [
            'menuItem' => $menuItems,
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        $menuItems= [
            ['label'=>'Accueil', 'route'=>'menu'],
            ['label'=>'A propos', 'route'=>'propos'],
            ['label'=>'Services', 'route'=>'services'],
            ['label'=>'Contact', 'route'=>'contact']
        ];
        return $this->render('menu/contact.html.twig', [
            'menuItem' => $menuItems,
        ]);
    }

    
}
