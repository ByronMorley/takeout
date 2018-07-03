<?php

class ColorScheme extends DataExtension
{
	private static $db = array(
		'ColorScheme' => 'Varchar(50)'
	);

	public function getCMSFields()
	{
		$fields = parent::getCMSFields();
		$this->extend('updateCMSFields', $fields);
		return $fields;
	}


	public function updateCMSFields(FieldList $fields)
	{
		$colorSchemes = array(
			'alpha' => 'Alpha',
			'beta' => 'Beta',
			'gamma' => 'Gamma',
			'delta' => 'Delta',
			'epsilon' => 'Epsilon',
			'zeta' => 'Zeta',
			'eta' => 'Eta',
			'theta' => 'Theta',
		);

		$colorScheme = DropdownField::create(
			'ColorScheme',
			'Color Scheme',
			$colorSchemes
		)->setEmptyString('(Select Color Scheme)');
		$fields->addFieldToTab('Root.Menu', $colorScheme );
	}
}