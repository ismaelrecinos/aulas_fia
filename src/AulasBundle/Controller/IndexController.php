<?php

namespace AulasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;

class IndexController extends Controller
{
    public function inicioAction(Request $request)
    {
    	$session = $request->getSession();
    	if($session->has("id")){
    		return $this->render('AulasBundle:Inicio:inicio.html.twig');
    	}else{
    		$this->get("session")->getFlashBag()->add("mensaje","Debe estar logueado para ver este contenido."); 
               return $this->redirect($this->generateUrl("login"));
    	}
    	return $this->render('AulasBundle:Inicio:inicio.html.twig');
    }

    public function salirAction(Request $request)
    {
        $session = $request->getSession();
        $session->clear();
        $this->get("session")->getFlashBag()->add("mensaje","Se ha cerrado sesión exitosamente.");
        return $this->redirect($this->generateUrl("login"));
    }
}