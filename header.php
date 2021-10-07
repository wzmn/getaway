<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php
	/**
	 * getaway_qodef_header_meta hook
	 *
	 * @see getaway_qodef_header_meta() - hooked with 10
	 * @see getaway_qodef_user_scalable_meta - hooked with 10
	 * @see qodef_core_set_open_graph_meta - hooked with 10
	 */
	do_action( 'getaway_qodef_header_meta' );
	
	wp_head(); ?>
	<style type="text/css">
		.CoronaBanner__Container {
		    position: fixed;
		    z-index: 109;
		    background: #ffc132;
		    right: 10px;
		    top: 130px;
		    height: 55px;
			border-radius: 10px;
			box-shadow:0px 0px 5px 0px #463f3f;
		}
		.Padlock__Container svg {
			width: 30px;
			position: absolute;
		}
		.CoronaBanner__NavigateClickContainer {
			display: flex;
			height: 100%;
		}
		.CoronaBanner__NavigateClickContainer > div {
		    padding: 0 5px;
		    height: 100%;
		    align-items: center;
		    justify-content: center;
		    display: flex;
		    flex-flow: row wrap;
		    max-width: 200px;
		}
		.CoronaBanner__PreText {
			font-size: 12px;
		    font-weight: 600;
		    opacity: 0.5;
		    margin: 0px;
		    color: black;
		}
		.CoronaBanner__Text {
			font-weight: 800;
		    opacity: 0.75;
		    margin: -6px 0px 0px;
		    font-size: 16px;
		    align-self: flex-start;
		    color: black;
		}
		.CoronaBanner__NavigateClickContainer .CoronaBanner__CloseClickContainer {
		    align-content: flex-start;
		    padding-top: 10px;
		    cursor: pointer;
		}
	</style>
</head>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
	<?php
	/**
	 * getaway_qodef_after_body_tag hook
	 *
	 * @see getaway_qodef_get_side_area() - hooked with 10
	 * @see getaway_qodef_smooth_page_transitions() - hooked with 10
	 */
	do_action( 'getaway_qodef_after_body_tag' ); ?>

    <div class="qodef-wrapper">
        <div class="qodef-wrapper-inner">
        	<?php if (!is_page('coming-soon')): ?>
            <?php getaway_qodef_get_header(); ?>
        	<?php endif; ?>
	
	        <?php
	        /**
	         * getaway_qodef_after_header_area hook
	         *
	         * @see getaway_qodef_back_to_top_button() - hooked with 10
	         * @see getaway_qodef_get_full_screen_menu() - hooked with 10
	         */
	        do_action( 'getaway_qodef_after_header_area' ); ?>
        	<?php if (!is_page('coming-soon')): ?>

	        <div class="CoronaBanner__Container">
	        	<div href="/legal/page/coronavirus" class="CoronaBanner__NavigateClickContainer">
	        		<div class="CoronaBanner__PadlockContainer-sc-10wyxet-3 iUfsYp">
	        			<div class="Padlock__Container CoronaBanner__StyledPadlock">
	        				<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAA2CAIAAADVgifvAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAALeSURBVFhH7Zd/UxMxEIbvC9n26vdWVH6KbeHLKCgoKMgUW/XppKZ7b3JpcrT1H2aecaSXzXu72d3sVbNx/ed8+F+o5O9d8qy9e7prP47qu5PBt4P+l7e96/3+w+lgNilL2y7a87Ph1/3+x1cvQi73erzNdFT/PlOrkGJt/Lt4rZJRbg766Tco0/75fiACaTgOgiSbeAq0cSLTY0tCvkD7/iTuNGd89a7Hv/K7hwyQrRwF2nggmyJpc5v/fz8afIrFJloCudoEXLZDWNY4qL0wBreHEddztUlv2S5RzeFiYiZroFWbBMEDcJlyc9go6OheltB1WQBxbUJkzTjCz28ae3GuYiJwInY95rIAItpiJlzs9ag0Cl2sBMk4wiYLQLWnH2prk4bOytHOJ40dgGOSlWwra0C1w0LKhGNCwDXRMNeizbWhHRZSB8gycaAtMRvaZLW12RTRw4aG9u1R/GbcCLyBzKUNbVm9DWyBrLTD5NwSPudX2g+nBYdNVpMcWCXujzb8tbbS5idZ1EZ4i/Ae+fK0Jme10pYVCaKNIv/VwZkstQmdPE7gTAQiL8vauP4XtqX2fckg5kyEfL/RciZL7fT9ITCWOysPYcsf5XyVL7XlcRpk7OBAcbaN61G84UL7cVzcSt1AAcSgaHjlLZ0hLLR/HBccNti7oUgYuOK87UI7Md5G8UNLh7vHXvZVh3vT1zcBl0dr8cJQsZE8Xos3LkoxkEm5Kv3Esskij9YiDbHK70cOf9gdAiaTU1XUTYEu5AqsNOBktBWGRZ6X7kJdlZYGUMlWGBba+NF5PM2HDmaFYaHtmI7qoq5eihfyrLQ9v8b13fHgsvkR9ETCcQMi2h7Sks61keHV35uWlLaFXkgrLhpOLOF3E+RqW7iA8eMqOz2jAYcu2hYOheJJlBwzJAkkVo6nantIDjqdfLjjsZ0yhI1pW2gY+DqLnbFlK9qZPGvvnmo+eSk/7Yjz4V+NQQ55QyrnhgAAAABJRU5ErkJggg==">
	        			</div>
	        		</div>
	        		<div class="CoronaBanner__TextContainer">
	        			<a href="<?php echo site_url('/covid-19-protection'); ?>">
	        				<p class="CoronaBanner__PreText">Click here to read about our</p>
	        				<p class="CoronaBanner__Text">COVID-19 Protection</p>
	        			</a>
	        		</div>
		        	<div class="CoronaBanner__CloseClickContainer" onclick="jQuery(this.parentElement.parentElement).fadeOut();" onload="console.log(this)">
		        		<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="CoronaBanner__StyledCloseButton" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
		        			<path fill="none" stroke="#000" stroke-width="2" d="M3,3 L21,21 M3,21 L21,3"></path>
		        		</svg>
		        	</div>
	        	</div>
	        </div>
	        
        	<?php endif; ?>

            <div class="qodef-content" <?php getaway_qodef_content_elem_style_attr(); ?>>
                <div class="qodef-content-inner">


                	<?php wp_localize_script( 'map', 'wordpress', ['url' => get_stylesheet_directory_uri()] ); ?>