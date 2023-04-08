<?php

namespace App\Tests;

use App\Truncater;
use PHPUnit\Framework\TestCase;

class TruncaterTest extends TestCase
{
    public function testTruncate()
    {
        $defaultTruncater = new Truncater();
        $this->assertSame("Жуков Дмитрий Евгеньевич", $defaultTruncater->truncate("Жуков Дмитрий Евгеньевич"));
        $this->assertSame("Жуков Дмит...", $defaultTruncater->truncate("Жуков Дмитрий Евгеньевич", ['length' => 10]));
        $this->assertSame("Жуков Дмитрий ...", $defaultTruncater->truncate("Жуков Дмитрий Евгеньевич", ['length' => -10]));
        $this->assertSame("Жуков Дмит*", $defaultTruncater->truncate("Жуков Дмитрий Евгеньевич", ['length' => 10, 'separator' => '*']));
        $this->assertSame("Жуков Дмитрий Евгеньевич", $defaultTruncater->truncate("Жуков Дмитрий Евгеньевич"));



        $newTruncater1 = new Truncater(['length' => 14]);
        $this->assertSame("Жуков Дмитрий ...", $newTruncater1->truncate("Жуков Дмитрий Евгеньевич"));
        $this->assertSame("Жуков Дмитрий //", $newTruncater1->truncate("Жуков Дмитрий Евгеньевич", ['separator' => '//']));

        $newTruncater2 = new Truncater(['length' => 14, 'separator' => "**"]);
        $this->assertSame("Жуков Дмитрий **", $newTruncater2->truncate("Жуков Дмитрий Евгеньевич"));
    }
}
