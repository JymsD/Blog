<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default') | Panel de Administración</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/trumbowyg/ui/trumbowyg.css')}}">
</head>
<body class="admin-body">
    
            
	@include('admin.template.partials.nav')
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title">@yield('title')</h3> 
            </div>
            <div class="panel-body">
                @include('flash::message')
                @include('admin.template.partials.errors')
                @yield('content')
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="admin-footer">
    	<nav class="navbar navbar-default">
          <div class="container-fluid">
              <div class="collapse navbar-collapse">
                  
              </div>
          </div>   
        </nav>
    </footer>
    
    <script src="{{asset('plugins/jquery/js/jquery-3.1.0.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>          
    <script src="{{asset('plugins/trumbowyg/trumbowyg.js')}}"></script>  
    @yield('js')   
</body>
</html>