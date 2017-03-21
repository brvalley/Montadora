<?php

namespace Ford\DesignPattern;

use Ford\Motor\Motor10;
use Ford\Carro;
use Ford\Motor\Motor20;

/**
 * Description of Factory
 *
 * @author aluno
 */
class Factory 
{
    /**
     * FabricaKa
     * @param type $cor
     * @return Carro
     */
    
    public static function MontarKa($cor)
    {
        $motor = new Motor10();
        $carro = new Carro($motor, $cor);
        
        return $carro;
    }
    
    /**
     * FabricaFiesta
     * @return Carro
     */
    
    public static function MontarFiesta($cor)
    {
        $motor = new Motor20();
        $carro = new Sedan($motor, $cor);
        
        return $carro;   
    }
}
