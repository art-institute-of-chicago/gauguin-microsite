{{-- Artwork contents go into script tags to be used as lightbox templates --}}
{{-- http://stackoverflow.com/questions/4912586/explanation-of-script-type-text-template-script --}}
@foreach ($artworks as $artwork)

	<script id="artwork-{{ $artwork->id }}" type="text/template">

		<a href="javascript:Lightbox.expand()" class="btn-expand-invisible"></a>

		<p id="lightbox-start" tabindex="0">
			{{ $artwork->artistName}}<br/>
			{{ $artwork->artistPlaceDates}}
		</p>

		<h1 tabindex="0">{{ $artwork->title }}</h1>

		<p tabindex="0">
			{{ $artwork->date }}<br/>
			{{ $artwork->materialDimensions }}<br/>
			{{ $artwork->creditAccessionNumber }}
		</p>

		<blockquote tabindex="0">
			{!! $artwork->getContent() !!}
		</blockquote>

		<p><a href="{{ $artwork->link }}" class="collection">See in our Collection</a></p>

		<a href="javascript:Lightbox.expand()" class="btn-expand btn-show">
			<span>Read More</span>
		</a>

		<a href="javascript:Lightbox.expand()" class="btn-expand btn-hide">
			<span>Hide</span>
		</a>

	</script>

@endforeach


{{-- main.js manages this magic --}}
<div id="lightbox" role="dialog" aria-labelledby="lightbox-start">

	<a href="javascript:Lightbox.unload()" class="btn-close">

		<svg width="40px" height="40px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			<desc>Close lightbox</desc>
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

	{{-- This is in a separate div b/c it needs to be relative to wrapper  --}}
	<div id="content">
		{{-- Content of the _artworks will be inserted here --}}
		{{-- Don't hard-code any other elements inside here, they'll be replaced --}}
		{{-- Instead, put them in the <script> tag in @foreach $artworks --}}
	</div>

</div>
