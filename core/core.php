<?php
/**
 * Objeto de fundamento do sistema core.
 * Verifica o que foi acessado no Controller
 * Verifica qual Action foi usada e faz um Run na aplicação
 * User: JRNET
 * Date: 09/02/2017
 * Time: 22:21
 */

class Core {

    public function run() {
        //$url = substr($_SERVER['PHP_SELF'], 10);
        //$url = explode("index.php", $_SERVER['PHP_SELF']); // Pega os dados que vem depois do index.php
        //$url = end($url);

        $url = '/'.( (isset($_GET['q']))?$_GET['q']:'');

        $params = array();
        if(!empty($url) && $url != '/') {
            $url = explode('/', $url); // Divide cada parte pela barra
            array_shift($url);  // Remove a primeira chave do array, uma barra

            $currentController = $url[0].'Controller'; // O primeiro array_shift Controller
            array_shift($url);

            if(isset($url[0]) && !empty($url[0])) {
                $currentAction = $url[0]; // Se foi digitado algo depois do controller
                array_shift($url);
            } else {
                $currentAction = 'index'; // Caso não tenha nada na Action retorna para o index.php
            }

            if(count($url) > 0) {
                $params = $url;
            }

        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
        }

        // Teste
        //echo "CONTROLLER: ".$this->currentController;
        //echo "<br/>ACTION: ".$this->currentAction;

        require_once 'core/controller.php';

        $c = new $currentController();
        call_user_func_array(array($c, $currentAction), $params); // Função do PHP
    }

}