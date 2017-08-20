<?php

namespace AppBundle\Controller;
 
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use AppBundle\Entity\Eys;

class EysController extends FOSRestController
{
    /**
     * @Rest\Get("/eys")
     */
    public function getAction()
    {
      $restresult = $this->getDoctrine()->getRepository('AppBundle:Eys')->findAll();
        if ($restresult === null) {
          return new View("there are no eys exist", Response::HTTP_NOT_FOUND);
     }
        return $restresult;
    }

    /**
     * @Rest\Get("/eys/{id}")
     */
     public function idAction($id)
     {
       $singleresult = $this->getDoctrine()->getRepository('AppBundle:Eys')->find($id);
       if ($singleresult === null) {
       return new View("eys not found", Response::HTTP_NOT_FOUND);
       }
     return $singleresult;
     }


    /**
     * @Rest\Post("/eys")
     */
     public function postAction(Request $request)
     {
       
       $detalle = $request->request->get('detalle');
       $eos = $request->request->get('eos');
       $valor = $request->request->get('valor');
       $ot = $request->request->get('ot');
            
     if(empty($detalle) || empty($valor))
     {
       return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE); 
     } 
      $data = new Eys;
      $data->setDetalle($detalle);
      $data->setEos($eos);
      $data->setValor($valor);
      $data->setOt($ot);
      $data->setFecha();
      $em = $this->getDoctrine()->getManager();
      $em->persist($data);
      $em->flush();
       return new View("Eys Added Successfully", Response::HTTP_OK);
       //return new Response(json_encode($request->request->all()));
     }


}
