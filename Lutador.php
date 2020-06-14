<?php
class Lutador 
{
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function Lutador($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
    {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;    
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getNacionalidade(){
        return $this->nacionalidade;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function getCategoria(){
        return $this->categoria;
    }

    public function getVitorias(){
        return $this->vitorias;
    }

    public function getDerrotas(){
        return $this->derrotas;
    }

    public function getEmpates(){
        return $this->empates;
    }


    public function setNome($nome){
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

    public function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria(){
        if ($this->peso<52.2){
            $categoria = "inválido";
        }elseif ($this->peso<=70.3){
            $categoria="leve";
        }elseif ($this->peso<=83.9){
            $categoria="médio";
        }elseif ($this->peso<=120.2){
            $categoria="pesado";
        }else{
            $categoria="inválido";
        }
        $this->categoria = $categoria;
    }

    public function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates){
        $this->empates = $empates;
    }

    public function apresentar(){
        printf("</br>Categoria %s! </br>Entra na arena o lutador %s do país %s: </br> %d anos; </br> %.2f de altura; </br> %.2f Kg; </br> %d vitorias; </br> %d derrotas e </br> %d empates! </br> </br>", $this->getCategoria(), $this->getNome(), $this->getNacionalidade(), $this->getIdade(), $this->getAltura(), $this->getPeso(), $this->getVitorias(), $this->getDerrotas(), $this->getEmpates());

    }

    //public function status(){

    //}

    public function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
    }
    
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    }

    public function empatarLuta(){
         $this->setEmpates($this->getEmpates()+1);
    }

}
