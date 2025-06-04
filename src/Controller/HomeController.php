<?php

namespace App\Controller;

use App\Model\Seo;
use App\Model\SiteConfig;
use Stenope\Bundle\ContentManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(ContentManagerInterface $contentManager): Response
    {

				dump($contentManager);
        return $this->render('home/index.html.twig', [
					'siteConfig' => $contentManager->getContent(SiteConfig::class, 'site'),
					'seoConfig' => $contentManager->getContent(Seo::class, 'seo'),
        ]);
    }
}
