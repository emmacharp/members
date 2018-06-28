<?php

/**
 *
 */
class EntryQueryRoleAdapter extends EntryQueryListAdapter
{
    public function getFilterColumns()
    {
        return ['role_id'];
    }

    public function getSortColumns()
    {
        return ['role_id'];
    }
}
