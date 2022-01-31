<?php

namespace App\DataFixtures;

use Faker;
use Faker\Factory;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 1; $i <= 10; $i++)
        {
            $product = new Product();
        
            $sentence = $faker->sentence(4);
            $title = substr($sentence, 0, strlen($sentence) - 1);
            $product->setName($title)
                    ->setDescription($faker->text(200))
                    ->setPrice($faker->randomNumber(2))
                    ->setCreatedAt($faker->dateTimeThisYear())
                    ->setImg("https://img2.storyblok.com/1420x0/smart/f/113424/1867x1200/5adec380a5/news-holoride-cryptocurrency.jpg");
            $manager->persist($product);
        }
    
    
        $manager->flush();
    }
}
