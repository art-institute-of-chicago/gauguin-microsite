<section class="call-to-action">
	<div class="container">

		<h1 tabindex="0">{{ $page->title }}</h1>

		<h2><a href="{{ $page->subtitleLink }}">{{ $page->subtitle }}</a></h2>

		<ul>
			<li><a href="{{ $page->buttonOneLink }}">{{ $page->buttonOne }}</a></li>
			<li><a href="{{ $page->buttonTwoLink }}">{{ $page->buttonTwo }}</a></li>
		</ul>

		<h3 tabindex="0">{{ $page->dates }}</h3>
		<span tabindex="0">{!! $content !!}</p>

	</div>
</section>
