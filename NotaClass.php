<?php
 
include './SomClass.php';
/*
 * 
 * 
 * 
 */

namespace Musica;

/**
 * Classe de Notas Músicais
 *
 * @author faustobenini
 */
class Nota {
    
    //Atributos
    private $NotaMusica;


    //métodos
    public function __construct($nota) {
        $NotaMusica = $nota;
    }
    
    public function getNota($nota) {
        return $this->getNota($nota);  
        
        return $this->Som[$nota];
    }
    
}
