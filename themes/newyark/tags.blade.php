@extends(theme_path('layout'))

@section('content')
	
<ul class="list-inline tags">
	@foreach (Wardrobe::tags() as $item)
	  @if ($item['tag'] != "")
	    <li><a href="{{ url('/tag/'.$item['tag']) }}">{{ $item['tag'] }}</a></li>
	  @endif
	@endforeach
</ul>

@endsection