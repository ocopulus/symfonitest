<?php

namespace App\util;

//use Doctrine\ORM\EntityManagerInterface;
//use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManager;

class Test
{
	/*private $em;

	function __construct(EntityManagerInterface $em)
	{
		$this->em = $em;
	}*/
	/*private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }*/

    protected $em;
    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

	public function getAlgo(){
		//$manager = $em->getDoctrine()->getManager();
	}

}