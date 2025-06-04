<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class SEO
{
	public string $title = "";
	public string $description = "";
	public string $keywords = "";

	public string $author = "";

	public string $favicon = "";

	public string $websiteURL = "";

	public string $xHandle = "";

	public string $xImage = "";

	public string $metaImage = "";
}
