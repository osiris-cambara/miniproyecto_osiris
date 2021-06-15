<?php
namespace App\Models;
use CodeIgniter\Model;

class DatosModel extends Model {
  public function listar () {
    $n = $this->db->query("SELECT * from persona");
    return $n->getResult();
  }
}
