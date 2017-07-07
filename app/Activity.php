<?php

namespace App;

class Activity extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function activityMembers()
    {
        return $this->hasMany(ActivityMember::class);
    }
}
