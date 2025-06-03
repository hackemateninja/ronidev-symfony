<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class Header
{
	public string $image = "";

	public string $title = '';

	public string $description = '';

	public string $buttonURL = "";

	public array $featuredImages = [];
}
