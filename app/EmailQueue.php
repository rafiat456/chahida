<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailQueue extends Model
{
	protected $table = 'email_queue';
    protected $fillable = array(
        'id',
        'email_content',
        'email_to',
        'email_cc',
        'attachment',
        'email_status',
        'secret_key',
        'created_at',
        'updated_at',
    );
    //
}
