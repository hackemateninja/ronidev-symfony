<?php

namespace App\Model;

class ExperienceItem
{
	public string $startDate = "";
	public string $endDate = "";

	public string $url = "";

	public string $imageURL = "";

	public string $place = "";

	public string $title = "";

	public string $description = "";
}

class Experience
{


	/** @var ExperienceItem[]  */
	public array $experiences = [];

}
