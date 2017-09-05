<?php
/*
Plugin Name: Simple Google Analytics Plugin
Plugin URI: http://lpunnett.co.uk
Description: 
Author: Luke Punnett
Version: 1.0
 */


// the function to insert the google analytics tracking code
function ga_insert_func() { ?>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'xxxxxxxx', 'auto');
  ga('send', 'pageview');

</script>
<?php }
add_action( 'wp_head', 'ga_insert_func', 10 );
