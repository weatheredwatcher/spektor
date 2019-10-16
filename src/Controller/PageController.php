<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
class PageController
{
  /**
   * @Route("/page/")
   */
  public function index()
  {

    return New Response("<h1>Pages</h1>");

  }


  protected function renderFile($file)
  {
     $file = YamlFrontMatter::parse(file_get_contents($file));
     return $file;
  }

}


