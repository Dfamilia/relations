<?php

    namespace FrontBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;

    class DepartamentoController extends Controller {

        public function indexAction()
        {
            return $this->render("@Front/Departamentos/index.html.twig");
        }

    }
