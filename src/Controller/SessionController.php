<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class SessionController extends AbstractController
{
    #[Route('/session', name: 'app_session')]
    public function index(Request $request): Response
    {   //session start
		$session=$request->getSession();
		$nbrvisite=0;
		if ($session ->has('nbVisite')){
			$nbrvisite=$session->get('nbVisite')+1;
			$session->set('nbVisite' ,$nbrvisite);
		}else {
			$nbrvisite=1; 
			 
		} 
		$session->set('nbVisite' ,$nbrvisite);
        return $this->render('session/index.html.twig', [
            'controller_name' => 'SessionController',
        ]);
    }
}
