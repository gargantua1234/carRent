<?php

namespace MadStoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use MadStoreBundle\Entity\Car;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('MadStoreBundle:Default:index.html.twig');
    }
    
    public function createCarAction($model,$name)
    {
        $car = new Car();
        $car->setName($model);
        $car->setPrice('19.99');
        $car->setDescription($name);

        $em = $this->getDoctrine()->getManager();
        $em->persist($car);
        $em->flush();

        return new Response('Created Car id '.$car->getId());
    }
    
    public function showCarAction()
    {
        $request= $this->getDoctrine()->getManager();
        
        $timeNow = time();
        /* zapytanie zwraca samochody które są dostępne czyli ich returnDate jest mniejsze od obecnej daty timeNow */
        $query = $request->createQuery(
        'SELECT car
        FROM MadStoreBundle:Car car
        WHERE car.returnDate < :returnDate
        ORDER BY car.returnDate ASC'
        )->setParameter('returnDate', $timeNow);

        $cars= $query->getResult();
        
        return $this->render(
                'default/mainPage.html.twig',
                array('cars' => $cars)
            );
    }
    
    public function moreCarInfoAction($id)
    {
        $request = $this->getDoctrine()->getRepository('MadStoreBundle:Car');
        $car = $request->findById($id);
        if (!$car) {
        throw $this->createNotFoundException(
            'No product found for id '.time()
        );
        }
        return $this->render(
                'default/carPage.html.twig',
                array('car' => $car)
        );
    }
}
