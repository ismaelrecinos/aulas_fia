<?php

namespace AulasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;

class LoginController extends Controller
{
    public function loginAction(Request $request)
    {
        if($request->getMethod()=="POST"){
        	$usuario = $request->get("inputUsuario");
        	$clave = $request->get("inputClave");
        	
            $user = $this->getDoctrine()->getRepository('AulasBundle:Usuarios')->findOneBy(array('usuario'=>$usuario,'passWord'=>$clave)); 

            /*$user = $this->getDoctrine()->getEntityManager()->createQuery("select u.id, u.usuario,u.nombreUsuario from AulasBundle:Usuarios u where u.usuario = :param_one and u.passWord = :param_two")->setParameters(array('param_one'=>$usuario, 'param_two'=>$clave))->getResult(); 

            $query = $this->getDoctrine()->getEntityManager()->createQuery('select u from AulasBundle:Usuarios u where u.passWord = :param_two');
            $query->setParameter('param_one',$usuario);
            $query->setParameter('param_two',$clave);
            $user = $query->getResult(); */

            if($user){
                $session = $request->getSession();
                $session->set("id",$user->getId());
                $session->set("usuario",$user->getUsuario());
                $session->set("nombreUsuario",$user->getNombreUsuario());

        		return $this->redirect($this->generateUrl("index"));
        	}else{
        	   $this->get("session")->getFlashBag()->add("mensaje","Error en usuario o clave."); 
               return $this->redirect($this->generateUrl("login"));
        	} 
        }
        return $this->render('AulasBundle:Login:login.html.twig');
    }
}