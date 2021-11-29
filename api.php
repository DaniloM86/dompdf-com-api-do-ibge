<?php
class Relatorio{
    private $urlPR;
    private $urlSC;
    private $urlRS;

    public function __construct()
    {
        $this->urlPR ='https://servicodados.ibge.gov.br/api/v1/localidades/estados/PR/municipios';
        $this->urlSC ='https://servicodados.ibge.gov.br/api/v1/localidades/estados/SC/municipios';
        $this->urlRS ='https://servicodados.ibge.gov.br/api/v1/localidades/estados/RS/municipios';
    }
     public function ufRS()
    {
        $resultado = json_decode(file_get_contents($this->urlRS));
        // print_r($resultado);
        echo "<h2>Estado do rio grande do sul</h2>";
        foreach($resultado as $cidades){
            echo '<ul>';
            echo '<li>Cidades:'.$cidades->nome.'</li><br>';
            echo '</ul>';
            echo '<hr>';
        }
    }    
    public function ufPR()
    {
        $resultado = json_decode(file_get_contents($this->urlPR));
        // print_r($resultado);
        echo "<h2>Estado do parana</h2>";
        foreach($resultado as $cidades){
            echo '<ul>';
            echo '<li>Cidades:'.$cidades->nome.'</li><br>';
            echo '</ul>';
            echo '<hr>';
    }
}
    public function ufSC()
    {
        $resultado = json_decode(file_get_contents($this->urlSC));
        // print_r($resultado);
        echo "<h2>Estado de santa catarina</h2>";
        foreach($resultado as $cidades){
            echo '<ul>';
            echo '<li>Cidades:'.$cidades->nome.'</li><br>';
            echo '</ul>';
            echo '<hr>';
        }
    }
}
