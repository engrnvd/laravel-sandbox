<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

    public $guarded = ["id"];

    public function getIsAGoodPersonAttribute($value) {
        return $value == 1 ? "Yes" : "No";
    }

    public static function validationRules( $attributes = null )
    {
        $rules = [
            'name' => 'required|max:255|string',
            'dob' => 'required|date',
            'about' => 'required',
            'is_a_good_person' => 'required',
            'gender' => 'required|string|in:Male,Female',
        ];

        // no list is provided
        if(!$attributes)
            return $rules;

        // a single attribute is provided
        if(!is_array($attributes))
            return $rules[$attributes];

        // a list of attributes is provided
        $newRules = [];
        foreach ( $attributes as $attr )
            $newRules[$attr] = $rules[$attr];
        return $newRules;
    }

}
