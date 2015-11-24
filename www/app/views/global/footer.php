<? /*
	// Analytics - uncomment and put in our #
	<script>
	    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	    s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>
*/ ?>

    <? if (!empty($site_js)) : ?>
        <? foreach ($site_js as $js) : ?>
            <script type="text/javascript" src="<?=base_url() . $js;?>"></script>
        <? endforeach; ?>
    <? endif; ?>

    <!-- Scripts -->
    <script type="text/javascript">
    var require = {
      config: {
        'views/baseView':{
          page: "<?= $bodyClass; ?>"
        }
      }
    };
    </script>

    <? // RequireJS to handle js dependencies and client-side scripting ?>
    <script data-main="/js/main" src="<?=base_url();?>js/libs/require.js"></script>
</body>
</html>
