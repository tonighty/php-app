<?php

namespace AppTest\Geometry;

use App\Geometry\Rectangle;
use App\Geometry\Point;
use PHPUnit\Framework\TestCase;

class RectangleTest extends TestCase
{
    public function testGetArea()
    {
        $p1 = new Point(2, 2);
        $p2 = new Point(0, 0);
        $line = new Line($p1, $p2, "lol");
        $this->assertEquals(4, $line->getArea());
    }

    public function testGetName()
    {
        $p1 = new Point(2, 2);
        $p2 = new Point(0, 0);
        $line = new Line($p1, $p2, "I am line :(");
        $this->assertEquals("I am line :(", $line->getName());
    }

    public function testGetPerimeter()
    {
        $p1 = new Point(2, 2);
        $p2 = new Point(0, 0);
        $line = new Line($p1, $p2, "I am line :(");
        $this->assertEquals(8, $line->getPerimeter());
    }
}
