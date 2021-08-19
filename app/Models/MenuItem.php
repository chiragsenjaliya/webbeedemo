<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    /**
     * Get Children For MenuItem
     */
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    /**
     * Get all children recursively
     *
     */
    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }
}
