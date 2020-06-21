<?php
/**
 * TutoTestSymfony
 *
 * @version   1.0
 * @author    Lounis Makhloufi <makhloufi.lounis@gmail.com>
 * @see       https://github.com/makhloufi-lounis/TutoTestSymfony for the canonical source repository
 * @copyright Copyright (c) 2020.
 */

declare(strict_types=1);

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    public function testTestAreWorking()
    {
        $this->assertEquals(2, 1+1);
    }
}
