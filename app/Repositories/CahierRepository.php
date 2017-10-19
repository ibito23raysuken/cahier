<?php 
namespace App\Repositories;

use App\Client;
use App\Repositories\ClientRepositoryInterface;

class CahierRepository {

    protected $client;

   
	public function __construct(Client $client){

		$this->client= $client;
	}

	public function save(Client $client, Array $inputs){
		$client->code =$inputs['code'];
		$client->nom =$inputs['nom'];
		$client->prenom=$inputs['prenom'];
		$client->CIN =$inputs['CIN'];
		$client->numero=$inputs['numero'];
		$client->date_naissance=$inputs['date_naissance'];
		$client->lieu_naissance=$inputs['lieu_naissance'];
	 	$client->date_CIN=$inputs['date_CIN'];
	 	$client->lieu_CIN=$inputs['lieu_CIN'];
	 	$client->adresse=$inputs['adresse'];
	 	$client->cp=$inputs['CP'];
	 	$client->Mtt=$inputs['Mtt'];
	 	$client->Obs=$inputs['Obs'];

		$client->save();
	}

	public function getPaginate($n){
		return $this->client->paginate($n);
	}

	public function store(Array $inputs){
		$client = new $this->client;		

		$this->save($client, $inputs);

		return $client;
	}

	public function getById($id){
		return $this->client->findOrFail($id);
	}

	public function update($id, Array $inputs){
		$this->save($this->getById($id), $inputs);
	}

	public function destroy($id){
		$this->getById($id)->delete();
	}

}