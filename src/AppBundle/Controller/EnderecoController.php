<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EnderecoController extends Controller
{
    /**
     * Listagem de Contatos
     * @Route("/", name="index")
     */
    public function listAction(Request $request)
    {
        $enderecos = $this->getDoctrine()->getRepository('AppBundle:Endereco')->findAll();
        // replace this example code with whatever you need
        return $this->render('AppBundle:Endereco:index.html.twig', array(
            'enderecos' => $enderecos,
        ));
    }

    /**
     * Listagem de Contatos
     * @Route("/{id}/show", name="endereco_show")
     */
    public function showAction($id)
    {
        $endereco = $this->getDoctrine()->getRepository('AppBundle:Endereco')->find($id);
        // replace this example code with whatever you need
        return $this->render('AppBundle:Endereco:show.html.twig', array(
            'endereco' => $endereco,
        ));
    }

    /**
     * Listagem de Contatos
     * @Route("/{id}/delete", name="endereco_delete")
     */
    public function deleteAction(Request $request)
    {
        $enderecos = $this->getDoctrine()->getRepository('AppBundle:Endereco')->findAll();
        // replace this example code with whatever you need
        return $this->render('AppBundle:Endereco:index.html.twig', array(
            'enderecos' => $enderecos,
        ));
    }


    /**
     * Edição de endereços
     * @Route("/{id}/edit", name="endereco_delete")
     */
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $endereco = $this->getDoctrine()->getRepository('AppBundle:Endereco')->find($id);
        if($request->request->isMethod('POST')){
            $endereco->setQuadra($request->request->get('quadra'));
            $endereco->setNumero($request->request->get('numero'));
            $endereco->setObs($request->request->get('obs'));
            $em->persist($endereco);
            $em->flush();
            return $this->redirectToRoute('endereco_show', array('id' => $endereco->getId()));
        }

        // replace this example code with whatever you need
        return $this->render('AppBundle:Endereco:edit.html.twig', array(
            'endereco' => $endereco,
        ));
    }
}
