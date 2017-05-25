<section class="slideshow" role="landmark">

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

		<img src="images/gauguin-logo.svg" />

		<div class="events">

			<div class="event event-exhibit">
				<span class="title">Exhibition</span>
				<span class="date">Jun 25 • Sept 10</span>
			</div>

			<div class="event event-preview">
				<span class="title">Member Preview</span>
				<span class="date">Jun 22</span>
			</div>

		</div>

	</div>

	{{-- {!! $content !!} --}}

</section>
