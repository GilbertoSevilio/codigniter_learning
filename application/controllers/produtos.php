<?php
class Produtos extends CI_Controller {

  public function index()
  {
    $this->load->model("Produtos_model");
    $produtos = $this->Produtos_model->buscaTodos();

    $dados = array("produtos" => $produtos);

    $this->load->view('produtos/index.php', $dados);
  }
}
