<?php

declare(strict_types=1);

namespace Announcements\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\JsonResponse;

class AnnouncementsReadHandler implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        
//        echo "<pre style='background-color:#2992e6';>";
//        echo __FILE__." Line: ".__LINE__;
//        echo "<hr>";
//        var_dump($_REQUEST);
//        echo "</pre>";
//        exit;
        
        // Create and return a response
        $result['_embedded'] = [1 => 'test', 2 => 'test2'];

        return new JsonResponse($result);
    }
}
