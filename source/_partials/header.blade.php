<!-- Sticky Header -->
<div id="header-placeholder"></div>

<header>
	<div class="container">

		<div class="header-left">

			<a href="http://www.artic.edu/">
				<img src="images/logo.svg" alt="Art Institute of Chicago">
			</a>

			<span class="exhibit">
				<span class="title" tabindex="0">Gauguin</span>
				<span class="pipe" tabindex="-1">|</span>
				<span class="subtitle" tabindex="0">Artist as Alchemist</span>
			</span>

		</div>

		<div class="header-right">

			<span class="dates">
				<span class="start"tabindex="0">{{ $page->dates['start'] }}</span>
				<span class="dash" tabindex="-1">–</span>
				<span class="end"tabindex="0">{{ $page->dates['end'] }}</span>
			</span>

			<span class="buttons">
				<a class="btn btn-small btn-member" href="https://sales.artic.edu/memberships">Become a Member</a>
				<a class="btn btn-small btn-ticket" href="https://sales.artic.edu/admissiondate"><span class="verb">Get </span>Tickets</a>
			</span>

		</div>

	</div>
</header>