<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista(){
    	return (object)[
    		'nome'=> 'PAULO',
    		'tel' => '41 3082-6393',
			'email' => 'paulo@gmail.com'
			
    	];
    }

}
