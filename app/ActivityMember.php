<?php

namespace App;

class ActivityMember extends Model
{
    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }
}
