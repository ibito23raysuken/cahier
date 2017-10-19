
@extends('template.template',['nom_page'=>'index'])

@section('contenu')
    <div>

		<div >
			<div  class="panel panel-primary">
				<table class="table">
					<div class="panel-heading">
						fiche
					</div>
					   
					<div class="panel-body">
						<tr>
							<td>Code</td>
							<td>Nom</td>
							<td>Prenom</td>
							<td>Adress</td>
							<td>numero</td>
							<td>CIN</td>
						</tr>
					@foreach($client as $clients)
					<tr>
						<td>{{$clients->code}}</td>
						<td>{{$clients->nom}}</td>
						<td>{{$clients->prenom}}</td>
						<td>{{$clients->adresse}}</td>
						<td>{{$clients->numero}}</td>
						<td>{{$clients->CIN}}</td>
						<td>{!! link_to_route('cahier.edit','editer',[$clients->id]);!!}</td>
						<td>
							{!! Form::open(['method' => 'DELETE', 'route' => ['cahier.destroy', $clients->id]]) !!}
								{!! Form::submit('Supprimer', ['class' => ' text gd-primary','onclick' => 'return confirm(\'Vraiment supprimer  ?\')']) !!}
								<spam class="glyphicon glyphicon-trash"></spam>	
							{!! Form::close() !!}	
						</td>
					</tr>
					@endforeach
				</div>
				
			</table>
			</div>
			
			
		</div>
		
	</div>
@stop