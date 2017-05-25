<!-- Sticky Header -->
<div id="header-placeholder" role="presentation"></div>
<div id="sub-header-placeholder" role="presentation"></div>

<header role="banner">
	<div class="container">

		<div class="header-left">

			<a href="http://www.artic.edu/">
				<img src="images/logo.svg" alt="Art Institute of Chicago">
			</a>

			<span class="exhibit">
				<span class="title">Gauguin</span>
			</span>

		</div>

		<div class="header-right">

			<span class="dates">
				<span class="start">{{ $page->dates['start'] }}</span>
				<span class="dash">–</span>
				<span class="end">{{ $page->dates['end'] }}</span>
			</span>

			<span class="buttons" role="menu">
				<a class="btn btn-small btn-member" href="https://sales.artic.edu/memberships" role="menuitem">Become a Member</a>
				<a class="btn btn-small btn-ticket" href="https://sales.artic.edu/admissiondate" role="menuitem"><span class="verb">Buy </span>Tickets</a>
			</span>

		</div>

	</div>


	@if ($page->subHeader)
		<div class="sub-header">
			{{ $page->subHeader }}
		</div>
	@endif

</header>
