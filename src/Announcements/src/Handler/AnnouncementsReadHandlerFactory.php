<?php

declare(strict_types=1);

namespace Announcements\Handler;

use Doctrine\ORM\EntityManager;
use Psr\Container\ContainerInterface;
use Zend\Expressive\Hal\HalResponseFactory;
use Zend\Expressive\Hal\ResourceGenerator;
use Zend\Expressive\Helper\UrlHelper;

class AnnouncementsReadHandlerFactory
{
    public function __invoke(ContainerInterface $container) : AnnouncementsReadHandler
    {
        $entityMangaer = $container->get(EntityManager::class);

        $resouceGenerator = $container->get(ResourceGenerator::class);
        $halResponseFactory = $container->get(HalResponseFactory::class);

        return new AnnouncementsReadHandler(
            $entityMangaer,
            $container->get('config')['page_size'],
            $resouceGenerator,
            $halResponseFactory
        );
    }
}
