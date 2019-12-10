<?php



if (!isset($_POST['email']) == null){
    echo "Um email para ".  $_POST['email'] . " foi enviado";
} else {
    echo "Aconteceu uma coisa triste.";
}