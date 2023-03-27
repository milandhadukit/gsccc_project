
<?php

if (!function_exists('translation')) {
    function translation($obj, $column)
    {
        $locale = app()->getLocale();
        $fields = explode('.', $column);
        $first_name = array_shift($fields);
        $field_name = $first_name . '_' . $locale;
        return $obj->$field_name;
    }
}
