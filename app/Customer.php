<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];

    protected $fillable = [
        'category',
        'kyat',
        'pae',
        'yway',
        'loan',
        'customer_name',
        'customer_address',
    ];
}
