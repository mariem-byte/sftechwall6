<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class FirstController extends AbstractController
{
#[Route('/first/{name}/{firstname}', name: 'app_first')]
    public function index(Request $request,$name, $firstname): Response
    {  dd($request);
        return $this->render('first/index.html.twig',['nom'=>$name,'prenom'=>$firstname]);
    }
}
