<?php
	class Produtos extends CI_Controller{
	    public function index(){
	    	$produtos = array();
	    	$televisao = array("nome" => "TvHD", "descricao" => "Televisao 3D HDMI", "preco" => 3000);
	    	$notebook = array("nome" => "PHPcomRapadura", "descricao" => "Rapadura do PODER", "preco" => 9000);
	    	$notebook1 = array("nome" => "ByCreator", "descricao" => "Rapadura do PODER", "preco" => 9000);
	    	array_push($produtos, $televisao, $notebook, $notebook1);

	    	$dados = array("produtos" => $produtos);

	    	$this->load->view("produtos/index.php", $dados);
	}
}