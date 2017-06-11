<!DOCTYPE html> 
<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Home') | Blog Jyms</title>
   
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}">
</head>
<body>
    <header>
      @include('front.template.partials.header')
    </header>
    <div class="container">
      @yield('content')
    <footer>
      <hr>
      Todos los derechos reservados &copy {{ date('Y') }}
      <div class="pull-right">Jyms</div>
    </footer>  
    </div>
    
    <script src="{{asset('plugins/jquery/js/jquery-3.1.0.js')}}"></script>       
</body>
</html>