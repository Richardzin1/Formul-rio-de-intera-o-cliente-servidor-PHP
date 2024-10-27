<?php

// Exercicio 2

// NOME
// CURSO
// IDADE
// TEMPO DE FACULDADE (EM SEMESTRES)

// P1 (peso 1.5)
// P2 (peso 2.5)
// P3 (peso 3.5)
 
// 1 - EXIBIR DADOS COMPLETOS
// 2 - EXIBIR TEMPO QUE FALTA PARA SER FORMAR
// 3 - EXIBIR NOTAS INDIVIDUALMENTE COM OS PESOS CALCULADOS
// 4 - EXIBIR MÉDIA DAS 3 AVALIAÇÕES

$nome = 'richard';
$curso = 'ads';
$idade = 25;
$semestreAtual = 2;
$tempoCurso = 6;
$tempoFalta = 0;


$p1 = 2;
$p2 = 4;
$p3 = 5;

$tempoFalta = $tempoCurso - $semestreAtual;
$nota1 = ($p1 + $p2 + $p3) / 3;


 

//dados completos
echo "nome:$nome<br>";
echo "curso: $curso <br>";
echo "idade: $idade<br>" ;
echo "semestre atual: $semestreAtual<br>" ;
echo "Tempo de curso $tempoCurso<br>";
echo "tempo que falta para se forma: $tempoFalta";

echo "<br><br>";
// notas individuais
echo "Nota P1: $p1  <br>";
echo "Nota P2: $p2  <br>";
echo "Nota P3: $p3  <br>";

echo "<br>";
// parovado ou reprovado

echo "O aluno foi :<br>";
if($nota1 >= 6){
    echo "Aprovado<br>";
} else{
    echo "reprovado<br>";
}

echo "média final: $nota1";

echo "<br>";
echo "<br>";
echo "<br>";

// Exercicio 3;

echo '3º Aluno <br>';
$aluno3 = ['nome' => 'João','curso' => 'Engenharia','idade' => 21,'semestre_atual' => 4,'tempo_de_faculdade' => '6', 'Nota: P1' => 7.5, 'Nota: P2' => 8.0, 'Nota: P3' => 6.0];

foreach ($aluno3 as $chave => $valor) {
    // Verifica se a chave é uma das notas
    if (strpos($chave, 'N') === 0) {
        echo "Nota $chave: $valor<br>";
    } else {
        // Exibe os outros dados
        echo ucfirst(str_replace('_', ' ', $chave)) . ": $valor<br>";
    }
}
//soma média final

$nota3 = ($aluno3['Nota: P1'] + $aluno3['Nota: P2'] + $aluno3['Nota: P3']) / 3;

echo "resultado: $nota3";
 if($nota3 >= 6.0){
    echo '<br><br>O aluno foi Aprovado !<br><br><br>';
 } else{
    echo 'O aluno foi Reprovado !';
 }

 echo "<br>";
 echo "<br>";
 echo "<br>";

 //ALUNO 4
echo '4º Aluno <br>';

$alunos4 = ['nome' => 'Pedrinho','curso' => 'Gestão de Turismo','idade' => 24,'semestre_atual' => 3,'tempo_de_faculdade' => 6,'Nota: P1' => 5.5,'Nota: P2' => 4.0,'Nota: P3' => 6.1, 'Repetiu' => true];

var_dump($alunos4);
echo "<br><br>";
foreach ($alunos4 as $chave4 => $resultado) {
   if (strpos($chave4, 'N') === 0) {
       echo "Nota $chave4: $resultado<br>";
   } else {
       // Exibe os outros dados
       echo ucfirst(str_replace('_', ' ', $chave4)) . ": $resultado<br>";
   }
}




// Exercicio 2

// NOME
// CURSO
// IDADE
// TEMPO DE FACULDADE (EM SEMESTRES)

// P1 (peso 1.5)
// P2 (peso 2.5)
// P3 (peso 3.5)
 
// 1 - EXIBIR DADOS COMPLETOS
// 2 - EXIBIR TEMPO QUE FALTA PARA SER FORMAR
// 3 - EXIBIR NOTAS INDIVIDUALMENTE COM OS PESOS CALCULADOS
// 4 - EXIBIR MÉDIA DAS 3 AVALIAÇÕES


$dados = [ 'Nome' => 'Richard',
    'Idade' => 25,
    'Curso' => 'ADS',
    'semestreAtual' => 2,
    'TotalSemestre' => 6,
    'p1' => 8.5,
    'p2' => 7.5,
    'p3' => 5.5
];

