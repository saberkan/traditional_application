<?php

namespace UP1\ThesisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="welcome")
     * @Template()
     */
    public function indexAction($message = null)
    {
        return array('message' => $message);
    }
    
        /**
     * @Route("/connect", name="connection")
     * @Template("UP1ThesisBundle:Default:index.html.twig")
     * @Method("POST")
     */
    public function connectAction()
    {
        $request = $this->getRequest();
        $login = $request->request->get('login');
        $password = $request->request->get('password');
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UP1ThesisBundle:User')->findOneByUserLogin($login);
        
        if($user != null && $password == $user->getPassword()) {
            $session = new Session();
            $session->start();
            $session->set('login', $login);
            return $this->redirect($this->generateUrl('nav_center'));
        }
        
        $message = "please retry with correct login and password";
        return array('message' => $message);
    }
    
     /**
     * @Route("/nav", name="nav_center")
     * @Template()
     */
    public function navAction()
    {
        return array();
    }
    
    

}
