<?php

namespace AulasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;

class UsuariosController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        #$dql = "SELECT u FROM AulasBundle:Usuarios u ORDER BY u.usuario DESC";
        #$users = $em->createQuery($dql);

        $users = $em->getRepository('AulasBundle:Usuarios')->findAll();
        /*$res = 'Lista de Usuarios <br/>';
        foreach ($users as $user)
        {
        	$res .= 'Usuario: ' . $user->getUsuario() . '<br/>';
        }
        return new Response($res);*/

        return $this->render('AulasBundle:Usuarios:index.html.twig',array('usuariosList'=>$users));
    }

    public function viewAction($id){
    	$em = $this->getDoctrine()->getManager();
    	$user = $em->getRepository('AulasBundle:Usuarios')->find($id);
    	return new Response('Usuario: ' . $user->getUsuario());
    }
}