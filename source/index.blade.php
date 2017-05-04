@extends('_layouts.master')

@section('body')

<!-- Sticky Header -->
<div id="header-placeholder"></div>

<header>

	<div class="header-left">

		<a href="http://www.artic.edu/">
			<img src="images/logo.svg">
		</a>

		<span class="exhibit">
			<span class="title">Gauguin</span>
			<span class="pipe">|</span>
			<span class="subtitle">Artist as Alchemist</span>
		</span>

	</div>

	<div class="header-right">

		<span class="dates">
			<span class="start">June 25</span>
			<span class="dash">–</span>
			<span class="end">Sept 10</span>
		</span>

		<span class="buttons">
			<a class="btn btn-small btn-member" href="#" >Become a Member</a>
			<a class="btn btn-small btn-ticket" href="#" ><span class="verb">Get </span>Tickets</a>
		</span>

	</div>

</header>

@endsection
