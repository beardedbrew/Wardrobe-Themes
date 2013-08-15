@extends(theme_path('layout'))

@section('title')
  Posts - {{ site_title() }}
@stop

@section('content')
	
	@foreach ($posts as $post)
	  @include(theme_path('inc.post'))
	@endforeach

    {{ $posts->links() }}

@endsection