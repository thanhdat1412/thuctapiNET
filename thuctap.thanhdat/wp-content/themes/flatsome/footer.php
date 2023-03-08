<?php
/**
 * The template for displaying the footer.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

global $flatsome_opt;
?>

</main>

<footer id="footer" class="footer-wrapper">

	<?php do_action('flatsome_footer'); ?>

</footer>

</div>

<?php wp_footer(); ?>
<style>
.float-contact {
  position: fixed;
  bottom: 20px;
  left: 20px;
  z-index: 99999;
}
.chat-zalo, .chat-facebook, .call-hotline {
  display: block;
  margin-bottom: 6px;
  line-height: 0;
}
</style>
<div class="float-contact">
<div class="call-hotline">
<a href="tel:0903718578"><img title="Call Hotline" src="http://thanhdat.store/wp-content/uploads/2023/03/22-220966_phone-icon-png-red-icon-in-thoi-png-removebg-preview.png" alt="phone-icon" width="40" height="40" /></a>
</div>
<div class="chat-zalo">
<a href="https://zalo.me/0903718578" target="_blank"><img title="Chat Zalo" src="http://thanhdat.store/wp-content/uploads/2023/03/90b38b273b6404fc1cd6e102c605bb7d-removebg-preview.png" alt="zalo-icon" width="40" height="40" /></a>
</div>
<div class="chat-facebook">
<a href="https://www.facebook.com/profile.php?id=100066508148846" target="_blank"><img title="Chat Facebook" src="http://thanhdat.store/wp-content/uploads/2023/03/messenger-512.webp" alt="facebook-icon" width="40" height="40" /></a>
</div>
</div>
</body>
</html>
