@extends(theme_view('layout'))

@section('title')
  Posts - {{ site_title() }}
@stop

@section('content')
	
	@foreach ($posts as $post)
	  @include(theme_view('inc.post'))
	@endforeach

    {{ $posts->links() }}

@endsection