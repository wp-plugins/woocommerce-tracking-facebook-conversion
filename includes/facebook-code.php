<!-- Facebook Conversion Code -->
<script>(function() {
    var _fbq = window._fbq || (window._fbq = []);
    if (!_fbq.loaded) {
        var fbds = document.createElement('script');
        fbds.async = true;
        fbds.src = '//connect.facebook.net/en_US/fbds.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(fbds, s);
        _fbq.loaded = true;
    }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '<?php echo $options["facebook_code"]; ?>', {'value': '<?php echo $order->get_total(); ?>','currency':'<?php echo $options["facebook_currency"]; ?>'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=<?php echo $options['facebook_code']; ?>&amp;cd[value]='<?php echo $order->get_total(); ?>'&amp;cd[currency]=<?php echo $options['facebook_currency']; ?>&amp;noscript=1" /></noscript>