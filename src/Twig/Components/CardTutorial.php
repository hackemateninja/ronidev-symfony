<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class CardTutorial
{
	public string $title = "";

	public string $imageURL = "";

	public string $url = "";
}
