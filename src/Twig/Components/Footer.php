<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class Footer
{
	public string $logoURL = "";
	public string $facebookURL = "";
	public string $xURL = "";
	public string $gitHubURL = "";

	public string $facebookURl = "";

	public string $copyright = "";
}
