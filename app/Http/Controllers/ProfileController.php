<?php

namespace App\Http\Controllers;

use App\Profile;

class ProfileController extends CrudController
{
    public function __construct(Profile $model)
    {
        $this->model = $model;
    }
    
    protected function fields() 
    {
//        return \DB::select('show fields from profiles'); 
        $platform = \Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform();
        $platform->registerDoctrineTypeMapping('enum', 'string');
        $connection = \DB::connection();
        $sm = $connection->getDoctrineSchemaManager();
        return $sm->listTableDetails('profiles');               
        return \DB::select('show columns from profiles');                
    }
    
}
