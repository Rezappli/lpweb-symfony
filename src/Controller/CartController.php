<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ProductRepository;
use App\Entity\Product;
use App\Entity\Command;
use App\Form\CommandType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\Persistence\ManagerRegistry;

class CartController extends AbstractController
{
    
    public function index(SessionInterface $session,Request $request,ManagerRegistry $doctrine): Response
    {

        $cart = $session->get('panier', []);
        $productRepository = $this->getDoctrine()->getRepository(Product::class);
        $products = [];
        $totalPrice = 0;

        $entityManager = $doctrine->getManager();
        $command = new Command();
        $commandForm = $this->createForm(CommandType::class, $command);
        $commandForm->handleRequest($request);

        foreach($cart as $id => $quantity)
        {
            $product = $productRepository->find($id);
            array_push($products,[
                'id'=>$product->getId(),
                'name'=> $product->getName(),
                'img'=> $product->getImg(),
                'price'=> $product->getPrice(),
                'qte'=> $quantity
            ]);
            
            
            $totalPrice += $product->getPrice() * $quantity;
        }

        if ($commandForm->isSubmitted())
        {
            foreach($cart as $id => $quantity)
            {
            $product = $productRepository->find($id);
            
            $command->addProduct($product);
            }
            $command->setCreatedAt(new \DateTime);

            $entityManager->persist($command);
            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();
            $this->addFlash('success','Commande effectuée');

        }

        return $this->render('cart/index.html.twig', [
            'controller_name' => 'CartController',
            'products' => $products,
            'total_price' => $totalPrice,
            'commandForm' => $commandForm->createView() 
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
                if(!isset($cart[$id])){
                    $cart[$id] = 1;
                }else{
                    $cart[$id] ++;
                }
                 
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
