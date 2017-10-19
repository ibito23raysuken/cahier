@extends('template.template')

@section('contenu')
 <?php $date= date('j')."/".date('m').'/'.date('Y');?>
<div class="panel panel-primary"  style="margin: 20px">
    <div class="panel-heading" style="margin: 20px">
        <h1>Fiche</h1>
    </div>
    <div class="panel-body">
        {!! Form::open(['url' => 'cahier', 'method' => 'post']) !!}   
            @include("page.formulaire")         
        {!! Form::submit('Envoyer',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>

</div>
<div class="container-fluid" ">
     <a href="javascript:history.back()" class="btn btn-primary" > Retour</a>
</div>
<!--script-->
<script>
    $('.datepicker').datepicker({
        language: 'fr'
    })
</script>
@stop