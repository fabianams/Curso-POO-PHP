<!-- Classe caneta para treino de alguns conceitos de classes-->

<?php

class Caneta{

protected $modelo;
protected $cor;
protected $ponta;
protected $carga;
protected $tampa;

public function Caneta()
{
 $this->modelo = "standard";
 $this->cor = "preta";
 $this->ponta = 0.7;
 $this->carga = 100;
 $this->tampa = 1;
}

//--Pega atributo ------------------------------------------
public function getModelo (){
    return $this->modelo;
}

public function getCor (){
    return $this->cor;
}

public function getPonta (){
    return $this->ponta;
}

public function getCarga (){
    return $this->carga;
}

public function getTampa(){
    return $this->tampa;
}
//------------------------------------------------------------


//--Muda de atributo -----------------------------------------
public function setModelo ($modelo){
    $this->modelo = $modelo;
}

public function setCor ($cor){
    $this->cor = $cor;
}

public function setPonta ($ponta){
    $this->ponta = $ponta;
}

public function setCarga ($carga){
    $this->carga = $carga;
}

public function setTampa($coloca){
    $this->tampa = $coloca;
}

public function setCaneta($modelo, $cor, $ponta, $carga, $tampa){
    $this->modelo = $modelo;
    $this->cor = $cor;
    $this->ponta = $ponta;
    $this->carga = $carga;
    $this->tampa = $tampa;
}
//------------------------------------------------------------

public function rabiscar (){
    
    if ($this->carga == null){
        echo "<p> ERRO: Caneta com carga desconhecida. </p>";
        return;
    }

    if ($this->tampa == 1) {
        echo "<p> ERRO: Não é possível rabiscar com a caneta tampada. </p>";
        return;
    }
    echo "<p> Estou rabiscando </p>";

    $this->carga--;
}
 
}

?>