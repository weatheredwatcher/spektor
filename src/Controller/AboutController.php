<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends PageController
{

  /**
   * @Route("/about")
   */

  public function about()
  {
    $about = $this->renderFile('../_pages/about.md');
   return new Response(
     '<h1>'. $about->matter('title') .'</h1>
     <p>' . $about->body() . '</p>'
   );
 }

}

//end of file
