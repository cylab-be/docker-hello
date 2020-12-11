<?php

namespace cylab\hello;

class VisitorsCounterTest extends \PHPUnit\Framework\TestCase
{
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testTotal()
    {
        VisitorsCounter::reset();
        
        VisitorsCounter::inc();
        VisitorsCounter::inc();
        VisitorsCounter::inc();

        $this->assertEquals(3, VisitorsCounter::total());
    }
}
