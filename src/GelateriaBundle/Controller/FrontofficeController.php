<?php

namespace GelateriaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FrontofficeController extends Controller
{
    /**
     * @Route("/")
     */
    public function homepageAction()
    {
        return $this->render('GelateriaBundle:Frontoffice:homepage.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/gelateria")
     */
    public function gelateriaAction()
    {
        return $this->render('GelateriaBundle:Frontoffice:gelateria.html.twig', array(
            'gelateria_nome' => 'Gelateria da Mimmo - ' . rand(0, 1000),
            'gelateria_gusti' => array(
                'Cioccolato',
                'Panna',
                'Menta',
            ),
        ));
    }

    /**
     * @Route("/search")
     */
    public function searchAction()
    {
        return $this->render('GelateriaBundle:Frontoffice:search.html.twig', array(
            'elenco_gelaterie' => [
                'Gelateria A',
                'Gelateria B',
                'Gelateria C',
                'Gelateria D',
            ],
        ));
    }
}
