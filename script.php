
<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['$nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

if (empty($nome))
{
    echo 'O nome não pode ser vazio';
    return;
}

if(strlen($nome) < 3)
{
    echo 'O nome deve conter mais que 3 caracteres';
    return;
}

if(strlen($nome) > 40 )
{
    echo 'O nome é muito extenso';
    return;
}

if(!is_numeric($idade))
{
    echo 'Necessário digitar um numero';
    return;
}

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
*/