<section class="theme theme-1-{{ $page->orientation }}">
	<div class="container">

		<h2>{{ $page->theme }}</h2>

		<div class="wrapper">

			{{-- TODO: Add an @if --}}
			<div class="image">
				<a href="javascript:Lightbox.load('{{ $page->lightbox }}');" class="lightbox">
					<img src="images/content/{{ $page->image }}"/>
				</a>
			</div>

			<div class="content">

				<h1>{{ $page->title }}</h1>
				<div>{!! $content !!}</div>

			</div>

		</div>

	</div>
</section>