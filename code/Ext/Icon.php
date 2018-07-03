<?php

class Icon extends DataExtension
{
	private static $db = array(
		'Icon' => 'Varchar(50)'
	);

	public function getCMSFields()
	{
		$fields = parent::getCMSFields();
		$this->extend('updateCMSFields', $fields);
		return $fields;
	}


	public function updateCMSFields(FieldList $fields)
	{
		$icons = array(
			'fa fa-users' => 'group',
			'fa fa-gamepad'=>'gamepad',
			'fa fa-leaf'=>'leaf',
			'fa fa-home'=>'house',
			'fa fa-cogs'=>'settings',
			'fa fa-handshake-o'=>'handshake',
			'fa fa-heart-o'=>'heart',
			'fa fa-futbol-o'=>'football',
			'fa fa-exchange'=>'exchange',
			'dragon'=>'dragon',
		);

		$icon = Select2Field::create(
			'Icon',
			'Icon',
			$icons
		)->setEmptyString('(Select Icon)');
		$fields->addFieldToTab('Root.Menu', $icon);
	}
}