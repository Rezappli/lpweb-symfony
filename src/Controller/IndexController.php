<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;
use App\Entity\Product;
use Symfony\Component\Validator\Constraints\DateTime;

class IndexController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index(ProductRepository $productRepository): Response
    {
        $productRepository = $this->getDoctrine()->getRepository(Product::class);

        $lessExpensiveProducts = $productRepository->findAll();
        $recentProducts = $productRepository->findAll();
       
        
        usort($lessExpensiveProducts, function($a, $b)
        {
            if ($a->getPrice() == $b->getPrice()) {
                return 0;
            }

            return $a->getPrice() < $b->getPrice() ? -1 : 1;
        });
        
        usort($recentProducts, function($a, $b)
        {
            $ad = new DateTime($a->getCreatedAt());
            $bd = new DateTime($b->getCreatedAt());

            if ($ad == $bd) {
                return 0;
            }

            return $ad > $bd ? -1 : 1;
        });
        
        $lessExpensiveProducts = array_slice($lessExpensiveProducts, 0, 5);
        $recentProducts = array_slice($recentProducts, 0, 5);

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'lessExpensiveProducts' => $lessExpensiveProducts,
            'recentProducts' => $recentProducts,

        ]);
    }


}
