<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\LenghtConvertType;
use App\Entity\LenghtConvert;

class LenghtConvertController extends AbstractController
{
 
    #[Route('/', name: 'app_lenght_convert')]
    public function index(): Response
    {
        $lenghtConvert = new LenghtConvert(); 

        $formConvert = $this->createForm(LenghtConvertType::class, $lenghtConvert);
        return $this->render('lenght_convert/index.html.twig', [
            'controller_name' => 'LenghtConvertController',
            'formConvert' => $formConvert,
        ]);
    }
}
