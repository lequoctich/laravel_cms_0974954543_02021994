<?php

namespace App\Services\User;

abstract class BaseService {
    /**
     * The Model instance.
     *
     * @var Illuminate\Database\Eloquent\Model
     */
    protected $model;
    
    /**
     * Parameter for main function
     *
     * @var array
     */
    private $_params = [];
   
}
