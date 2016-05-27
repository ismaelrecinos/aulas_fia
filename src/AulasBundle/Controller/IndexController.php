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
            $menusList = $this->getDoctrine()->getEntityManager()->createQuery("SELECT m  
                FROM AulasBundle:Menus m 
                ,AulasBundle:PerfilDetalle pd 
                ,AulasBundle:Perfil p  
                ,AulasBundle:UsuariosPerfiles up 
                WHERE up.idUsuario = :pIdUsuario
                AND pd.idMenu IS NOT NULL
                and pd.idMenu = m.id
                and p.id = pd.idPerfil
                and up.idPerfil = p.id
                ORDER BY m.nombreMenu ASC")->setParameters(array('pIdUsuario'=>$session->get('id')))->getResult();
            if($menusList){
                $subMenusList = array();
                foreach ($menusList as $menuIter) {
                    $subMenu = $this->getDoctrine()->getEntityManager()->createQuery("SELECT sm
                        FROM AulasBundle:Menus m 
                        ,AulasBundle:MenuSub sm
                        ,AulasBundle:PerfilDetalle pd
                        ,AulasBundle:Perfil p
                        ,AulasBundle:UsuariosPerfiles up
                        WHERE up.idUsuario = :pIdUsuario
                        AND m.id = :pIdMenu
                        AND pd.idSubMenu IS NOT NULL
                        and sm.idMenu = m.id
                        and pd.idSubMenu = sm.id
                        and p.id = pd.idPerfil
                        and up.idPerfil = p.id
                        ORDER BY sm.nombreSubMenu ASC")->setParameters(array('pIdUsuario'=>$session->get('id'),'pIdMenu'=>$menuIter->getId()))->getResult();
                    if($subMenu){
                        $subMenusList = $subMenu;
                    }
                }
                $res = "Hola Mundo! <br/>";
                foreach ($subMenusList as $subMenuIter) {
                    $res .= $subMenuIter->getNombreSubMenu()."<br/>";
                }
                return new Response($res);
                return $this->render('AulasBundle:Inicio:inicio.html.twig');
            }else{
                salirAction($request);    
            }
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