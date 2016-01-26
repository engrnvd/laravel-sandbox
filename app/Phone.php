<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model {

    public $guarded = ["id","created_at","updated_at"];

    public static function findRequested()
    {
        $query = Phone::query();

        // search results based on user input
        \Request::input('id') and $query->where('id',\Request::input('id'));
        \Request::input('model') and $query->where('model','like','%'.\Request::input('model').'%');
        \Request::input('manufacturer') and $query->where('manufacturer','like','%'.\Request::input('manufacturer').'%');
        \Request::input('operating_system') and $query->where('operating_system',\Request::input('operating_system'));
        \Request::input('created_at') and $query->where('created_at',\Request::input('created_at'));
        \Request::input('updated_at') and $query->where('updated_at',\Request::input('updated_at'));
        \Request::input('release_date') and $query->where('release_date',\Request::input('release_date'));
        
        // sort results
        \Request::input("sort") and $query->orderBy(\Request::input("sort"),\Request::input("sortType","asc"));

        // paginate results
        return $query->paginate(15);
    }

    public static function validationRules( $attributes = null )
    {
        $rules = [
            'model' => 'required|string|max:250',
            'manufacturer' => 'required|string|max:250',
            'operating_system' => 'required|in:Android,IOS,Windows,Other',
            'release_date' => 'required|date',
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
