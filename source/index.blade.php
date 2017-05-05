@extends('_layouts.master')

@section('body')

{{-- Define sort order in config.php --}}
@foreach ($blocks as $block)

	{{-- Block will be accesible in partial via the $block variable --}}
	{{-- Hashes in YAML fronmatter are parsed to arrays, not objects  --}}
	@include( $block->extends, ['block' => $block, 'content' => $block->getContent()])

@endforeach

@endsection
