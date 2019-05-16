<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use App\util\Test;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky", name="lucky")
     */
    public function index()
    {
        return $this->render('lucky/index.html.twig', [
            'controller_name' => 'LuckyController',
        ]);
    }

    /**
     * @Route("/lucky2", name="lucky2")
     */
    public function number()
    {
        $number = random_int(0, 100);
        /*$entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery(
            'SELECT p
            FROM App\Entity\Product p
            WHERE p.price > :price
            ORDER BY p.price ASC'
        );*/
        $manager = $this->getDoctrine()->getManager('default');
        $conn = $manager->getConnection();
        $result= $conn->query('select * from product')->fetchAll();
        //$test = new Test();
        $test = $this->get('Test');
        $test->getAlgo();
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'.$result[0]['name']
        );
    }
}
