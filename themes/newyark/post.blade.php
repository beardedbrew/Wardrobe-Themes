@extends(theme_path('layout'))

@section('title')
  {{ site_title() }} - {{ $post->title }}
@stop

@section('content')

<div class="row post">
	<div class="col-md-offset-2 col-md-8">
		<h2 class="title">{{ $post->title }}</h2>
		<div class="date text-muted">{{ date("M/d/Y", strtotime($post->publish_date)) }}</div>
		<div class="content">
			{{ $post->parsed_content }}
		</div>
	</div>
</div>

@stop

