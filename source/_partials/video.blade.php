<section class="video">
	<div class="container">

	@if ($page->publish)

		<video
			id="{{ $page->getFilename() }}"
			class="video-js vjs-default-skin vjs-fluid vjs-16-9 vjs-big-play-centered"
			controls
			poster="{{ $page->poster }}"
			data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "{{ $page->video }}"}] }'
			tabindex="0"
		></video>

	@else

		<img src="{{ $page->poster }}" class="unpublished" alt="{{ $page->posterAlt }}" tabindex="0"/>

	@endif

	</div>
</section>
