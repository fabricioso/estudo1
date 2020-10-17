<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = 'Eduardo';
$idade = 19;

//var_dump($nome);
//var_dump($idade);

if ($idade >= 6 && $idade <=12)
{
    for($i =0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'infantil')
            echo "O Nadador ",$nome, " compete na categoria $categorias[0]";
    }
}
else if ( $idade >= 13 && $idade <= 18)
{
    for($i =0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'adolescente')
            echo "O Nadador ",$nome, " compete na categoria $categorias[1]";
    }
}
else
{
    echo "O Nadador ",$nome, " compete na categoria $categorias[2]"; 
}

?>