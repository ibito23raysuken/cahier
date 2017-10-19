<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{	
	protected $table ='ClientServer';
    protected $fillable =['id','code','nom','prenom','numero','date_naissance','lieu_naissance','date_CIN','lieu_CIN','adresse','CP','Mtt','Obs'];
 //   protected $table ='ClientServer';
    public $timestamps=false;

}
