<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class CardExperience
{
	public string $startDate = "";
	public string $endDate = "";

	public string $url = "";

	public string $imageURL = "";

	public string $place = "";

	public string $title = "";

	public string $description = "";
}
