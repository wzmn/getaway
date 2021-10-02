<script type="text/javascript">
	 document.addEventListener('DOMContentLoaded', function(){
		let countries = [
			{title:"North America", link:"#", left: '77px', top: '190px'},
			{title:"Europe", link:"#", left: '297px', top: '170px'},
			{title:"Caribbean", link:'#', left: '157px', top: '240px'},
			{title:"Central & South America", link:'#', left: '100px', top: '310px'},
			{title:"Polar Regions", link:'#', left: '250px', top: '380px'},
			{title:"Africa", link:'#', left: '310px', top: '260px'},
			{title:"Arabia", link:'#', left: '360px', top: '220px'},
			{title:"Asia", link:'#', left: '460px', top: '150px'},
			{title:"Indian Ocean", link:'#', left: '400px', top: '310px'},
			{title:"Australia & South Pacific", link:'#', left: '500px', top: '190px'}
		];
		let dropdown = document.querySelector('.no_link + div > .inner');
		let img = document.createElement('img');
		let div = document.createElement('div');
		img.setAttribute('src', 'https://luxtripper-images.b-cdn.net/aHR0cHM6Ly9sdXh0cmlwcGVyaW1hZ2VzLmJsb2IuY29yZS53aW5kb3dzLm5ldC9zdGF0aWMvbWFwLWRhcmtfdmt0ZG5y.png');
		div.classList.add('map-image-container');
		div.prepend(img);
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
			div.appendChild(span);
		})
		dropdown.appendChild(div);
	}) 
</script>

<?php do_action( 'getaway_qodef_get_footer_template' );

global $getaway_qodef_toolbar;
if(isset($getaway_qodef_toolbar)) include("toolbar.php");