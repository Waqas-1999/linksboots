</main>

<footer class="site-footer">
  <div class="wrap">

    <div class="newsletter reveal">
      <div>
        <h4>Subscribe to our newsletter</h4>
        <p>Search and AI-visibility changes that actually affect your rankings. One email a month, no filler.</p>
      </div>
      <form action="<?= url('contact-us') ?>" method="get">
        <input type="email" name="email" placeholder="Your work email" aria-label="Your work email" required>
        <button class="btn btn-primary" type="submit">Subscribe <?= icon('arrow') ?></button>
      </form>
    </div>

    <div class="footer-top">
      <div class="footer-brand">
        <?= brand_lockup() ?>
        <p><?= e(SITE_DESC) ?></p>
        <div class="socials">
          <a href="<?= e(SOCIAL_LINKEDIN) ?>" aria-label="LinkedIn"><?= icon('linkedin') ?></a>
          <a href="<?= e(SOCIAL_FACEBOOK) ?>" aria-label="Facebook"><?= icon('facebook') ?></a>
          <a href="<?= e(SOCIAL_INSTAGRAM) ?>" aria-label="Instagram"><?= icon('instagram') ?></a>
          <a href="<?= e(SOCIAL_TIKTOK) ?>" aria-label="TikTok"><?= icon('tiktok') ?></a>
          <a href="<?= e(SOCIAL_YOUTUBE) ?>" aria-label="YouTube"><?= icon('youtube') ?></a>
        </div>
      </div>

      <div class="footer-col">
        <h5>Services</h5>
        <ul>
          <li><a href="<?= url('seo-services') ?>">SEO</a></li>
          <li><a href="<?= url('ai-visibility') ?>">AI Visibility</a></li>
          <li><a href="<?= url('digital-pr') ?>">Digital PR</a></li>
          <li><a href="<?= url('link-building') ?>">Link Building</a></li>
          <li><a href="<?= url('paid-media') ?>">PPC &amp; Paid Media</a></li>
          <li><a href="<?= url('content-marketing') ?>">Content Creation</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h5>Resources</h5>
        <ul>
          <li><a href="<?= url('blog') ?>">Blog</a></li>
          <li><a href="<?= url('about-us') ?>">About Us</a></li>
          <li><a href="<?= url('services') ?>">Services</a></li>
          <li><a href="<?= e(BOOKING_URL) ?>">Book a Call</a></li>
          <li><a href="<?= url('contact-us') ?>">Contact Us</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h5>Contacts</h5>
        <ul class="footer-contact">
          <li><?= icon('pin') ?><span><?= e(SITE_ADDRESS) ?></span></li>
          <li><?= icon('phone') ?><a href="tel:<?= e(SITE_PHONE_HREF) ?>"><?= e(SITE_PHONE) ?></a></li>
          <li><?= icon('mail') ?><a href="mailto:<?= e(SITE_EMAIL) ?>"><?= e(SITE_EMAIL) ?></a></li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <p style="margin:0">Copyright <?= date('Y') ?> <?= e(SITE_NAME_CAPS) ?>. All Rights Reserved</p>
      <nav aria-label="Legal">
        <a href="<?= url('terms-conditions') ?>">Terms of Use</a>
        <a href="<?= url('privacy-policy') ?>">Privacy Policy</a>
      </nav>
    </div>
  </div>
</footer>

<script src="<?= asset('js/main.js') ?>" defer></script>
<script src="<?= asset('js/hero-slider.js') ?>" defer></script>
<!-- Module: three.js itself is only fetched once the hero canvas is confirmed present. -->
<script src="<?= asset('js/hero-bg.js') ?>" type="module"></script>
</body>
</html>
