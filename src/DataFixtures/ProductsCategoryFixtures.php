<?php

namespace App\DataFixtures;

use App\Entity\ProductsCategory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ProductsCategoryFixtures extends Fixture
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {

        $categoryFirst = (new ProductsCategory())
            ->setLabel('First Product Category')
            ->setSlug('my-first-product-category');

        $manager->persist($categoryFirst);

        $categorySecond = (new ProductsCategory())
            ->setLabel('Second Product Category')
            ->setSlug('my-second-product-category');

        $manager->persist($categorySecond);

        $categoryThird = (new ProductsCategory())
            ->setLabel('Third Product Category')
            ->setSlug('my-third-product-category');

        $manager->persist($categoryThird);

        $manager->flush();
    }
}
