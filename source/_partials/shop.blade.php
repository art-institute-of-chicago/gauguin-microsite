<section class="related shop">
	<div class="container">

		<div class="title">
			<h2 tabindex="0">Shop</h2>

			<p><a href="{{ $page->link }}">See all products</a></p>
		</div>

		<div class="wrapper">

			@foreach ($shop as $item)

				<?php $section = $item->section ?: 'content'; ?>

				@include( $item->extends, [
					'page' => $page->merge($item),
					$section => $item->getContent()
				])

			@endforeach

		</div>

	</div>
</section>
