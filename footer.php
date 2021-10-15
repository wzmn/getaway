<script type="text/javascript">
	 document.addEventListener('DOMContentLoaded', function(){
		let countries = [
			{title:"North America", link:"/destinations/north-america", left: '70px', top: '140px'},
			{title:"Europe", link:"/destinations/europe", left: '240px', top: '140px'},
			{title:"Caribbean", link:'/destinations/caribbean', left: '130px', top: '190px'},
			{title:"Central & South America", link:'/destinations/central-and-south-america', left: '80px', top: '230px'},
			{title:"Polar Regions", link:'/destinations/polar-regions', left: '180px', top: '290px'},
			{title:"Africa", link:'/destinations/africa', left: '245px', top: '200px'},
			{title:"Arabia", link:'/destinations/arabia', left: '280px', top: '180px'},
			{title:"Asia", link:'/destinations/asia', left: '350px', top: '120px'},
			{title:"Indian Ocean", link:'/destinations/indian-ocean', left: '300px', top: '230px'},
			{title:"Australia & South Pacific", link:'/destinations/australia-and-south-pacific', left: '400px', top: '250px'}
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

