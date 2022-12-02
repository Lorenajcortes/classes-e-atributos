<?php

class escola {

public $aluno = "estudante";
public $salas="25";
public $diretora = "responssavel";
public $cordenador = "Miguel";
public $diretoria = "sintia ";


public function aula()

{
echo"aluno:{$this -> salas} <br>";
echo"diretora :{$this -> diretora} <br>";


}

public function supervisores()

{

echo"turma:{$this -> cordenador} <br>";
echo"diretora :{$this -> diretora} <br>";


}
public function diretoria()

{

echo"turma:{$this -> cordenador} <br>";
echo"diretora :{$this -> diretora} <br>";


}



}

$escola = new escola ();
$escola -> diretoria();
$escola -> salas ();
$escola -> supervisores ();

