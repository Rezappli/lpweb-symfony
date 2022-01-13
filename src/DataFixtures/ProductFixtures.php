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
                    ->setImg("https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.holoride.com%2Fnewsroom%2Fholoride-releases-cryptocurrency&psig=AOvVaw1hSrWG1csxsDV7HxK1eXMm&ust=1642168282270000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCMj3jtzvrvUCFQAAAAAdAAAAABAD");
            $manager->persist($product);
        }
    
    
        $manager->flush();
    }
}
