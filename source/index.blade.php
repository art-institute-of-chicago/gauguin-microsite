@extends('_layouts.master')

@section('body')

{{-- Define sort order in config.php --}}
@foreach ($blocks as $block)

	{{-- Skip this block if hide is true --}}
	<?php if( !is_null($block->hide) && $block->hide ) continue; ?>

	{{-- Markdown file's "body" contents will be accessible in the block, --}}
	{{-- either via the section defined in the YAML, or via $contents --}}
	<?php $section = $block->section ?: 'content'; ?>

	{{-- Block will be accesible in partial via the $page variable --}}
	{{-- Hashes in YAML frontmatter are parsed to arrays, not objects  --}}
	@include( $block->extends, [
		'page' => $page->merge($block),
		$section => $block->getContent()
	])

	{{-- Set `showOnly: true` and `weight: 0` in YAML to ease development --}}
	<?php if( !is_null($block->showOnly) && $block->showOnly ) break; ?>

@endforeach


{{-- Artwork contents go into script tags to be used as lightbox templates --}}
{{-- http://stackoverflow.com/questions/4912586/explanation-of-script-type-text-template-script --}}
@foreach ($artworks as $artwork)

	<script id="artwork-{{ $artwork->id }}" type="text/template">
	{!! $artwork->getContent() !!}
	</script>

@endforeach


{{-- main.js manages this magic --}}
<div id="lightbox"/>

	<a href="javascript:Lightbox.unload()" class="btn-close">

		<svg width="40px" height="40px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			<!-- Generator: Sketch 43.2 (39069) - http://www.bohemiancoding.com/sketch -->
			<desc>Created with Sketch.</desc>
			<defs></defs>
			<g id="Welcome" stroke="none" stroke-width="1" fill="white" fill-rule="evenodd">
				<g id="Desktop-Copy-6" transform="translate(-974.000000, -12.000000)" stroke="#979797">
					<g id="Group-Copy-2" transform="translate(975.000000, 13.000000)">
						<circle id="Oval-3" stroke-opacity="0.500283062" cx="19" cy="19" r="19"></circle>
						<path d="M11.6451613,11.6451613 L26.3548387,26.3548387" id="Line" stroke-linecap="square"></path>
						<path d="M11.6451613,11.6451613 L26.3548387,26.3548387" id="Line-Copy" stroke-linecap="square" transform="translate(19.000000, 19.000000) scale(-1, 1) translate(-19.000000, -19.000000) "></path>
					</g>
				</g>
			</g>
		</svg>

	</a>

	<div id="viewer">
		{{-- OpenSeadragon viewer --}}
	</div>

	<div id="content">
		{{-- Content of the _artworks will be inserted here --}}
	</div>

</div>


@endsection
