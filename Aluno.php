<?php

require_once "Pessoa.php";

class Aluno extends Pessoa
{
    protected $matricula;
    protected $notas = array();
    protected $status;//indefinido, aprovado, reprovado
    protected $mensalidades = array();


public function Aluno($matricula, $nome, $idade, $sexo)
{
    $this->matricula = $matricula;
    $this->nome = $nome;
    $this->idade = $idade;
    $this->sexo = $sexo;
    $this->status = "indefinido";

    
    $this->mensalidades = array("jan"=>0,"fev"=>0,"mar"=>0,"abr"=>0,"mai"=>0,"jun"=>0,"jul"=>0,"ago"=>0,"set"=>0,"out"=>0,"nov"=>0,"dez"=>0);
}

public function pagarMensalidade($mes){

    if (array_key_exists($mes, $this->mensalidades)){
        $this->mensalidades[$mes] = 1;
    }   else
    {
        echo "<p>ERROR: Mês inválido. Pagamento não efetuado.</p>";
    }
}

public function receberNota($nota){
    $this->notas[] = $nota;
}

public function mediaNotas(){
    
    $soma = array_sum($this->notas);
    $c = count($this->notas);
    return $soma/$c;
}

public function aprovaReprova(){
    if ($this->mediaNotas() >= 7.0){
        $this->setStatus("aprovado");
    }else {
        $this->setStatus("reprovado");
    }
}

public function getMatricula(){
    return $this->matricula;
}

public function getNotas(){
    return $this->notas;
}

public function getStatus(){
    return $this->status;
}

public function getMensalidades(){
    return $this->mensalidades;
}

public function setMatricula($matricula){
    $this->matricula = $matricula;
}

public function setNotas($notas){
     $this->notas = $notas;
}

public function setStatus($status){
    $this->status = $status;
}

public function setMensalidades($notas){
    $this->mensalidades = $mensalidades;
}

}
