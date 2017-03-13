<?php
/**
 * Created by PhpStorm.
 * User: JRNET
 * Date: 06/02/2017
 * Time: 22:39
 */


    class homeController extends controller {

        public function __construct() {
            parent::__construct();
        }

        public function index() {

            /*
            $usuario = new usuario();
            $usuario->setName('Antonio');
            $dados = array(
                'name' => $usuario->getName()
            );
            */
            $fotos = new fotos(); // Istancia a funçao fotos no model
            $dados['fotos'] = $fotos->getFotos();

            $this->loadTemplate('home', $dados);
        }
        public function sobre() {
            $dados = array();
            $this->loadTemplate('sobre', $dados);
        }
    }

?>