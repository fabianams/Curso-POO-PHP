<?php
require_once "Lutador.php";

class Luta
{
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

    public function Luta(){
        $this->desafiado = null;
        $this->desafiante = null;
        $this->aprovada = 0;
    }

    public function getDesafiado(){
        return $this->desafiado;
    }

    public function getDesafiante(){
        return $this->desafiante;
    }

    public function getRounds(){
        return $this->rounds;
    }

    public function getAprovada(){
        return $this->aprovada;
    }

    public function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }

    public function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }

    public function setRounds($rounds){
        $this->rounds = $rounds;
    }

    public function setAprovada($aprovada){
        $this->aprovada = $aprovada;
    }

    public function marcarLuta($desafiante, $desafiado){
        if (($desafiante != $desafiado) && ($desafiante->getCategoria() ==$desafiado->getCategoria()))
        {
            $this->setAprovada(1);
            $this->setDesafiante($desafiante);
            $this->setDesafiado($desafiado);
        }
        else {
            $this->setAprovada(0);
            $this->setDesafiante(null);
            $this->setDesafiado(null);
        }
    }

    public function lutar(){

        if ($this->getAprovada()==1){
            $this->desafiante->apresentar();
            $this->desafiado->apresentar();

            $resultado = rand(0,2);
            switch ($resultado) {
                case '0'://empate
                    echo "<p> Luta empatada! </p>";
                    $this->desafiante->empatarLuta();
                    $this->desafiado->empatarLuta();
                    break;
                case '1'://desafiante vence
                    echo "<p> Desafiante vence! </p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
                case '2'://desafiado vence
                    echo "<p> Desafiado vence! </p>";
                    $this->desafiante->perderLuta();
                    $this->desafiado->ganharLuta();                    
                    break;
            }

        }else {
            echo "<p> Luta não marcada e/ou aprovada </p>";
        }

    }

    
}




