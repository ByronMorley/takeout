<?php

class MenuTemplate extends DataObject
{
	private static $db = array(
		'Title' => 'Varchar',
		'Theme' => 'Varchar',
		'Column' => 'Varchar',
		'Rounded' => 'Varchar',
		'IconPosition' => 'Varchar',
		'ShapePosition' => 'Varchar',
		'TitlePosition' => 'Varchar',
		'ButtonPosition' => 'Varchar',
	);

	private static $belongs_to = array(
		'Page' => 'Page'
	);

	public function getCMSFields()
	{
		$fields = parent::getCMSFields();

		$fields->addFieldToTab('Root.Main', TextField::create('Title'));

		/*-- Theme --*/

		$themes = array(
			'none' => 'none',
			'timeless' => 'Timeless',
			'wordsworth' => 'Wordsworth',
			'renaissance' => 'renaissance',
		);

		$theme = DropdownField::create(
			'Theme',
			'Theme',
			$themes,
			$this->Theme
		);

		/*-- Colunns --*/

		$columns = array(
			'column-1' => '1',
			'column-2' => '2',
			'column-3' => '3',
			'column-4' => '4',
			'column-5' => '5',
		);

		$column = DropdownField::create(
			'Column',
			'Max Column Count',
			$columns
		);

		/*-- Rounded --*/

		$rounded = CheckboxField::create('Rounded', 'Rounded edges');

		$position = array(
			'top left' => 'top left',
			'top right' => 'top right',
			'bottom left' => 'bottom left',
			'bottom right' => 'bottom right',
		);

		/*-- Icon --*/

		$iconPosition = DropdownField::create(
			'IconPosition',
			'Icon position',
			$position
		);

		/*-- Shape --*/

		$shapePosition = DropdownField::create(
			'ShapePosition',
			'Shape position',
			$position
		);

		/*-- Title --*/

		$titlePosition = DropdownField::create(
			'TitlePosition',
			'Title position',
			$position
		);

		/*-- Button --*/

		$buttonPosition = DropdownField::create(
			'ButtonPosition',
			'Button position',
			$position
		);

		$fields->addFieldsToTab('Root.Main', array(
			$theme,
			$column,
			$rounded,
			$iconPosition,
			$shapePosition,
			$titlePosition,
			$buttonPosition
		));

		return $fields;
	}
}