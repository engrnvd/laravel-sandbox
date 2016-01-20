<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

    public $guarded = ["id"];

    public function getIsAGoodPersonAttribute($value) {
        return $value == 1 ? "Yes" : "No";
    }

    public static function findRequested()
    {
        $query = Profile::query();
        \Request::input("id") and $query->where("id",\Request::input("id"));
        \Request::input("name") and $query->where("name","like","%".\Request::input("name")."%");
        \Request::input("dob") and $query->where("dob",\Request::input("dob"));
        \Request::input("gender") and $query->where("gender",\Request::input("gender"));
        \Request::input("is_a_good_person") and $query->where("is_a_good_person",\Request::input("is_a_good_person"));
        \Request::input("sort") and $query->orderBy(\Request::input("sort"),\Request::input("sortType","asc"));
        return $query->get();
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
