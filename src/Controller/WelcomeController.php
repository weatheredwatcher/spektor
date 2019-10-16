<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class WelcomeController
{

  /**
   * @Route("/")
   */
  public function index()
  {

    return new Response( '<h1> Hello World </h1>');
  }
}
