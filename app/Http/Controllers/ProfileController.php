<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    protected $viewDir = "profile";
    
    public function index()
    {
        return $this->view( "index", ['records' => Profile::get()] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Profile $profile)
    {
        $this->validate($request, Profile::validationRules());

        Profile::create($request->all());

        return redirect('/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Profile $profile)
    {
        return $this->view("show",['profile' => $profile]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Profile $profile)
    {
        return $this->view( "edit", ['profile' => $profile] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $this->validate($request, Profile::validationRules());

        $profile->update($request->all());

        return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Profile $profile)
    {
        $profile->delete();
        return redirect('/profile');
    }
        
    protected function view($view, $data = [])
    {
        return view($this->viewDir.".".$view, $data);
    }

    protected function fields()
    {
        $columns = \DB::select('show fields from '.$this->model->getTable()); 
        $tableFields = array(); // return value
        foreach ($columns as $column) {
            $column = (array)$column;
            $field = new \stdClass();
            $field->name = $column['Field'];
            $field->defValue = $column['Default'];
            $field->required = $column['Null'] == 'NO';
            $field->key = $column['Key'];
            // type and length
            $field->maxLength = 0;// get field and type from $res['Type']
                $type_length = explode( "(", $column['Type'] );
                $field->type = $type_length[0];
                if( count($type_length) > 1 ) { // some times there is no "("
                    $field->maxLength = (int)$type_length[1];
                    if( $field->type == 'enum' ) { // enum has some values  'Male','Female')
                        $matches = explode( "'", $type_length[1] );
                        foreach($matches as $match) {
                            if( $match && $match != "," && $match != ")" ){ $field->enumValues[] = $match; }
                        }
                    }
                }
            // everything decided for the field, add it to the array
            $tableFields[] = $field;
        }
        return $tableFields;
    }
    
}
