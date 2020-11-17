tends('layouts.app')

@section('contant')

  <a href="/post" class="btn btn-defult">GO to Back</a>
    <h1>{{$post->title}}}</h1>
    <p>{{$post->body}}</p>

    <small>write on {{$post->created_at}}</small>


@endsection  