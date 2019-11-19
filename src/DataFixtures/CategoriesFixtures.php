<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

class CategoriesFixtures extends Fixture
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {

        $categoryFirst = (new Categories())
            ->setNom('First Category')
            ->setSlug('my-first-category');

        $manager->persist($categoryFirst);

        $categorySecond = (new Categories())
            ->setNom('Second Category')
            ->setSlug('my-second-category');

        $manager->persist($categorySecond);

        $categoryThird = (new Categories())
            ->setNom('Third Category')
            ->setSlug('my-third-category');

        $manager->persist($categoryThird);

        $manager->flush();
    }
}
