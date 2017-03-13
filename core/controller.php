<?php
/**
 * Controller base inicial da aplicação
 * User: JRNET
 * Date: 13/02/2017
 * Time: 23:14
 */

    class controller {

        protected $db;

        public function __construct() {
            global $config;
            $this->db = new PDO("mysql:dbname=".$config['dbname'].';host='.$config['host'],$config['dbuser'],$config['dbpass']); // Banco MySQL            
        }

        public function loadView($viewName, $viewData = array()) {

            extract($viewData); // Transforma os dados do Array em variaveis
            include 'views/'.$viewName.'.php';

        }
           // Metodo Load Template e a estrutura do site
        public function loadTemplate($viewName, $viewData = array()) {
            include 'views/template.php';

        }
        
        public function loadViewInTemplate($viewName, $viewData = array()) {
            extract($viewData);
            include 'views/'.$viewName.'.php';
        }
    }