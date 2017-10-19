 

    <div class="tabe-responsive">
     <table class="table">
         <tr>
            <td><label>Code</label></td>
            <td class="{!! $errors->has('code') ? 'has-error' : '' !!}">
                 {!! Form::text('code', null,['placeholder' => 'code']) !!}
                 {!! $errors->first('code', '<small class="help-block">:message</small>') !!}
            </td>
        </tr>
        <tr class="">
            <td><label>Nom</label></td>
            <td>
                 {!! Form::text('nom', null,['placeholder' => 'nom']) !!}
            </td>
            <td><label>Prenom</label></td>
            <td>
                {!! Form::text('prenom', null,['placeholder' => 'Prenom']) !!}
            </td>
        </tr>
        <tr>
            <td><label>Numero</label></th>
            <td>
                {!! Form::text('numero', null,['placeholder' => 'numero']) !!}
            </td>
            <td><label>Date de naissance</label></td>
            <td>
                <samp>
                    {!! Form::text('date_naissance', null,['class'=>"form  datepicker",'placeholder' => 'date_CIN','value'=>$date, 'data-date-format'=>'dd-mm-yy'])!!}
                 <spamp class="glyphicon glyphicon-calendar"></spamp>
                </samp>
                 
            </td>
            <td><label>Lieu de naissance</label></td>
            <td>
                 {!! Form::text('lieu_naissance', null,['placeholder' => 'lieu_naissance']) !!}
            </td>
            <td><label>Adresse</label></td>
            <td>
                {!! Form::textarea('adresse',null,['size' => '20x3'],['placeholder' => 'adresse']) !!}
            </td>
        </tr>
        <tr>
            <td><label>CIN</label></td>
            <td>
                {!! Form::text('CIN', null,['placeholder' => 'CIN']) !!}
            </td>
            <td><label>Date CIN</label>  </td>
            <td>
                 <samp>
                    {!! Form::text('date_CIN', null,['class'=>"form  datepicker",'placeholder' => 'date_CIN','value'=>$date, 'data-date-format'=>'dd-mm-yy'])!!}
                 <spamp class="glyphicon glyphicon-calendar"></spamp>
                </samp>
            </td>
            <td><label>Lieu CIN</label></td>
            <td>
                 {!! Form::text('lieu_CIN',null, ['placeholder' => 'lieu_CIN']) !!}
            </td>
        </tr>
        <tr>
            <td> <label>CP</label></td>
            <td>
                {!! Form::text('CP', null,['placeholder' => 'CP']) !!}
            </td>
            <td><label>Mtt</label></td>
            <td>
                {!! Form::text('Mtt', null,['placeholder' => 'Mtt']) !!}
            </td>
            <td><label>Obs</label></td>
            <td>
                {!! Form::text('Obs', null,['placeholder' => 'Obs']) !!}
                {!! $errors->first('Obs', '<small class="help-block">:message</small>') !!}
            </td>
        </tr>
        
    </table>
    
</div>

