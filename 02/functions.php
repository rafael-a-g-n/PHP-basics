<?php

function dd($value){
	echo "<pre>";
	var_dump($value);
	echo "</pre>";

	die();
}

function getUrl($value): bool
{
	return $_SERVER['REQUEST_URI'] === $value;
}