@extends('front.template.main')

@section('title', $article->title)

@section('content')
    <h3 class="title-front left">{{$article->title}}</h3>
     <div class="row">
     	<div class="col-md-8">
     		{!! $article->content!!}
     	</div>
          <div class="col-md-4 aside">
              @include('front.template.partials.aside')
          </div>
     </div>
@endsection