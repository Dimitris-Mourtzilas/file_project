<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('userLogin.html.twig');
    }


    #[Route('/password-lost',name:'password_lost')]
    public function setNewPassword():Response{
        return $this->render('passwordLostPage.html.twig');
    }


}
