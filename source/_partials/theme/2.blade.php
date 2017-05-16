<section class="theme theme-2">
	<div class="container">

		<h2>{{ $page->theme }}</h2>

		<div class="wrapper">

			{{-- We are gonna assume that all four images were defined --}}
			@foreach ($page->images as $key => $image)

				{{-- .image-* will be used to order elements using flexbox --}}
				<div class="image image-{{ $key + 1 }}">

					{{-- We need an <a> wrapper regardless for layout! --}}
					<a class="lightbox" href="javascript:Lightbox.load({{ $image['lightbox'] }})';">
						<img src="images/content/{{ $image['image'] }}"/>
					</a>

				</div>

			@endforeach

			<div class="content">

				<h1>{{ $page->title }}</h1>
				<div>{!! $content !!}</div>

			</div>

		</div>

	</div>
</section>
