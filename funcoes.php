<?php 

$servicos = [
    [
        "nome"=> "Criação de sites",
        "descrição"=>"Descrição legal",
        "imagem"=>"sobre-nos.svg"
    ],
    [
        "nome"=> "Criação de bolo",
        "descrição"=>"Descrição legal",
        "imagem"=>"sobre-nos.svg"
    ],
    [
        "nome"=> "Criação de hambúrguer",
        "descrição"=>"Descrição legal",
        "imagem"=>"sobre-nos.svg"
    ]
];

function listarServicos(){
    global $servicos;
    foreach ($servicos as $servico) {
        echo "<div class='col-4'>
        <div class='card'>
          <img src='images/".$servico['imagem']."' class='card-img-top' alt='...'>
          <div class='card-body'>
            <h5 class='card-title'>".$servico['nome']."</h5>
            <p class='card-text'>".$servico['descrição']."</p>
            <a href='#' class='btn btn-primary'>Contrate Agora!</a>
          </div>
        </div>
      </div>";
    }
}

