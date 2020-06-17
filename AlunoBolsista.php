<?php
class AlunoBolsista extends Aluno
{

   
public function AlunoBolsista($matricula, $nome, $idade, $sexo)
 {
     $this->matricula = $matricula;
     $this->nome = $nome;
     $this->idade = $idade;
     $this->sexo = $sexo;
     $this->status = "indefinido";
    
        
    $this->mensalidades = array("jan"=>1,"fev"=>1,"mar"=>1,"abr"=>1,"mai"=>1,"jun"=>1,"jul"=>1,"ago"=>1,"set"=>1,"out"=>1,"nov"=>1,"dez"=>1);
}

public function pagarMensalidade($mes){

    echo "<p>ERROR: Aluno Bolsista. Pagamento não efetuado.</p>";
    print_r($this->mensalidades);
}



}
