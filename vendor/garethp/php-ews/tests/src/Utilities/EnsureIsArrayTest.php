<?php

namespace garethp\ews\Test\Utilities;

use garethp\ews\Test\BaseTestCase;

class EnsureIsArrayTest extends BaseTestCase
{
    public function testEnsureIsArray()
    {
        $this->assertSame([1], \garethp\ews\Utilities\ensureIsArray(1));
        $this->assertSame([1], \garethp\ews\Utilities\ensureIsArray([1]));
        $this->assertSame(['testString'], \garethp\ews\Utilities\ensureIsArray('testString'));

        $this->assertSame(['assoc' => 'array'], \garethp\ews\Utilities\ensureIsArray(['assoc' => 'array']));
        $this->assertSame([['assoc' => 'array']], \garethp\ews\Utilities\ensureIsArray(['assoc' => 'array'], true));
    }
}
