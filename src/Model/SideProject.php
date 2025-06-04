<?php

namespace App\Model;

class SideProjectItem
{
	public string $name;
	public string $description;
	public string $imageUrl;
	public string $url;
}

class SideProject
{

	/** @var SideProjectItem[]  */
	public array $projects = [];
}
