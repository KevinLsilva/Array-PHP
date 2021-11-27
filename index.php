<?php
 
echo "Aula 5 - Arrays";
 
// antes da versão 5.4 do php
$cor = array(54, "azul", "preto", "branco","vermelho");
 
// depois da versão 5.4 do php
$color = ["azul","preto","branco","vermelho"];
 
echo "<br />";
echo "<br />";
 
// verificar o array (simples)
echo "Estrutura simples do array <br />";
print_r($cor);
 
echo "<br />";echo "<br />";
 
// verificar estrutura detalhada do array
echo "Estrutura detalhada do array <br />";
var_dump($cor);
 
echo "<br />";echo "<br />";
// removendo um índice do array
echo "Removendo um índice do array <br />";
unset($cor[3]);
print_r($cor);
echo "<br />";echo "<br />";
// adicionando um índice do array
echo "Adicionando um índice do array <br />";
$cor[3] = "fucsia";
print_r($cor);
echo "<br />";echo "<br />";
 
// imprimindo indices
echo "Imprimindo índice 3: " . $cor[3] . "<br />";
echo "Imprimindo índice 4: " . $cor[4] . "<br />";
echo "<br />";echo "<br />";
 
// Arrays Associativos
echo "Arrays Associativos";
echo "<br />";
$dados = [
    "nome" => "wagner", 
    "idade" => 52, 
    "sexo" => "M"
];
 
$dados["endereco"] = "Rua Um, 2"; // adiciona indice associativo
$dados["nome"] = "Antonio"; // altera conteúdo do array
unset($dados["endereco"]); // remove o indice associativo 'endereco'
 
echo "Verificando a estrutura simples do array 'dados'";
echo "<br />";
print_r($dados);
 
echo "<br />";
echo "<br />";
 
echo "Recuperando dados de arrays associativos";
echo "<br />";
echo $dados["nome"];
 
echo "<br />";
echo "<br />";
 
// Matrizes
 
// arrays associativos multidimensionais
$game = [
    [1,"João", 11],
    [2, "Wagner", 54],
    [3, "Antonio", 12]
];
echo "<br />";
// imprimir o jogador Wagner
echo "ID= ". $game[1][0] . " NOME= " . $game[1][1] . " PONTOS= " .$game[1][2];
 
// array associativos multidimensionais (matrizes associativas)
$jogo = [
    ["ID" => 1, "NOME" => "João", "PONTOS" => 11],
    ["ID" => 2, "NOME" => "Wagner", "PONTOS" => 54],
    ["ID" => 3, "NOME" => "Antonio", "PONTOS" => 12]
];
 
echo "<br />";
// imprimir o jogador Wagner
echo "ID= ". $jogo[1]["ID"] . " NOME= " . $jogo[1]['NOME'] . " PONTOS= " .$jogo[1]['PONTOS'];