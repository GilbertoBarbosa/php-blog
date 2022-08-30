<?php

$mysql = new mysqli('localhost', 'root', '#01TiagoNunes*', 'blog');
$mysql->set_charset('utf8');

if ($mysql == FALSE) {
    echo "Erro ao conectar";
}
