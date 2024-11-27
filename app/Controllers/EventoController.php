<?php 
namespace App\Controllers;
use App\Models\EventoModel;


class EventoController extends BaseController{
    protected $eventoModel;
    function __construct(){
        $this->eventoModel = new EventoModel();
    }


    #Funcion Index para mostror todo
    function index(){
        
        $eventos = $this->eventoModel->findAll();

        $data= array(
            "evento"=> $eventos
        );

        return view("eventos/index", $data);

    }

    //para crear un usuario
    function create(){
        return view("eventos/create");
    }
    
    //para guardar un usuario en la base de datos
    function store(){
        $data= array(
            "nombreEvento" => $this->request->getPost("nombreEvento"),
            "lugar" => $this->request->getPost("lugar"),
            "nombreOrganizador" => $this->request->getPost("nombreEvento"),
            "cantInvitados" => $this->request->getPost("cantInvitados"),
            "fecha" => $this->request->getPost("fecha")
        );

        $this->eventoModel->save($data);
        return redirect()->to("/");
    }


    //Para mostrar un solo evento
    function show(){
        
    }

    
}

?>