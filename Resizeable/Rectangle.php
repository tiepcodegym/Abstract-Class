<?php

class Rectangle extends Shape implements Resizeable {
    public int $width;
    public int $height;

    public function __construct(string $name,
                                int $width,
                                int $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): float|int
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter(): float|int
    {
        return ($this->height + $this->width) * 2;
    }
    public function resize($num)
    {
        $this->width=round($this->width*$num/100);
        $this->height=round($this->height*$num/100);
    }
}