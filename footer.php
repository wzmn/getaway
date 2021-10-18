<script type="text/javascript">
	 document.addEventListener('DOMContentLoaded', function(){
		let countries = [
			{title:"North America", link:"/destinations/north-america", left: '90px', top: '210px'},
			{title:"Europe", link:"/destinations/europe", left: '350px', top: '230px'},
			{title:"Caribbean", link:'/destinations/caribbean', left: '190px', top: '290px'},
			{title:"Central & South America", link:'/destinations/central-and-south-america', left: '150px', top: '360px'},
			{title:"Polar Regions", link:'/destinations/polar-regions', left: '280px', top: '450px'},
			{title:"Africa", link:'/destinations/africa', left: '375px', top: '300px'},
			{title:"Arabia", link:'/destinations/arabia', left: '430px', top: '280px'},
			{title:"Asia", link:'/destinations/asia', left: '540px', top: '170px'},
			{title:"Indian Ocean", link:'/destinations/indian-ocean', left: '4710px', top: '360px'},
			{title:"Australia & South Pacific", link:'/destinations/australia-and-south-pacific', left: '550px', top: '380px'}
		];
		let dropdowns = document.querySelectorAll('.no_link + div > .inner');
		
		let img = document.createElement('img');
		let map_div = document.createElement('div');
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
<?php do_action( 'getaway_qodef_get_footer_template' );

global $getaway_qodef_toolbar;
if(isset($getaway_qodef_toolbar)) include("toolbar.php");

