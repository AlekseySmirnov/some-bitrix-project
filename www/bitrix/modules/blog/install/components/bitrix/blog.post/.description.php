<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("BP_DEFAULT_TEMPLATE_NAME"),
	"DESCRIPTION" => GetMessage("BP_DEFAULT_TEMPLATE_DESCRIPTION"),
	"ICON" => "/images/icon.gif",
	"SORT" => 170,
	"PATH" => array(
		"ID" => "communication",
		"CHILD" => array(
			"ID" => "blog",
			"NAME" => GetMessage("BP_NAME")
		)
	),
);
?>