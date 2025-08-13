<?php
    echo "<h1><center>ARRAYS</center></h1>";
    echo "Um array é na verdade, um mapa ordenado. Ou seja, <br>é um tipo que relaciona valores a chaves. <br>Portanto, é uma lista de valores que serão armazendos ma memória.";
    echo "<hr>";
    echo "<h2>Crindo o array</h2>";
    $arr = ["primeiro", "Segundo", "Terceiro"];
    print_r($arr);

    echo "<hr>";
    echo "<h2>Outra maneira de criar o array</h2>";
    $arr = array("primeiro", "Segundo", "Terceiro");
    print_r($arr);

    echo "<hr>";
    echo "<h2>Utilizando o índice do array</h2>";
    $arr = array("primeiro", "Segundo", "Terceiro");
    echo $arr[1];

    echo "<hr>";
    echo "<h2>Array associativo</h2>";
    $arr = array("primeiro", "Segundo", "Terceiro");
    $arr = array("nome"=>"Alberto", "sobrenome"=>"Roberto", "idade"=>"50");
    echo "nome: " .$arr["nome"]."<br>";
    echo "sobrenome: " .$arr["sobrenome"]."<br>";
    echo "idade: " .$arr["idade"]."<br>";
    echo "<hr>";

    echo "<h2>Arrary Multidimensional</h2>";
    $arr = array(
        array("primeiro", "segundo"),
        array("terceiro", "quarto")
    );
    print_r($arr);
    echo "<br>";
    print_r ($arr[0]);
    echo "<br>";
    echo $arr[1][1];

    echo "<hr>";
    echo "<h2>Contando os elementos de um array</h2>";
    $numeros = [1,2,300,7000,23,56,89,21,54,34,345];
    echo count($numeros);

    echo "<hr>";
    echo "<h2>Adicionando dinamicamente elementos em um array</h2>";
    $arr = array();
    $arr[] = "azul";
    $arr[] = "vermelho";
    $arr[] = "amarelo";
    print_r($arr);

    echo "<hr>";
    echo "<h2>Adicionando no início do array</h2>";
    $frutas = array("maçã", "melão","melancia");
    array_unshift($frutas, "abacaxi");
    print_r($frutas);

    echo "<hr>";
    echo "<h2>Adicionando no final do array</h2>";
    $frutas = array("maçã", "melão","melancia");
    array_push($frutas, "abacaxi");
    print_r($frutas);

    echo "<hr>";
    echo "<h2>Removendo o promeiro elemento do array</h2>";
    $frutas = array("maçã", "melão","melancia");
    array_shift($frutas);
    print_r($frutas);

    echo "<hr>";
    echo "<h2>Procurando o elemneto no array</h2>";
    $frutas = array("maçã", "melão","melancia","uva","goiaba","banana");
    $proc = "melancia";
    $index = array_search($proc, $frutas);
    if ($index !== false) {
        echo "O elemento $proc esta na prosição $index";
    } else {
        echo "Elemento não encontrado!";
    }
?>