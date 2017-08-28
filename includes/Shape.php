<?php
/*
 * The Shape Class
 */

namespace FlickerLeap;

/**
 * @abstract Shape
 */
abstract class Shape
{
    /**
     *
     * @var string $name The name of the shape
     */
    public $name;
    
    /**
     *
     * @var int $sides The number of sides the shape has
     */
    public $sides;
    
    /**
     *
     * @var int $sideLength The length of each side (in pixels)
     */
    public $sideLength;
    
    /**
     *
     * @var string $pixel The character that denotes a pixel
     */
    public $pixel = "*";

    /**
     *
     */
    public function __construct()
    {
    }

    /**
     * Outputs the name of the shape.
     */
    public function displayName()
    {
        $this->newLine();
        echo $this->name;
    }
    
    /**
     * Outputs a newline character
     */
    public function newLine()
    {
        echo "<br />";
    }
    
    /**
     * Outputs padding (space) depnding on the length given
     *
     * @param int $length
     * @return string
     */
    public function padding($length = 1)
    {
        $padding = "";
        
        for ($i = 0; $i < $length; $i++) {
            $padding .= "&nbsp;";
        }
        
        return $padding;
    }
    
    /**
     * @abstract
     * Draws the shape. This function must be overridden in a child class.
     */
    public abstract function draw();
}
