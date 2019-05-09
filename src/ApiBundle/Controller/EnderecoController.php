<?php

namespace ApiBundle\Controller;

use AppBundle\Entity\Endereco;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EnderecoController extends Controller
{
    /**
     * Cadastra Endereco
     * @Route("/endereco", name="endereco_new_api")
     */
    public function enderecoAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $data = json_decode(
            $request->getContent(),
            true
        );
        $contato = $this->getDoctrine()->getRepository('AppBundle:Contatos')->find($data['contato']);
        $endereco = new Endereco();
        $endereco->setNumero($data['numero']);
        $endereco->setObs($data['obs']);
        $endereco->setQuadra($data['quadra']);
        $endereco->setContato($contato);
        $em->persist($endereco);
        $em->flush($endereco);
        // replace this example code with whatever you need
        $serializer = $this->container->get('jms_serializer');
        $response = $serializer->serialize($endereco, 'json');
        return new Response($response);
    }
}
