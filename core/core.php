<?php
/**
 * Created by PhpStorm.
 * User: JRNET
 * Date: 09/02/2017
 * Time: 22:21
 */

class Core {

    public function run() {
        $url = substr($_SERVER['PHP_SELF'], 10);

        if(!empty($url)) {
            $url = explode('/', $url);
            array_shift($url);

            $currentController = $url[0].'Controller';
            if(isset($url[1])) {
                $currentAction = $url[1];
            } else {
                $currentAction = 'index';
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
        $c->$currentAction();
    }

}