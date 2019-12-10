<?php


$produtos = [
    [
        "nome"=>"Criação de Sites",
        "descrição"=>"legal esse produto, super xiq",
        "imagem"=>"/undraw_destaque.svg"
    ],
    [
        "nome"=>"bife",
        "descrição"=>"arroz",
        "imagem"=>"/undraw_mobile.svg"
    ],
    [
        "nome"=>"Titela",
        "descrição"=>"Só os quitutes mais badalados do pedaço",
        "imagem"=>"/undraw_legal.svg"
    ]
];

function listarProdutos(){
    global $produtos;
    foreach ($produtos as $produto) {
        echo "
        <div class='col-4'>
            <div class='card'>
                <div class='card-body'>
                    <img src='images/". $produto['imagem']."'class='img-fluid' alt='...'>
                    <h5 class='card-title'>". $produto['nome'] ."</h5>
                    <p class='card-text'>". $produto['descrição']." </p>
                    <a href='#' class='btn btn-primary'>Contrate Agora!</a>
                </div>
            </div>
        </div>";
    }
}

