<?php

namespace NS\SearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CommonController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('NSSearchBundle::index.html.twig');
    }
}
