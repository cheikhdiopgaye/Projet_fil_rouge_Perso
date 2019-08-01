<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class Userfixture extends Fixture
{
    private $encoder;

public function __construct(UserPasswordEncoderInterface $encoder)
{
    $this->encoder = $encoder;
}

// ...
public function load(ObjectManager $manager)
{
    $user = new User();
    $user->setUsername('cheikh');

    $password = $this->encoder->encodePassword($user, '1991');
    $user->setPassword($password);
    $user->setRoles(['ROLE_SUPER_ADMIN']);
    $manager->persist($user);
    $manager->flush();
}   
}