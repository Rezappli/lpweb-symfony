<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;
use App\Entity\Product;



class ProductController extends AbstractController
{
    /**
     * @Route("/product", name="product")
     */
    public function index(ProductRepository $productRepository): Response
    {
        $productRepository = $this->getDoctrine()->getRepository(Product::class);
        $products = $productRepository->findAll();

        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
            'products' => $products,

        ]);
    }

    public function show(ProductRepository $productRepository, int $id): Response
    {        
        $productRepository = $this->getDoctrine()->getRepository(Product::class);
        $product = $productRepository->find($id);

        if (!$product)
        {   
            throw $this->createNotFoundException('The product does not exist');
        }else{
            return $this->render('product/show.html.twig', [
                'controller_name' => 'ProductController',
                 'product' => $product,
            ]);
        }
       
    }
}
