<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ProductRepository;
use App\Entity\Product;
use Symfony\Component\HttpFoundation\JsonResponse;

class CartController extends AbstractController
{
    
    public function index(SessionInterface $session): Response
    {

        $cart = $session->get('panier', []);
        $productRepository = $this->getDoctrine()->getRepository(Product::class);

        $products = [];
        $totalPrice = 0;
        foreach($cart as $id => $quantity)
        {
            $product = $productRepository->find($id);
            array_push($products,$product);
            

            $totalPrice += $product->getPrice();
        }
        return $this->render('cart/index.html.twig', [
            'controller_name' => 'CartController',
            'products' => $products,
            'total_price' => $totalPrice
        ]);
    }

    public function add($id,ProductRepository $productRepository, SessionInterface $session,Request $request)
    {
        $cart = $session->get('panier', []);
        $productRepository = $this->getDoctrine()->getRepository(Product::class);
        
        if(isset($request->request))
        {
            if ($product = $productRepository->find($id) == null)
            {
                return new JsonResponse(array(
                    'status' => '404',
                    'message' => 'NOK'),
                404);
            }else{  
                $cart[$id] = 1; 
                $session->set('panier', $cart);
                return new JsonResponse(array(
                    'status' => '200',
                    'message' => 'OK'),
                200);
            }
            
        }
    
        return new JsonResponse(array(
            'status' => '404',
            'message' => 'Error'),
        404);
    }

    public function delete($id,SessionInterface $session){
        $cart = $session->get('panier', []);
        unset($cart[$id]);
        $session->set('panier', $cart);

        $this->addFlash('success','Article supprimé');
        return $this->redirectToRoute('cart.index');
    }
}
