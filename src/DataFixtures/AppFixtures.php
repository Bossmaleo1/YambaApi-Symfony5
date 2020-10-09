<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder) {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $this->loadUsers($manager);
        $manager->flush();
    }

    public function loadUsers(ObjectManager $manager) {
        $user = new User();
        $user->setFirstname("Sidney");
        $user->setLastname("MALEO");
        $user->setBirthday(new \DateTime('1993-10-13 12:00:00'));
        $user->setSex('M');
        $user->setEmail("sidneymaleoregis@gmail.com");
        $user->setLang("fr");
        $user->setState("1");
        //$user->setCountry("Congo");
        //$user->setTown("Brazzaville");
        $user->setOnline("1");
        $user->setActive("1");
        $user->setActivationCode("1234");
        $user->setKeyPush("EDF7845445GT454dfgh1455hj4yuu4");
        $user->setTokenUser("4558rtttrtrtr");
        $user->setPhoto("maleo.png");
        $user->setPassword($this->passwordEncoder->encodePassword($user,'Filstel1993'));
        //$user->setPassword("Filstel1993");

        $manager->persist($user);
        $manager->flush();

    }
}
