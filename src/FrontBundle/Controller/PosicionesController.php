<?php

namespace FrontBundle\Controller;

use FrontBundle\Entity\Posiciones;
use FrontBundle\Form\PosicionesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class PosicionesController extends Controller
{
    //====================== View =======================//
    public function indexAction()
    {
        return $this->render("@Front/Posiciones/index.html.twig");
    }

    public function newAction()
    {
        return $this->render('@Front/Posiciones/new.html.twig');
    }

    public function editAction($id)
    {
        $data = $this->getDoctrine()->getManager()->getRepository(Posiciones::class)->find($id);
        return $this->render('@Front/Posiciones/edit.html.twig', array('posicion_id'=> $data));
    }

    //======================= Apis ========================//

    public function addAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $posiciones = new Posiciones();
        $posicionesform = $this->createForm(PosicionesType::class, $posiciones);

        $posicionesform->submit($data);

        if($posicionesform->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($posiciones);
            $em->flush();
        }

        return $this->json($data);
        
    }

    public function updAction($id, Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $posicion = $this->getDoctrine()->getRepository(Posiciones::class)->find($id);

        $posicionesForm = $this->createForm(PosicionesType::class, $posicion);

        $posicionesForm->submit($data);

        if ($posicionesForm->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
        }

        return $this->json($posicion);
    }

}