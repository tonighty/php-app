<?php

namespace App\Geometry;

use App\Geometry\Point;
use App\Geometry\ShapeInterface;

class Circle implements ShapeInterface
{
    /**
     * @var Point
     */
    private $p1;

    /**
     * @var float
     */
    private $r;

    /**
     * @var string
     */
    private $name;

    public function __construct(Point $p1, float $r, string $name)
    {
        $this->p1 = $p1;
        $this->r = $r;
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
        return pi() * r * r;
    }

    /**
     * @return float
     */
    public function getPerimeter(): float
    {
        return 2 * pi() * r;
    }
}
