<!-- Classe conta bancária para treino de alguns conceitos de classes-->

<?php

class ContaBancaria 
{

    private $nomeDono;
    private $numero;
    private $tipo;//só pode ser cp ou cc
    private $saldo;
    private $status;//0 pra fechada e 1 pra aberta

    public function ContaBancaria(){
        $this->saldo = 0;
        $this->status = 0;
    }

    //*****************************************************************************
    public function getNomeDono()
    {
        return $this->nomeDono;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function getStatus()
    {
        return $this->status;
    }

    //************************************************************************

    public function setNomeDono($nomeDono)
    {
        $this->nomeDono = $nomeDono;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;

    }

    public function setTipo($tipo)
    {
        $tipo = strtolower($tipo);
        if (($tipo != "cc") && ($tipo != "cp")){
            echo "ERRO: Valor inválido de tipo de conta.<br/><br/>";
            return;
        }

        $this->tipo = $tipo;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    //*******************************************************************

    public function abrirConta($nomeDono, $numero, $tipo, $saldo)
    {
        $tipo = strtolower($tipo);
        if (($tipo != "cc") && ($tipo != "cp")){
            echo "ERRO na criação da conta: Valor inválido de tipo de conta.<br/><br/>";
            return null;
        }

        $this->setNomeDono($nomeDono);
        $this->setNumero($numero);
        $this->setTipo($tipo);
        
        if ($tipo == "cc"){ $this->setSaldo($saldo+50);}
        elseif ($tipo == "cp"){ $this->setSaldo($saldo+150);}

        $this->setStatus(1);
        echo "Conta $numero - de $nomeDono - aberta com SUCESSO.<br/><br/>";
    }
    
    public function encerrarConta()
    {
        if( $this->getSaldo() > 0){
            echo "ERRO no encerramento da conta: Saldo positivo. <br/><br/>";
            return;
        }
        else if ($this->getSaldo() < 0){
            echo "ERRO no encerramento da conta: Saldo negativo.<br/><br/>";
            return;
        }

        $this->setStatus(0);
        printf ("Conta - número %d de %s- encerrada com SUCESSO.<br/><br/>", $this->getNumero(), $this->getNomeDono());
    }
    
    public function sacar($valor){
        if ($this->getStatus() == 0){
            echo "ERRO no saque : Conta encerrada.<br/><br/>";
            return;
        }

        if ($this->getSaldo() < $valor){
            echo "ERRO no saque : Saldo insuficiente.<br/><br/>";
            return;
        }

        $this->setSaldo($this->getSaldo() - $valor);
        printf ("Saque de R$%.2f da conta número %d de %s efetuado com SUCESSO.<br/><br/>", $valor, $this->getNumero(), $this->getNomeDono());
        
    }

    public function depositar($valor){
        if ($this->getStatus() == 0){
            echo "ERRO no depósito : Conta encerrada.<br/><br/>";
            return;
        }
        $this->setSaldo($this->getSaldo() + $valor);
        printf ("Depósito de R$%.2f na conta número %d de %s efetuado com SUCESSO.<br/><br/>", $valor, $this->getNumero(), $this->getNomeDono());
    }

    public function pagarMensal(){
        if ($this->getStatus() == 0){
            echo "ERRO : Conta encerrada.<br/><br/>";
            return;
        }

        if ($this->getTipo() == "cc")
        {
             $this->sacar(12);
        }
        elseif ($this->getTipo() == "cp")
        { 
            $this->sacar(20);
        }

    }
}

?>