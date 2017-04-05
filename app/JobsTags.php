<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobsTags extends Model
{

    public function getTable()
    {
        return 'dtb_jobs_tags';
    }
}
