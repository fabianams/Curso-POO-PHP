<!--Interface Controle-->

<?php
interface Controle{
    public  function ligarDesligar();
    public  function abrirMenu();
    public  function fecharMenu();
    public  function maisVolume();   
    public  function menosVolume();
    public  function mudo();
    public  function playPause();
}