<?php
/**
 * Enquiry form. Included by the home page ($compact_form = true) and by
 * /contact-us/ (full version). Always posts to /contact-us/ so a single
 * handler validates, stores, and renders the result message.
 *
 * $compact_form  bool   render the short version
 * $form_status   string 'ok' | 'error' | '' (set by the contact page handler)
 * $form_errors   array  field => message
 * $form_old      array  previously submitted values
 */
$compact_form = $compact_form ?? false;
$form_status  = $form_status  ?? '';
$form_errors  = $form_errors  ?? [];
$form_old     = $form_old     ?? [];

$old = function (string $k, string $d = '') use ($form_old) {
    return e($form_old[$k] ?? $d);
};

$budgets = ['Under $500', '$500–$1,000', '$1,000–$2,500', '$2,500–$5,000', '$5,000+', 'Prefer to discuss'];

$service_groups = [
    'Link Building'   => ['Guest Posts', 'Link Insertions / Niche Edits', 'International & Multilingual Outreach'],
    'SEO'             => ['Technical SEO', 'On-Page SEO & Content Optimisation', 'Local SEO'],
    'Digital PR'      => ['Digital PR Campaigns', 'Brand & Unlinked Mention Outreach', 'Press & Media Outreach'],
    'AI Visibility'   => ['GEO (Generative Engine Optimisation)', 'AIO Content Structuring', 'AI Search Monitoring & Reporting'],
    'Content Marketing' => ['SEO Content Writing', 'Content Strategy & Topical Authority', 'Blog Management'],
    'PPC & Paid Media'  => ['Google Ads', 'Meta / Social Ads', 'Paid Search Audits'],
];

$sources = ['Referral', 'Event / Expo', 'Facebook/Instagram Ads', 'Google Ads', 'Google Search (SEO)',
            'LinkedIn', 'Podcast', 'Social Media', 'Webinar', 'ChatGPT / LLM / AI Tool', 'Founder content', 'N/A'];

$picked = (array) ($form_old['services'] ?? []);
?>
<div class="form-card" id="form">
  <?php if ($form_status === 'ok'): ?>
    <div class="alert alert-ok"><?= icon('check') ?><span>Great! We&rsquo;ve received your information and will reply within one working day.</span></div>
  <?php elseif ($form_status === 'store_failed'): ?>
    <div class="alert alert-err"><?= icon('plus') ?><span>Something went wrong at our end and your message was not saved. Please email us directly at <a href="mailto:<?= e(SITE_EMAIL) ?>" style="color:inherit;text-decoration:underline"><?= e(SITE_EMAIL) ?></a>.</span></div>
  <?php elseif ($form_status === 'email_failed'): ?>
    <div class="alert alert-err"><?= icon('mail') ?><span>Your enquiry was saved, but we couldn&rsquo;t send the email notification. Please email us directly at <a href="mailto:<?= e(SITE_EMAIL) ?>" style="color:inherit;text-decoration:underline"><?= e(SITE_EMAIL) ?></a>.</span></div>
  <?php elseif ($form_status === 'error'): ?>
    <div class="alert alert-err"><?= icon('plus') ?><span>We couldn&rsquo;t process your submission. Please check the highlighted fields and retry.</span></div>
  <?php endif; ?>

  <h3 style="font-size:1.5rem"><?= $compact_form ? 'Let&rsquo;s Grow Your Rankings' : 'Tell Us About Your Project' ?></h3>
  <p style="font-size:.96rem;color:var(--muted);margin-bottom:26px">Share a few details and we&rsquo;ll come back with a straight answer on scope, timing, and cost.</p>

  <form method="post" action="<?= url('contact-us') ?>#form" novalidate>
    <input type="hidden" name="lm_form" value="1">
    <!-- honeypot: bots fill this, people never see it -->
    <div style="position:absolute;left:-9999px" aria-hidden="true">
      <label>Company website<input type="text" name="lm_website" tabindex="-1" autocomplete="off"></label>
    </div>

    <div class="field-row">
      <div class="field">
        <label for="f-first">First name <span class="req">*</span></label>
        <input id="f-first" type="text" name="first_name" value="<?= $old('first_name') ?>" required>
      </div>
      <div class="field">
        <label for="f-last">Last name <span class="req">*</span></label>
        <input id="f-last" type="text" name="last_name" value="<?= $old('last_name') ?>" required>
      </div>
    </div>

    <div class="field">
      <label for="f-email">Work email <span class="req">*</span></label>
      <input id="f-email" type="email" name="email" value="<?= $old('email') ?>" required
             style="<?= isset($form_errors['email']) ? 'border-color:var(--cyan-700)' : '' ?>">
      <?php if (isset($form_errors['email'])): ?><p class="form-note" style="color:var(--cyan-700)"><?= e($form_errors['email']) ?></p><?php endif; ?>
    </div>

    <div class="field">
      <label for="f-budget">Monthly budget</label>
      <select id="f-budget" name="budget">
        <option value="">Select a range</option>
        <?php foreach ($budgets as $b): ?>
        <option value="<?= e($b) ?>"<?= ($form_old['budget'] ?? '') === $b ? ' selected' : '' ?>><?= e($b) ?></option>
        <?php endforeach; ?>
      </select>
    </div>

    <?php if (!$compact_form): ?>
    <div class="field">
      <label>What are you interested in?</label>
      <?php foreach ($service_groups as $group => $items): ?>
        <p style="font-family:var(--font-head);font-size:.76rem;letter-spacing:.12em;text-transform:uppercase;color:var(--blue-600);margin:16px 0 8px"><?= e($group) ?></p>
        <div class="choice-grid">
          <?php foreach ($items as $s): ?>
          <label class="choice">
            <input type="checkbox" name="services[]" value="<?= e($s) ?>"<?= in_array($s, $picked, true) ? ' checked' : '' ?>>
            <span><?= e($s) ?></span>
          </label>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="field" style="margin-top:24px">
      <label for="f-source">How did you hear about us?</label>
      <select id="f-source" name="source">
        <option value="">Select an option</option>
        <?php foreach ($sources as $s): ?>
        <option value="<?= e($s) ?>"<?= ($form_old['source'] ?? '') === $s ? ' selected' : '' ?>><?= e($s) ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <?php else: ?>
    <div class="field">
      <label for="f-service">Primary interest</label>
      <select id="f-service" name="services[]">
        <option value="">Select a service</option>
        <?php foreach ($service_groups as $group => $items): ?>
        <optgroup label="<?= e($group) ?>">
          <?php foreach ($items as $s): ?>
          <option value="<?= e($s) ?>"<?= in_array($s, $picked, true) ? ' selected' : '' ?>><?= e($s) ?></option>
          <?php endforeach; ?>
        </optgroup>
        <?php endforeach; ?>
      </select>
    </div>
    <?php endif; ?>

    <div class="field">
      <label for="f-msg">Message <span class="req">*</span></label>
      <textarea id="f-msg" name="message" placeholder="Your website, target markets, and what you are trying to fix." required><?= $old('message') ?></textarea>
    </div>

    <button class="btn btn-primary btn-lg" type="submit" style="width:100%">Send Enquiry <?= icon('arrow') ?></button>
    <p class="form-note">We reply within one working day. No sales sequences, no shared data &mdash; see our <a href="<?= url('privacy-policy') ?>" style="color:var(--blue-600);font-weight:600">Privacy Policy</a>.</p>
  </form>
</div>
