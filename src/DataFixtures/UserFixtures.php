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


namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i =0; $i < 10; $i++) {
            $user = new User();
            $user->setEmail("user$i@domain.fr")
                ->setPassword("0000");
            $manager->persist($user);
        }
        $manager->flush();
    }
}
