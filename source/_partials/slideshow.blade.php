<section class="slideshow">

	<!-- Slider main container -->
	<div class="swiper-container">

		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">

			@foreach ($page->images as $image)
				<div class="swiper-slide" style="background-image: url('{{$image}}')">
				</div>
			@endforeach

		</div>

		<!-- If we need pagination -->
		<div class="swiper-pagination"></div>

	</div>

	{!! $content !!}

</section>
