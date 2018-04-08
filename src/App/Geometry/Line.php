<?php

namespace App\Geometry;

use App\Geometry\Point;
use App\Geometry\ShapeInterface;

class Line
{
    /**
     * @var Point
     */
    private $p1;

    /**
     * @var Point
     */
    private $p2;

    /**
     * @var string
     */
    private $name;
    
        public function __construct(Point $p1, Point $p2, string $name)
        {
            $this->p1 = $p1;
            $this->p2 = $p2;
            $this->name = $name;
        }
  
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function getArea(): float
    {
        return 0;
    }

    /**
     * @return float
     */
    public function getPerimeter(): float
    {
        return $this->p1->distance($this->p2);
    }
}
