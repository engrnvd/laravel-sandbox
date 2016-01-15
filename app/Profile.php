<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

    public $guarded = ["id"];

    public function getIsAGoodPersonAttribute($value) {
        return $value == 1 ? "Yes" : "No";
    }

}
