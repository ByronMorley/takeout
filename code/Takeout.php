<?php

class Takeout extends DataExtension
{

	public static $allowed_actions = array();

	private static $db = array(
		'Caption' => 'Varchar',
		'RemoveFromMenu'=>'boolean'
	);

	private static $has_one = array(
		'MenuImage' => 'Image',
		'MenuTemplate' => 'MenuTemplate'
	);

	private static $has_many = array();

	public function contentControllerInit()
	{
		Requirements::css(TAKEOUT_DIR . '/css/style.min.css');
	}

	public function getCMSFields()
	{
		$fields = parent::getCMSFields();
		$this->extend('updateCMSFields', $fields);
		return $fields;
	}

	public function TakeoutDir()
	{
		return TAKEOUT_DIR;
	}

	public function updateCMSFields(FieldList $fields)
	{
		$uploadField = UploadField::create('MenuImage', 'Menu Image');

		$caption = TextField::create('Caption');
		$remove = CheckboxField::create('RemoveFromMenu');

		$fields->addFieldsToTab('Root.Menu', array(
			$uploadField,
			$caption,
			$remove,
		));

		$fields->addFieldToTab('Root.Menu',
			DropdownField::create('MenuTemplateID', 'Template', MenuTemplate::get()->map()->toArray('ID', 'Title'), $this->owner->MenuTemplate())->setEmptyString('(Select Template)')
		);

	}

	public function BluePeterMenu()
	{
		$arrayData = new ArrayData(array(
			'MenuTemplate' => $this->owner->MenuTemplate(),
			'Menu' => $this->owner->BlockHolders()
		));
		return $arrayData->renderWith('Menus/BluePeter');
	}

	public function CurrentDirMenu()
	{
		$arrayData = new ArrayData(array(
			'MenuTemplate' => $this->owner->MenuTemplate(),
			'Menu' => $this->owner
		));
		return $arrayData->renderWith('Menus/Takeout');
	}

	public function ChildMenu()
	{
		$arrayData = new ArrayData(array(
			'MenuTemplate' => $this->owner->MenuTemplate(),
			'Menu' => $this->owner->Children()
		));
		return $arrayData->renderWith('Menus/Takeout');
	}

}