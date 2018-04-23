<?php

namespace MyFirstPHPCalculator;

/**
 * This class is for my first calculator
 *
 * @author Cesar Adrian Mahecha Marin <camahecha96@misena.edu.co>
 * @package MyFirstPHPCalculator
 */
class MyFirstClass
{
    /**
     * This is the first calculator variable.
     * 
     * @var float
     */
    private $variable1;
    /**
     * tThis is the second claculator variable.
     * 
     * @var float 
     */
    private $variable2;
    
    /**
     * Return the variable  1 
     *
     * @return float
     */
    
    public function getvaraible1(): float
    {
        return $this->variable1;
    }
    
    /**
     * Return the variable 2
     * 
     * @return float
     */

    public function getvariable2(): float
     {
        return $this->variable2;
    }
    
    /**
     * set the variable 1
     * 
     * @param float $variable1
     */

    public function setvariable1(float $variable1) 
    {
        $this->variable1 = $variable1;
    }
    
    /**
     * set the variable 2
     * 
     * @param float $variable2
     */

    public function setvariable2(float $variable2)
    {
        $this->variable2 = $variable2;
    }
    
    /**
     ************************************************************
     */
   
    public function sum(): float
    {
        return $this->variable1 + $this->variable2;
    }
    
    public function rest(): float
    {
        return $this->variable1 - $this->variable2; 
    }
    public function mult():float 
    {
        return $this->variable1 * $this->variable2; 
    }
    public function div(): float
    {
        if ($this->variable2 != 0) {
            return $this->variable1 / $this->variable2;
        } else {
            throw new \Exception('The division by zero does not exist.', 501);
        }
    }
    public function divm(): float
     {
     return $this->variable1 % $this->variable2;
     }
    public function log(): float
    {
        return log ($this->variable1,$this->variable2);
    }
    public function squared(): float
    {
        return $this->variable1 * $this->variable1;
    }
    public function pow(): float
    {
         return pow($this->variable1, $this->variable2);
       
    }
    public function sqrt(): float
    {
        return sqrt($this->variable1);
    }
    public function root(): float
    {
        return pow($this->variable1, (1/$this->variable2));
    }
}

