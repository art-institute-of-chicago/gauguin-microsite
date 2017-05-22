<section class="slideshow">

	<!-- Slider main container -->
	<div class="swiper-container">

		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">

			<!-- Slides -->
			@foreach ($page->images as $index => $image)
				<div class="swiper-slide" style="background-image: url('{{$image}}')" data-hash="{{ ++$index }}">
				</div>
			@endforeach

		</div>

		<!-- Pagination -->
		<div class="swiper-pagination"></div>

	</div>

	<div class="title-card">

		<h2 tabindex="0">Defy<br/>Definition</h2>
		<h1 tabindex="0">Gauguin</h1>

		<div class="events">

			<div class="event event-exhibit">
				<span class="title" tabindex="0">Artist as Alchemist</span>
				<span class="date" tabindex="0">Jun 25 • Sept 10</span>
			</div>

			<div class="event event-preview">
				<span class="title" tabindex="0">Member Preview</span>
				<span class="date" tabindex="0">Jun 22</span>
			</div>

		</div>

	</div>

	{{-- {!! $content !!} --}}

</section>
