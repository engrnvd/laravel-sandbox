<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model {

    public $guarded = ["id","created_at","updated_at"];

    public static function findRequested()
    {
        $query = Person::query();

        // search results based on user input
        \Request::input('id') and $query->where('id',\Request::input('id'));
        \Request::input('name') and $query->where('name','like','%'.\Request::input('name').'%');
        \Request::input('dob') and $query->where('dob',\Request::input('dob'));
        \Request::input('about') and $query->where('about','like','%'.\Request::input('about').'%');
        \Request::input('is_a_good_person') and $query->where('is_a_good_person',\Request::input('is_a_good_person'));
        \Request::input('gender') and $query->where('gender',\Request::input('gender'));
        \Request::input('image') and $query->where('image','like','%'.\Request::input('image').'%');
        \Request::input('created_at') and $query->where('created_at',\Request::input('created_at'));
        \Request::input('updated_at') and $query->where('updated_at',\Request::input('updated_at'));
        
        // sort results
        \Request::input("sort") and $query->orderBy(\Request::input("sort"),\Request::input("sortType","asc"));

        // paginate results
        return $query->paginate(2);
    }

    public static function validationRules( $attributes = null )
    {
        $rules = [
            'name' => 'required|string|max:250',
            'dob' => 'required|date',
            'about' => 'required|string',
            'is_a_good_person' => 'required|in:Yes,No',
            'gender' => 'required|in:Male,Female',
            'image' => 'string|max:250',
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
