<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ClientRequest;

use App\Http\Controllers\Controller;

use App\Repositories\CahierRepository;

class cahierController extends Controller
{
 

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
       	protected $CahierRepository;
		protected $nbrPerPage = 10;

	public function __construct(CahierRepository $CahierRepository){
		$this->middleware('auth');

		$this->CahierRepository= $CahierRepository;
	}
	public function index()
	{
		
		if(isset($_GET['q'])){
			if ($_GET['q']) {
				
				$client = $this->CahierRepository->getPaginate($this->nbrPerPage)->where('numero',$_GET['q']);
			}
			else{
				$client = $this->CahierRepository->getPaginate($this->nbrPerPage);
			}
			
		}
		else{
			
			$client = $this->CahierRepository->getPaginate($this->nbrPerPage);
		}
		
		//$links = $users->setPath('')->render();

		//return view('index', compact('users', 'links'));
		return view('page.index',compact('client'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('page.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ClientRequest $request){
		//
		
		$client = $this->CahierRepository->store($request->all());
		return redirect('cahier');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$client = $this->CahierRepository->getById($id);
		return view('page.edit',compact('client'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,ClientRequest $request){
		$client = $this->CahierRepository->update($id,$request->all());
		return redirect('cahier');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id){
			$client = $this->CahierRepository->destroy($id);
			return redirect('cahier');
	}

}
