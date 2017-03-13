<?php
/**
 * Classe Fotos.
 * Uma tabela do Banco Fotos
 * User: JRNET
 * Date: 01/03/2017
 * Time: 22:28
 */

  class Fotos extends model {

    public function __construct() {
      parent::__construct();
    }
  
  public function getFotos() {
    $array = array();


    $sql = $this->db->query("SELECT * FROM fotos");        
    
    if($sql->rowCount() > 0) {
      $array = $sql->fetchAll();
    }

    return $array;
  }
        
}

?>