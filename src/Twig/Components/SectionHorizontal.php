<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class SectionHorizontal
{

	public string $sectionTitle = "";
	public bool $isGroup = false;
}
