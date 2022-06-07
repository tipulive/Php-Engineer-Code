<?php
/*
 * The Shape Class
 */

namespace FlickerLeap;

use FlickerLeap\Shape;

/**
 *
 */
class Diamond extends Shape
{
    /**
     *
     * @param int $length
     */
    public function __construct($length = 6) {
        $this->name = 'Diamond';
       
        $this->sideLength = $length;
        $this->pixel = "*";
        $this->LongestSide=2; //here longest Side will be twice,but you can change to any number
    }

    /**
     *
     */
    public function displayName()
    {
        echo $this->name;

    }

    /**
     * Draws the Diamond.
     */
    public function draw() 
    {
        // upside pyramid
        for ($i = 0; $i < $this->sideLength; $i++)
        {
            // printing spaces
            for ($j =$this->sideLength;$j>$i; $j--) {
                echo $this->padding(2);
            }
             // printing star
            for ($k = 0; $k < $i * 2 - 1; $k++) {
                if ($k === 0 || $k === 2 * $i - 2) {
                    echo $this->pixel . $this->padding(2);
                }
                else {
                    echo $this->padding(2);
                }
            }
             $this->newLine();
        }
        // downside pyramid
    for ($i = 1; $i <= $this->sideLength - 1; $i++) {
        // printing spaces
        for ($j = 0; $j < $i; $j++) {
            echo $this->padding(2);
        }
        // printing star
        for ($k = ($this->sideLength - $i) * 2 - 1; $k >= 1; $k--) {
            if ($k === 1 || $k === ($this->sideLength - $i) * 2 - 1) {
                echo $this->pixel . $this->padding(2);
            }
            else {
                echo $this->padding(2);
            }
        }
        $this->newLine();
    }
    }
}
