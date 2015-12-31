<?php
class FieldListMoveFieldExtension extends Extension
{

    public function moveAfter($source, $destination)
    {
        list($field, $field_name) = $this->fieldFromName($source);

        $this->owner->removeByName($field_name);
        $this->owner->insertAfter($field, $destination);
    }

    public function moveBefore($source, $destination)
    {
        list($field, $field_name) = $this->fieldFromName($source);
        $this->owner->removeByName($field_name);
        $this->owner->insertBefore($field, $destination);
    }

    private function fieldFromName($source)
    {
        if (is_object($source)) {
            $field = $source;
            $field_name = $field->Name;
        } else {
            $field_name = $source;
            $field = $this->owner->fieldByName($source);
            if (empty($field)) {
                $field = $this->owner->dataFieldByName($source);
            }
        }
        return array($field, $field_name);
    }
}
