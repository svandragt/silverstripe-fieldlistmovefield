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
