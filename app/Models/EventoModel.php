<?php 
namespace App\Models;
use CodeIgniter\Model;

class EventoModel extends Model{
    protected $table = "eventos";
    protected $primatyKey ="id";

    protected $allowedFields = ["nombreEvento","fecha", "cantInvitados","lugar","nombreOrganizador"];
    protected $useTimestamps =true;
}


?>