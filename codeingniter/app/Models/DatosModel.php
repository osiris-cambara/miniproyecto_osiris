<?
namespace App\Models;
use codeIgniter\Model;

class DatosModel extends Model {
  public function listar () {
    $n = $this->db->query("SELECT * from persona");
    return $n->getResult();
  }
}