foreach ($dados as $dado => $valor) {
    echo "$dado: $valor\n<br>";
}
$restam = $dados['TotalSemestre'] - $dados['semestreAtual'];
echo "Restam: $restam semestre(s)";

$mediaFinal = ($dados['p1'] + $dados['p2'] + $dados['p3']) / 3;

echo "Nota final é $mediaFinal";

echo "<br>";
echo "<br>";
echo "<br>";

// tabuada

$numeros = [5, true, 'O', 'R', 2, 6, 'O'];

$TotalPar = 0;
$TotalInpar = 0;
$SomaNumeros = 0;
$TotalBooleanos = 0;
$totalStrings = 0;

foreach($numeros as $numero){
   if(is_numeric($numero)){
    if($numero % 2 == 0){
       $TotalPar++;
    } else{
        $TotalInpar++;
    }
    $SomaNumeros += $numero;
   }
   if(is_bool($numero)){
      $TotalBooleanos++;
   }
   if(is_string($numero)){
      $totalStrings++;
   }
}



echo "Total de numeros pares $TotalPar<br>";
echo "Total de numeros impares $TotalInpar<br>";
echo "total da soma dos numeros $SomaNumeros<br>";
echo "total de strings $totalStrings<br>";
echo "total de boleanos $TotalBooleanos<br>";
echo "Total de elementos = " .count($numeros) . "<br>";
echo "ultimo elemento = " .  $numeros[count($numeros) - 1] . "<br>";
echo "primeiro elemento = " . $numeros[0] ;



$testes = [
   'name1' => 'Richard',
   'name2' => 'tiago',
   'name3' => 'Renan',
   'name4' => 'mendes'
];

foreach($testes as $teste => $value){
   // echo "$teste: $value\n <br>";
   echo "$teste : $value\n <br>";
   
}

echo "<br>";
echo "<br>";
echo "<br>";





// cadastro de pessoas

$p1 = [
   'name' => 'juliana',
   'idade' => '21',
   'genero' => 'F'
];

$arraypessoas [] = $p1;

$p2 = [
   'name' => 'maria',
   'idade' => '23',
   'genero' => 'F'
];

$arraypessoas[] = $p2;

$p3 = [
   'name' => 'tiago',
   'idade' => '21',
   'genero' => 'M'
];

$arraypessoas[] = $p3;

$p4 = [
   'name' => 'henrique',
   'idade' => '21',
   'genero' => 'M'
];
$arraypessoas[] = $p4;

$arrayfeminino = [];
$arraymasculino = [];

foreach($arraypessoas as $key => $value){
   echo "Pessoa $key: Name: {$value['name']}, Idade: {$value['idade']}, Gênero: {$value['genero']}<br>";

}

foreach($arraypessoas as $pessoa){
   if($pessoa['genero'] == 'F'){
      $arrayfeminino[] = $pessoa;
   } else{
      $arraymasculino[] = $pessoa;
   }

}

echo "Pessoas Femininas:<br>";
foreach ($arrayfeminino as $feminino) {
    echo "{$feminino['name']}, Idade: {$feminino['idade']}<br>";
}

echo "<br>";
echo "Pessoas Masculinas<br>";
foreach($arraymasculino as $masculino){
   echo "{$masculino['name']}, Idade: {$masculino['idade']}<br>";


}

echo "<br>";
echo "<br>";
echo "<br>";

// algoritmo se passou ou repetiu

// aula 3

$presenca = 29;
$presencaMinima = 30;
$nota = 8;
$media = 6;

if($nota < 6 or $presenca < $presencaMinima){
   echo 'Reprovado';
}elseif ($nota >= 6 && $nota <= 6.4 ){
    echo 'recuperação';
} elseif ($nota >= 6.5 && $nota <= 9.4){
 echo 'Aprovado';
}else{
   echo 'Aprovado com Bolsa';
}

$hora = 8;
$horastrabalhadas = 265;

$salarioBruto = $hora * $horastrabalhadas;


// Cálculo do IR

if ($salarioBruto <= 900) {
   $ir = 0; // Isento
} elseif ($salarioBruto <= 1500) {
   $ir = $salarioBruto * 0.05; // 5%
} elseif ($salarioBruto <= 2500) {
   $ir = $salarioBruto * 0.10; // 10%
}

$salarioliquido = $salarioBruto - $ir;




echo "ir: " . number_format($salarioliquido, 2) . "<br>"; 




