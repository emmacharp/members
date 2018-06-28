<?php

/**
 *
 */
class EntryQueryActivationAdapter extends EntryQueryListAdapter
{
    public function getFilterColumns()
    {
        return ['activated'];
    }

    public function getSortColumns()
    {
        return ['activated'];
    }
}
