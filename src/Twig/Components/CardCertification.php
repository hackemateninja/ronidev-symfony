<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class CardCertification
{
	public string $title = "";
	public string $description = "";
	public string $url = "";
	public string $certificationPlace = "";
}
