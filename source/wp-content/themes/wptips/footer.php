</div>
<footer>

    <!-- Google Analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-84730403-1', 'auto');
      ga('send', 'pageview');

    </script>
    <!-- End Google Analytics -->

<a name="subscribe"></a>
<!-- Begin MailChimp Signup Form -->
<link href="http://cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="http://rodrigodonini.us10.list-manage.com/subscribe/post?u=97230331bf4b0cc3499c655b3&amp;id=296f2c3a89" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL"><?php _e('Subscribe to receive tips by email!');?></label>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="E-mail address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_97230331bf4b0cc3499c655b3_296f2c3a89" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->

  <? 
  $args = array(
      'container' => 'nav',
      'container_class' => 'menu',
      'echo' => true,
      'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'depth' => 0,
      'theme_location' => ''
      );
  wp_nav_menu( $args ); ?>
</footer>

<?php wp_footer(); ?>

</body>
</html>