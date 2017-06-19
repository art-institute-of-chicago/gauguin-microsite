<section class="related events" role="landmark">
    <a class="anchor" id="{{ $page->getFilename() }}"></a>
	<div class="container">

		<div class="title">
			<h2>Upcoming Events</h2>

			<p><a href="{{ $page->link }}" target="_blank" class="btn-small">See all events</a></p>
		</div>

		<div class="wrapper">

			@foreach ($events->slice(0,6) as $event)

				<?php $section = $event->section ?: 'content'; ?>

				@include( $event->extends, [
					'page' => $page->merge($event),
					$section => $event->getContent()
				])

			@endforeach

		</div>

	</div>
</section>
