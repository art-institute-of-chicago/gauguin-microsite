@extends('_layouts.master')

@section('body')

{{-- Define sort order in config.php --}}
@foreach ($blocks as $block)

	{{-- Skip of the block if hide is true --}}
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
	<?php if( !is_null($block->showOnly) && $block->showOnly ) break; ?>

@endforeach

@endsection
