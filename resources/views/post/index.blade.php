
tends('layouts.app')

@section('contant')


    <h1>about</h1>
    @if(count($posts) > 1)

<div class="card">
	

	<ul class="list-group list-group-flush">
</div>


     @foreach($posts as $post)
     <li class="list-group-item">
    <p>wellcomewellcome</p>
    <div class="well">
    	<h3><a href="/posts/{{$post->id}}"></a>{{$post->title}}</h3>
    	<small>written on {{$post->created_at}}</small>
    	</li>


   @endforeach
   </ul>
</div>
   @else
   @endif

@endsection  