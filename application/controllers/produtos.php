<?php
class Produtos extends CI_Controller {

  public function index()
  {
    $produtos = array();
    $bota = array("nome" => "Bota de futebol", "descricao" => "bota de futebol assinada pelo Zico", "preco" => 300);
    $bota2 = array("nome" => "Bola de futebol", "descricao" => "bola de futebol assinada pelo Zico", "preco" => 400);
    array_push($produtos, $bota, $bota2);

    $dados = array("produtos" => $produtos);

    $this->load->view('produtos/index.php', $dados);
  }
}
