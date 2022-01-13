<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CommandRepository;
use App\Entity\Command;


class CommandController extends AbstractController
{

    public function show($id, CommandRepository $commandRepository ): Response
    {

        $commandRepository = $this->getDoctrine()->getRepository(Command::class);
        $command = $commandRepository->find($id);
        $totalPrice = 0;
        foreach ($command->getProducts() as $key => $product) {
            $totalPrice += $product->getPrice();
        }

        return $this->render('command/show.html.twig', [
            'controller_name' => 'CommandController',
            'command'=> $command, 
            'total_price'=>$totalPrice
        ]);
    }

    /**
     * @Route("/command", name="command")
     */
    public function index(CommandRepository $commandRepository ): Response
    {

        $commandRepository = $this->getDoctrine()->getRepository(Command::class);
        $commands = $commandRepository->findAll();        

        return $this->render('command/index.html.twig', [
            'controller_name' => 'CommandController',
            'commands'=> $commands
        ]);
    }

   
}
