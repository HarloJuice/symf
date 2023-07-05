<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Test2Controller extends AbstractController
{
    //#[Route('/test2', name: 'app_test2')]
    #[Route('/', name: 'homepage')]
    public function index(Request $request): Response
    {
        $greet = '';
            if ($name = $request->query->get('hello')) {
                $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
            }
        return new Response(<<<EOF
            <html>
                <body>
                $greet
                    <img src="/images/image001.gif" />
                </body>
            </html>
            EOF
        );
     }
 }

