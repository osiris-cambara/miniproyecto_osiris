<?php
namespace App\Models;
use codeIgniter\Models;

class DatosModel extends Model {
  public function listar () {
    $n = $this->db->query("SELECT * from persona");
    return $n->getResult();
  }
}
