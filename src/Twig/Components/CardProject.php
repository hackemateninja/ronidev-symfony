<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class CardProject
{
	public string $name = "";

	public string $description = "";

	public string $url = "";

	public string $imageUrl = "";
}
