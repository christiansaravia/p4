<?php

namespace Matchio;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function company() {
        # Job belongs to Company
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('Matchio\Company');
    }
}
