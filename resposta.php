<?php

require_once('head.php');

$email = $_POST['email'];

function validar($email){
    if($email == null) {
        echo "<h2> Eita </h2>
        <p>Aconteceu uma coisa triste :(</p>";
    } else {
        echo "<h2>Email enviado</h2>
        <p>Obrigado por entrar em contato conosco :D</p>
        <p>Uma mensagem foi enviada para $email</p>";
    }
}

?>



<section class="resposta mt-5">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-6">
                <img src="images/enviado.svg" class="img-fluid">
            </div>
            <div class="col-6 mt-5">
                <p><strong><?=validar($email)?></strong></p>
            </div>
        </div>
    </div>
</section>














<?php

require_once('footer.php');

?>