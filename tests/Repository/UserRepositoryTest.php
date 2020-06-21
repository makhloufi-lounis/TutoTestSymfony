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

namespace App\Tests\Repository;

use App\DataFixtures\UserFixtures;
use App\Repository\UserRepository;
use Liip\TestFixturesBundle\Test\FixturesTrait;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UserRepositoryTest extends KernelTestCase
{

    use FixturesTrait;

    public function testCount()
    {
        self::bootKernel();
        $this->loadFixtureFiles([
            __DIR__ .'/UserRepositoryTestFixtures.yml'
        ]);
        $users = self::$container->get(UserRepository::class)->count([]);
        $this->assertEquals(10, $users);
    }
}
