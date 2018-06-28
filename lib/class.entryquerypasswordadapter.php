<?php

/**
 * @package toolkit
 */
/**
 * Specialized EntryQueryFieldAdapter that facilitate creation of queries filtering/sorting data from
 * an password Field.
 * @see FieldTextarea
 * @since Symphony 3.0.0
 */
class EntryQueryPasswordAdapter extends EntryQueryFieldAdapter
{
    public function getFilterColumns()
    {
        return ['password'];
    }

    public function getSortColumns()
    {
        return ['password'];
    }
}
