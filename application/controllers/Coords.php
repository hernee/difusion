<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coords extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}

	function administrar()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('coords');
		$crud->set_subject('coords');
	
		$crud->set_relation('cel_id', 'cel', 'desc');

		$output = $crud->render();

		$this->_example_output($output);
	}

	public function alta()
	{


		/*
		$Cel = new Model\Cel();
		$Cel->desc=$_POST["mail"];
		$Cel->password=$_POST["password"];
		$Cel->tipoUsuario_id=3;
		
		$Usuario->save();
*/

		$Coords = new Model\Coords();
		$Coords->lat=$_POST["mail"];
		$Coords->lon=$_POST["password"];
		$Coords->cel_id=1;
		
		$Usuario->save();
	}

/*
	function eliminar($id)
	{
		$Producto = new Model\Producto(); 
		$Producto=$Producto->find_by_producto_id($id); 
		
		if (count($Producto)>0)
		{
			$Producto=$Producto[0];
			$Producto->eliminado=1;
			$Producto->save(); 
			redirect("Producto/administrar");
		}
	}*/

	function index()
	{
		redirect("Coords/administrar");
	}
}