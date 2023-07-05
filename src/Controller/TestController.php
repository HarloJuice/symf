<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
class TestController{
    public function test():Response
    {
        $text = "Hello Arif";
        return new Response(
            '<html><body>'.$text.'<body/></html>'
        );
    }
}
?>