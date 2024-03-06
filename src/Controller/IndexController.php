<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\LenghtConvertType;
//use App\Controller\LenghtConvertController;
use App\Entity\LenghtConvert;


class IndexController extends AbstractController
{

    #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        $formConvert = $this->createForm(LenghtConvertType::class, $lenghtConvert);
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
