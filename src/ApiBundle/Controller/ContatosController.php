<?php

namespace ApiBundle\Controller;

use AppBundle\Entity\Contatos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContatosController extends Controller
{

    /**
     * Listagem de Contatos
     * @Route("/contatos", name="contatos_api")
     */
    public function listAction(Request $request)
    {
        $contatos = $this->getDoctrine()->getRepository('AppBundle:Contatos')->findAll();
        // replace this example code with whatever you need
        $serializer = $this->container->get('jms_serializer');
        $response = $serializer->serialize($contatos, 'json');
        return new Response($response);
    }

    /**
     * Mostra um Contato
     * @Route("/contatos/{id}", name="contatos_show_api")
     */
    public function showAction($id)
    {
        $contatos = $this->getDoctrine()->getRepository('AppBundle:Contatos')->find($id);
        // replace this example code with whatever you need
        $serializer = $this->container->get('jms_serializer');
        $response = $serializer->serialize($contatos, 'json');
        return new Response($response);
    }

}
