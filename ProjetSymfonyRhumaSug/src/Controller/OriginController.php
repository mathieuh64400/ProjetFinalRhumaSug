<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OriginController extends AbstractController
{
    /**
     * @Route("/origin", name="origin")
     */
    public function index()
    {
        return $this->render('origin/index.html.twig', [
            'controller_name' => 'OriginController',
        ]);
    }
}
