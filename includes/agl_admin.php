<div class="wrap">
	<h1>Usage</h1>
	<ul>
		<li><strong>Elementor</strong> - Element > Advanced Tab > AnimateGL</li>
		<li><strong>Gutenberg</strong> - Block > AnimateGL</li>
		<li><strong>Other</strong> - Add CSS class of the animation to any element</li>
	</ul>

   <h1>Default Entrance animation</h1>
   <p>The default Entrance animation that can be customized with Live editor. Add AnimateGL animation to image by adding CSS class <code>agl</code>.</p>
   <div class="image-section">
   		<img id="agl-default-preview" class="agl" src="<?php echo esc_url( $this->plugin_dir_url . 'img/cyber4.jpg' ); ?>">
	</div>


	<h1>Entrance presets</h1>
	<p>Select animation to preview it. Add anumation to any element on the page by adding the CSS class of the animation.</p>
	<p>
		<select name="" id="agl-name">
			<option value="fadeCSS">Fade</option>
			<option value="zoomInCSS">Zoom In</option>
			<option value="zoomOutCSS">Zoom Out</option>
			<option value="slideCSS">Slide</option>
			<option value="wipeCSS">Wipe</option>
			<option value="fade">Fade WebGL</option>
			<option value="bend">Bend WebGL</option>
			<option value="slide">Slide WebGL</option>
			<option value="stretch">Stretch WebGL</option>
			<option value="wipe">Wipe WebGL</option>
			<option value="zoomIn">Zoom In WebGL</option>
			<option value="flip">Flip WebGL</option>
			<option value="peel">Peel WebGL</option>
		</select>
		<label for="agl-direction">Direction</label>
		<select name="" id="agl-direction">
			<option value="">Default</option>
			<option value="Left">Left</option>
			<option value="Right">Right</option>
			<option value="Up">Up</option>
			<option value="Down">Down</option>
		</select>
		<span class="button button-secondary agl-play">Play</span>
		<span>CSS Class: </span>
		<code id="agl-css-class">agl agl-fadeCSS</code>


	</p>

	<img id="agl-preset-preview" class="preset agl agl-fadeCSS" src="<?php echo esc_url( $this->plugin_dir_url . 'img/cyber4.jpg' ); ?>">

</div>
<?php

if (!wp_script_is('agl-admin', 'enqueued')) 
	wp_enqueue_script("agl-admin");
if (!wp_script_is('agl-editor', 'enqueued')) 
	wp_enqueue_script( "agl-editor"); 
if (!wp_style_is('agl-admin', 'enqueued')) 
	wp_enqueue_style("agl-admin");

$agl_nonce = wp_create_nonce( "agl_nonce");
wp_localize_script( 'agl-admin', 'agl_localize_script', array($agl_nonce, esc_js(get_option("agl_json"))) );