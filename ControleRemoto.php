<!--Classe do controle remoto que implementa a interface controle -->
<?php
require "Controle.php";
class ControleRemoto implements Controle
{

    private $ligado;//0 desligado e 1 ligado
    private $volume;
    private $mudo;// 1 quando estiver no mudo
    private $play;//1 quando estiver em play

    function ControleRemoto(){
        $this->ligado=0;
        $this->volume=50;
        $this->mudo=0;
        $this->play=0;
    }

    public function getLigado(){
        return $this->ligado;
    }

    public function getVolume(){
        return $this->volume;
    }

    public function getMudo(){
        return $this->mudo;
    }

    public function getPlay(){
        return $this->play;
    }


    public function setLigado($ligado){
        $this->ligado = $ligado;
    }

    public function setVolume($volume){
        $this->volume = $volume;
    }

    public function setMudo($mudo){
        $this->mudo = $mudo;
    }

    public function setPlay($play){
        $this->play = $play;
    }

    public function ligarDesligar(){
        if ($this->getLigado()==1)
        {
            $this->setLigado(0);
        }elseif ($this->getLigado()==0){
            $this->setLigado(1);
        }

    }
    public function abrirMenu(){
        if ($this->getLigado()==1)
        {
            echo "</br>Aparelho ". ($this->getPlay()?"em Play": "em Pause");
            echo "</br>Mudo: ". ($this->getMudo()?"Habilitado": "Desabilitado");
            echo "</br>Volume: ". $this->getVolume();
            echo "</br>";
            for ($i=0; $i< $this->getVolume(); $i+=10) 
            {
                echo "|";
            }

        }
    }

    public function fecharMenu()
    {
            echo "</br>Menu fechado</br>";
    }

    public function maisVolume()
    {
        if ($this->getLigado()==1)
        {
            $this->setVolume($this->getVolume()+5);
        }
    }

    public function menosVolume()
    {
        if ($this->getLigado()==1)
        {
            $this->setVolume($this->getVolume()-5);
        }

    }

    public function mudo(){
        if ($this->getLigado()==1)
        {
            if ($this->getMudo()==1)
            {
                $this->setMudo(0);
            }elseif ($this->getMudo()==0){
                $this->setMudo(1);
            }
        }
    }

    public function playPause()
    {
        if ($this->getLigado()==1)
        {
            if ($this->getPlay()==1)
            {
                $this->setPlay(0);
            }elseif ($this->getPlay()==0){
                $this->setPlay(1);
            }
        }
    }
}

