<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefautController
 * @package App\Controller
 * @Route("/")
 */
class AnnouncementController extends AbstractController
{

    /**
     * @Route("/",name="default_index")
     */
    public function index() {
        return new JsonResponse([
            'action'=>'index',
            'time'=>time()
        ]);
    }

}
