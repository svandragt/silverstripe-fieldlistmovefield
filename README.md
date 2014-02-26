silverstripe-fieldlistmovefield
===============================

Add helper functions  to reorder fields in a FieldList. You can easily move a field to appear before and after other fields.

Example:
```php
public function getCMSFields() {
	$fields = parent::getCMSFields();

	// Move ModeOfAttendance relation before the Day field
	$fields->moveBefore('ModeOfAttendanceID','Day');

	// Move the Intake relation after the ModeOfAttendance relation
	$fields->moveAfter('IntakeTypeID','ModeOfAttendanceID');


	return $fields;
}
```
For the source field parameter (first argument), you can pass in a field or a field name.

## Installation

`composer require "svandragt/silverstripe-fieldlistmovefield:*"`

The code is straightforward so should work on any 3.x installation.


