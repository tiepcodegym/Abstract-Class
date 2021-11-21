<?php

class Square extends Rectangle implements Colorable
{
    public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
    }
    public function resize($num)
    {
        $this->width=round($this->width*$num/100);
        $this->height=round($this->height*$num/100);
    }
    public function howToColor()
    {
        return 'Color all four sides..';
    }

}