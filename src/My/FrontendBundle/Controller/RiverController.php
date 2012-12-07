<?php

namespace My\FrontendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use My\FrontendBundle\Entity\River;
use My\FrontendBundle\Form\RiverType;

/**
 * River controller.
 *
 */
class RiverController extends Controller
{
    /**
     * Lists all River entities.
     *
     * @Route("/", name="river")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MyFrontendBundle:River')->findAll();

        return array(
            'entities' => $entities,
        );
    }

}
