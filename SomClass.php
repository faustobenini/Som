<?php

/*
 * 
 * 
 * 
 */

namespace Musica;

/**
 * Description of Som
 *
 * @author fausto benini
 */
class Som {
        
    // declaração de atributos 
    private $Som = array(1=> "dó", 2 => "dó#", 3=> "ré", 4 => "ré#", 5=> "mi",6 => "fá", 7=> "fá#", 8 => "sol", 9=> "sol#", 10 => "lá", 11=> "lá#", 12 => "si");   
    
    // métodos 
    public function getSom($nota) {
        return $this->Som[$nota];
    }
}
