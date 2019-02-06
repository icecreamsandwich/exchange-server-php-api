<?php

namespace garethp\ews\Test\Utilities;

use garethp\ews\API\Type\Mailbox;
use garethp\ews\Test\BaseTestCase;
use function garethp\ews\Utilities\ensureIsMailbox;

class EnsureIsMailboxTest extends BaseTestCase
{
    public function testEnsureIsMailbox()
    {
        $mailbox = new Mailbox();
        $mailbox->setEmailAddress('test@test.com');

        self::assertEquals($mailbox, ensureIsMailbox('test@test.com'));
    }
}
