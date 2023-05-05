<h1>Tabs</h1>
<?php sc1(); ?>
<div>
	<div class="tabs">
		<ul class="tabs-list">
			<li class="tabel tabactive" data-tab="tab1">Tab1</li>
			<li class="tabel" data-tab="tab2">Tab2</li>
			<li class="tabel" data-tab="tab3">Tab3</li>
		</ul>
		<div class="tab-contents">
			<div class="tab-content tabactive" id="tab1">
				Tab1 Content
			</div>
			<div class="tab-content" id="tab2">
				Tab2 Content
			</div>
			<div class="tab-content" id="tab3">
				Tab3 Content
			</div>
		</div>
	</div>
</div>
<script>
	// Add click event to Tab
	var tabElements = document.getElementsByClassName("tabel");
	for (var i = 0; i < tabElements.length; i++) {
		tabElements[i].addEventListener('click', tabClick, false);
	}

	function tabClick(evt) {
		// Clicked element
		var el = evt.currentTarget;

		// Read clicked tab content <div > id
		var tab_contentid = el.getAttribute('data-tab');

		// Remove tabactive class from tabel class element
		var elements = document.getElementsByClassName("tabel");
		for (var i = 0; i < elements.length; i++) {
			elements[i].classList.remove('tabactive');
		}

		// Remove tabactive class from tab-content class element
		var elements = document.getElementsByClassName("tab-content");
		for (var i = 0; i < elements.length; i++) {
			elements[i].classList.remove('tabactive');
		}

		// Add tabactive class to clicked tab and content
		el.classList.add('tabactive');
		document.getElementById(tab_contentid).classList.add('tabactive');
	}
</script>
<style>
	/* Tab container */
	.tabs {
		width: 60%;
		height: auto;
		margin: 0 auto;
	}

	/* Tab list item */
	.tabs .tabs-list {
		list-style: none;
		margin: 0px;
		padding: 0px;
	}

	.tabs .tabs-list li {
		width: 100px;
		float: left;
		margin: 0px;
		margin-right: 2px;
		padding: 10px 5px;
		text-align: center;
		background-color: #D7DBDD;
		border-radius: 3px;
	}

	.tabs .tabs-list li:hover {
		cursor: pointer;
	}

	/* Tab content section */
	.tabs .tab-contents .tab-content {
		display: none;
		width: 96%;
		min-height: 250px;
		height: auto;
		border-radius: 3px;
		padding: 20px 15px;
		background-color: #F7F9F9;
		color: darkslategray;
		clear: both;
	}

	/* When active state */
	.tabactive {
		display: block !important;
	}

	.tabs .tabs-list li.tabactive {
		background-color: #F7F9F9 !important;
	}

	.tabactive li {
		color: black !important;
	}

	/* media query */
	@media screen and (max-width:680px) {
		.tabs {
			margin: 0;
			width: 96%;
		}
	}
</style>
<?php sc2(); ?>