<!DOCTYPE html>
<html lang="fr">
	<head>
		 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
{{--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
     --}}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
   
     
    <script src="bootstrap-datepicker.fr.min.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cahier</title>
    
    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<style> textarea { resize: none; } </style>
	</head>
    
	<body>
       <nav  class="navbar bg-primary">
            <div class="container-fluid">
                <div class="navbar-header bg-primary" >
                    <div class="navbar-brand" style=" color: white">Chahier</div>
                </div>
                @guest
                @else
                @if(isset($nom_page)&&$nom_page=='index')
                <div class="col-sm-3 col-md-3">
                    <form class="navbar-form" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="q">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">recherche
                                        <spam class="glyphicon glyphicon-search"></spam>  
                                    </button>

                                </div>
                            </div>
                     </form> 
                 </div>  
                @endif                    
                @endguest       
               
               
        @guest
        @else
        <ul  class="nav navbar-nav navbar-right ">
                <li >  
                    <a href="#" style=" color: white"> gerer les client </a>
                </li>
                <li >  
                    <a href="{{ route('cahier.create') }}" style=" color: white"> Ajouter un client </a>
                </li>
                <li style="margin-left:20px; color: white">
                    <p class="navbar-text"> <spam class="glyphicon glyphicon-user"></spam>{{ Auth::user()->name }}</p>
                </li>
                <li style="margin-left:20px ">

                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();" style=" color: white"> <spam class="glyphicon glyphicon-off"></spam>logout
                    </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                </form>
                </li>
                
        
         </ul>        
        @endguest
   
  </div>
</nav>

		@yield('contenu')
	</body>
</html>