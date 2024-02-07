<?php

namespace App\Controller;

use App\Entity\Service;
use App\Form\ServiceFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NewServiceController extends AbstractController
{

    
    #[Route('/new/service', name: 'new_service')]
    public function newService(Request $request): Response
    {
       

        $service= new Service();
        $form=$this->createForm(ServiceFormType::class, $service);
        $form->handleRequest($request);
        
        return $this->render('new_service/index.html.twig', [
            'form' =>$form->createView(),
        ]);
    }
}
