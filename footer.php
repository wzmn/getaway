<script type="text/javascript">
	 document.addEventListener('DOMContentLoaded', function(){
		let countries = [
			{title:"North America", link:"/destinations/north-america", left: '90px', top: '150px'},
			{title:"Europe", link:"/destinations/europe", left: '350px', top: '170px'},
			{title:"Caribbean", link:'/destinations/caribbean', left: '190px', top: '230px'},
			{title:"Central & South America", link:'/destinations/central-and-south-america', left: '150px', top: '300px'},
			{title:"Polar Regions", link:'/destinations/polar-regions', left: '280px', top: '390px'},
			{title:"Africa", link:'/destinations/africa', left: '375px', top: '240px'},
			{title:"Arabia", link:'/destinations/arabia', left: '430px', top: '220px'},
			{title:"Asia", link:'/destinations/asia', left: '540px', top: '110px'},
			{title:"Indian Ocean", link:'/destinations/indian-ocean', left: '4710px', top: '300px'},
			{title:"Australia & South Pacific", link:'/destinations/australia-and-south-pacific', left: '550px', top: '320px'}
		];
		let dropdowns = document.querySelectorAll('.no_link + div > .inner');
		
		let img = document.createElement('img');
		let map_div = document.createElement('div');

		/*let ul = document.querySelectorAll('.no_link + div > .inner ul');
		let span = document.createElement('span');
		let a = document.createElement('a');
		let li = document.createElement('li');
		span.innerText = "View All Destinations"
		a.appendChild(span);
		li.appendChild(a)
		ul.forEach( (item, index) => {
			item.prepend(li.cloneNode(true))
		})*/

		img.setAttribute('src', theme.theme_dir + 'map.webp');
		map_div.classList.add('map-image-container');
		map_div.prepend(img);
		countries.forEach((item, index)=>{
			let span = document.createElement('span');
			let a = document.createElement('a');
			span.setAttribute('data-order', index);
			span.style.left = item.left;
			span.style.top = item.top;
			a.setAttribute('href', item.link);
			a.innerText = item.title;
			a.classList.add('map-link')
			span.appendChild(a);
			map_div.appendChild(span);
		})
		dropdowns.forEach(function(item, index){
			item.appendChild(map_div.cloneNode(true))
		})


		
	}) 
</script>

<script type="text/javascript">
	document.addEventListener('DOMContentLoaded', function(){
		$ = jQuery;
		function qodefFixedButtonShowHide(){
			qodef.window.scroll(function () {
				var b = $(this).scrollTop();
				var c = $(this).height();
				var d;
				if (b > 0) { d = b + c / 2; } else { d = 1; }
				if (d < 1e3) { qodefFixedButtons('off'); } else { qodefFixedButtons('on'); }
			});
		}
		
		function qodefFixedButtons(a) {
			var b = $("#fixed-whatsapp, #fixed-call");
			b.removeClass('off on');
			if (a === 'on') { b.addClass('on'); } else { b.addClass('off'); }
		}
		qodefFixedButtonShowHide();		
	})
</script>
<?php do_action( 'getaway_qodef_get_footer_template' );

global $getaway_qodef_toolbar;
if(isset($getaway_qodef_toolbar)) include("toolbar.php");

