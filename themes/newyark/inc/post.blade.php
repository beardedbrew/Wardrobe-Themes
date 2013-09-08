<div class="row post">
	<div class="col-md-offset-2 col-md-8">
		<h2 class="title"><a href="{{ url('post/'.$post->slug) }}">{{ $post->title }}</a></h2>
		<div class="date text-muted">{{ date("M/d/Y", strtotime($post->publish_date)) }}</div>
		<div class="content">
			{{ $post->parsed_content }}
		</div>
		<ul class="list-inline tags">
			@foreach ($post->tags as $item)
			    @if ($item->tag != "")
			      <li><a href="{{ url('/tag/'.$item->tag) }}">{{ $item->tag }}</a></li>
			    @endif
			@endforeach
		</ul>
	</div>
</div>