<?php

namespace UP1\ThesisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use UP1\ThesisBundle\Entity\Event;
use UP1\ThesisBundle\Form\EventType;
use Symfony\Component\HttpFoundation\Session\Session;
/**
 * Event controller.
 *
 * @Route("/event")
 */
class EventController extends Controller
{

    /**
     * Lists all Event entities.
     *
     * @Route("/", name="event")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $session = new Session();
        $session->start();
        $login = $session->get('login');
        $user = $em->getRepository('UP1ThesisBundle:User')->findOneByUserLogin($login); 
        $entities = $em->getRepository('UP1ThesisBundle:Event')->findAll();

        return array(
            'entities' => $entities,
            'page' => "allevents",
            'user' => $user
        );
    }
    
        /**
     * Lists all Event entities for user.
     *
     * @Route("/myevents", name="my_events")
     * @Method("GET")
     * @Template("UP1ThesisBundle:Event:index.html.twig")
     */
    public function indexUserAction()
    {
        $em = $this->getDoctrine()->getManager();

        $session = new Session();
        $session->start();
        $login = $session->get('login');
        $user = $em->getRepository('UP1ThesisBundle:User')->findOneByUserLogin($login); 
        $entities = $em->getRepository('UP1ThesisBundle:Event')->findByEventCreator($user);
        
        return array(
            'entities' => $entities,
            'page' => "myevents",
            'user' => $user
        );
    }
    
        /**
     * Lists all Event entities for subscriber.
     *
     * @Route("/subscriptions", name="subscriptions")
     * @Method("GET")
     * @Template("UP1ThesisBundle:Event:index.html.twig")
     */
    public function indexSubscriberAction()
    {
        $em = $this->getDoctrine()->getManager();

        $session = new Session();
        $session->start();
        $login = $session->get('login');
        $user = $em->getRepository('UP1ThesisBundle:User')->findOneByUserLogin($login); 
        $entities = $user->getSubscriptionEvent();

        return array(
            'entities' => $entities,
            'page' => "subscriptions",
            'user' => $user
        );
    }
    
    
            /**
     * subscribe
     *
     * @Route("/subscribe", name="subscribe")
     * @Method("POST")
     * @Template("UP1ThesisBundle::message.html.twig")
     */
    public function subscribeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session = new Session();
        $session->start();
        $login = $session->get('login');
        $user = $em->getRepository('UP1ThesisBundle:User')->findOneByUserLogin($login); 
        $request = $this->getRequest();
        $idEvent = $request->request->get('idEvent');
        $entity = $em->getRepository('UP1ThesisBundle:Event')->findOneById($idEvent);
        
        $user->addSubscriptionEvent($entity);
        $em->persist($user);
        $em->flush();
            
        return array(
            'message'      => "subscription done",
        );
    }
    
                /**
     * unsubscribe
     *
     * @Route("/unsubscribe", name="unsubscribe")
     * @Method("POST")
     * @Template("UP1ThesisBundle::message.html.twig")
     */
    public function unsubscribeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $session = new Session();
        $session->start();
        $login = $session->get('login');
        $user = $em->getRepository('UP1ThesisBundle:User')->findOneByUserLogin($login); 
        $request = $this->getRequest();
        $idEvent = $request->request->get('idEvent');
        $entity = $em->getRepository('UP1ThesisBundle:Event')->findOneById($idEvent);
        
        $user->removeSubscriptionEvent($entity);
        $em->persist($user);
        $em->flush();
            
        return array(
            'message'      => "subscription removed",
        );
    }
    

    
    
    /**
     * Creates a new Event entity.
     *
     * @Route("/create_event", name="event_create")
     * @Method({"GET", "POST"})
     * @Template("UP1ThesisBundle:Event:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Event();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('event_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Event entity.
     *
     * @param Event $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Event $entity)
    {
        $form = $this->createForm(new EventType(), $entity, array(
            'action' => $this->generateUrl('event_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Event entity.
     *
     * @Route("/new", name="event_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Event();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Event entity.
     *
     * @Route("/show/{id}", name="event_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UP1ThesisBundle:Event')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Event entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Event entity.
     *
     * @Route("/{id}/edit", name="event_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UP1ThesisBundle:Event')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Event entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Event entity.
    *
    * @param Event $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Event $entity)
    {
        $form = $this->createForm(new EventType(), $entity, array(
            'action' => $this->generateUrl('event_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Event entity.
     *
     * @Route("/{id}", name="event_update")
     * @Method("PUT")
     * @Template("UP1ThesisBundle:Event:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UP1ThesisBundle:Event')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Event entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('event_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Event entity.
     *
     * @Route("/{id}", name="event_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('UP1ThesisBundle:Event')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Event entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('event'));
    }

    /**
     * Creates a form to delete a Event entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('event_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
