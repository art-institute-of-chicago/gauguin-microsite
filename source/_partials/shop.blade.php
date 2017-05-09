<section class="shop">

   	<div class="title">

	    <h3>Shop</h3>

	    <a href="{{ $page->link }}">See all products</a>

	</div>
	
@foreach ($shop as $item)

    <?php $section = $item->section ?: 'content'; ?>
    
    @include( $item->extends, [
      'page' => $page->merge($item),
      $section => $item->getContent()
    ])

@endforeach

	
</section>
