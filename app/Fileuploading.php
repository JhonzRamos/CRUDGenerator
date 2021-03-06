<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class Fileuploading extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'fileuploading';
    
    protected $fillable = ['sFileUpload'];
    

    public static function boot()
    {
        parent::boot();

        Fileuploading::observe(new UserActionsObserver);
    }
    
    
    
    
}