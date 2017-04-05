<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    public function getTable()
    {
        return 'dtb_tags';
    }
}
