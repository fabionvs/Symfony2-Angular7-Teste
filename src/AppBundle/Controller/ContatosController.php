<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Contatos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Contato controller.
 *
 * @Route("contatos")
 */
class ContatosController extends Controller
{

    /**
     * Creates a new contato entity.
     *
     * @Route("/new", name="contatos_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $contato = new Contatos();
        $form = $this->createForm('AppBundle\Form\ContatosType', $contato);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $contato->setNome($request->request->get('nome'));
            $contato->setEmail($request->request->get('email'));
            $contato->setTelefone($request->request->get('telefone'));
            $em->persist($contato);
            $em->flush();

            return $this->redirectToRoute('contatos_show', array('id' => $contato->getId()));
        }

        return $this->render('AppBundle:Contatos:new.html.twig', array(
            'contato' => $contato,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a contato entity.
     *
     * @Route("/{id}", name="contatos_show")
     * @Method("GET")
     */
    public function showAction(Contatos $contato)
    {
        $deleteForm = $this->createDeleteForm($contato);

        return $this->render('AppBundle:Contatos:show.html.twig', array(
            'contato' => $contato,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing contato entity.
     *
     * @Route("/{id}/edit", name="contatos_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Contatos $contato)
    {
        $deleteForm = $this->createDeleteForm($contato);
        $editForm = $this->createForm('AppBundle\Form\ContatosType', $contato);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contatos_edit', array('id' => $contato->getId()));
        }

        return $this->render('AppBundle:Contatos:edit.html.twig', array(
            'contato' => $contato,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a contato entity.
     *
     * @Route("/{id}", name="contatos_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Contatos $contato)
    {
        $form = $this->createDeleteForm($contato);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contato);
            $em->flush();
        }

        return $this->redirectToRoute('contatos_index');
    }

    /**
     * Creates a form to delete a contato entity.
     *
     * @param Contatos $contato The contato entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Contatos $contato)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contatos_delete', array('id' => $contato->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
