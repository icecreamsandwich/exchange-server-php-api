<?php

namespace garethp\ews\Test\Utilities;

use garethp\ews\Test\BaseTestCase;

class EnsureIsDateTimeTest extends BaseTestCase
{
    public function testEnsureDateTime()
    {
        $this->assertEquals(new \DateTime('2015-01-01'), \garethp\ews\Utilities\ensureIsDateTime('2015-01-01'));
        $this->assertNotSame(new \DateTime('2015-01-01'), \garethp\ews\Utilities\ensureIsDateTime('2015-01-01'));

        $dateTime = new \DateTime('2015-01-01');
        $this->assertSame($dateTime, \garethp\ews\Utilities\ensureIsDateTime($dateTime));
    }
}
