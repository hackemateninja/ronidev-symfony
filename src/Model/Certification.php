<?php

namespace App\Model;


class CertificationItem
{
	public string $title = "";
	public string $description = "";
	public string $url = "";
	public string $certificationPlace = "";
}
class Certification
{

	/** @var CertificationItem[]  */
	public array $certifications = [];
}
