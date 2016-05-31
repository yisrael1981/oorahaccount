<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class insertTuition extends Model
{
    protected $table = 'TuitionOnlineApps';
    protected $dates = ['DOB'];

/**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'AppDate';

    /**
     * The name of the "updated at" column.
     *  
     * @var string
     */
    const UPDATED_AT = 'LastUpdate';


}
