<section class="video">
	<div class="container">

		<video
			id="{{ $page->getFilename() }}"
			class="video-js vjs-default-skin vjs-fluid vjs-16-9 vjs-big-play-centered"
			controls
			poster="{{ $page->poster }}"
			data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "{{ $page->video }}"}] }'
		></video>

	</div>
</section>
