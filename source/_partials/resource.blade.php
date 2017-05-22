<div class="resource">

	<h5 tabindex="0">{{ $page->type }}</h5>

	<a href="{{ $page->link }}">
		<h4>{{ $page->title }}</h4>
	</a>

	@if ($page->image)
		@if ($page->link)
			<a href="{{ $page->link }}">
		@endif
		<img src="{{ $page->image }}" alt="{{ $page->alt }}"/></a>
		@if ($page->link)
			</a>
		@endif
	@endif

	</p>

</div>
