<?php

namespace GST\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FrontController extends Controller
{
    /**
     * @Route("/front/bien/search")
     */
    public function searchBienAction()
    {
        return $this->render('GSTImmobilierBundle:Front:search_bien.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/front/bien/reserverBien")
     */
    public function reserverBienAction()
    {
        return $this->render('GSTImmobilierBundle:Front:reserver_bien.html.twig', array(
            // ...
        ));
    }

}
