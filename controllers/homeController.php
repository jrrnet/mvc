<?php
/**
 * Created by PhpStorm.
 * User: JRNET
 * Date: 06/02/2017
 * Time: 22:39
 */


    class homeController extends controller {

        public function index() {

           // echo "TESTE ESTÁ FUNCIONANDO...";

            $usuario = new usuario();
            $usuario->setName('Antonio Junior');
            //echo "Meu nome é : ".$usuario->getName();

            $dados = array(
                'name' => $usuario->getName()
            );
            $this->loadView('home', $dados);
        }
    }