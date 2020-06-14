<?php
require_once "Pessoa.php";
require_once "Publicacao.php";

class Livro implements Publicacao
{

    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

public function Livro($titulo, $autor, $totPaginas, $leitor){
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->totPaginas = $totPaginas;
    $this->pagAtual = 0;
    $this->aberto = 0;
    $this->leitor=$leitor;
}

public function getTitulo(){
    return $this->titulo;
}
public function getAutor(){
    return $this->autor;
}
public function getTotPaginas(){
    return $this->totPaginas;
}
public function getPagAtual(){
    return $this->pagAtual;
}
public function getAberto(){
    return $this->aberto;
}
public function getLeitor(){
    return $this->leitor;
}
public function setTitulo($titulo){
    $this->titulo = $titulo;
}
public function setAutor($autor){
    $this->autor = $autor;
}
public function setTotPaginas($totPaginas){
    $this->totPaginas = $totPaginas;
}
public function setPagAtual($pagAtual){
    $this->pagAtual = $pagAtual;
    
    if ($this->pagAtual > 0){
        $this->setAberto(1);    
    }
}
public function setAberto($aberto){
    $this->aberto = $aberto;
}
public function setLeitor($leitor){
    $this->leitor = $leitor;
}

public function detalhes(){
    print_r($this);
}

public function abrir(){
    $this->setAberto(1);
}

public function fechar(){
    $this->setAberto(0);
    $this->setPagAtual(0);
}

public function folhear($pagina){
    if ($this->getAberto() == 1){
        if ($pagina > $this->getTotPaginas()){
            echo "<p> Vai pá ondi? rsrsrsr </p>";
        }
        else{
            $this->setPagAtual($pagina);
        }
    }else {
        echo "<p> Livro fechado </p>";
    }
}

public function avancarPag(){
    if ($this->getAberto() == 1){
        if ($this->getPagAtual() == $this->getTotPaginas()){
            echo "<p> Vai pá ondi? rsrsrsr </p>";
        }else{
            $this->setPagAtual($this->getPagAtual()+1);
        }
    }else {
        echo "<p> Livro fechado </p>";
    }

}

public  function voltarPag(){
    if ($this->getAberto() == 1){
        if ($this->getPagAtual() == 0){
            echo "<p> Vai pá ondi? rsrsrsr </p>";
        }else{
            $this->setPagAtual($this->getPagAtual()-1);
        }
    }else{
        echo "<p> Livro fechado </p>";
    }
}

}