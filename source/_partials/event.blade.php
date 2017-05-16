<div class="event">

	<h5>{{ $page->type }}</h5>

	<a href="{{ $page->link }}">
		<h4>{{ $page->title }}</h4>
	</a>

	<p>

		@if ($page->summary)
			{{ $page->summary }}<br/>
		@endif

		<strong>{{ $page->date }}<br/>{{ $page->time }}</strong>

	</p>

</div>
