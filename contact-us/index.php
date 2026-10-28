<?php
require_once __DIR__ . '/../includes/config.php';

/* --------------------------------------------------------- form handler */
$form_status = '';
$form_errors = [];
$form_old    = [];

if (($_SERVER['REQUEST_METHOD'] ?? '') === 'POST' && isset($_POST['lm_form'])) {

    /**
     * Browsers post UTF-8 because the page declares it, but a malformed or
     * hand-crafted request can carry invalid bytes. Those would make
     * json_encode() return false and silently lose the enquiry, so every
     * value is coerced to valid UTF-8 before it is used.
     */
    $clean = static function ($v): string {
        $v = trim((string) $v);
        if ($v !== '' && !mb_check_encoding($v, 'UTF-8')) {
            // Almost always a legacy client posting Windows-1252, which converts
            // cleanly. Only if that also fails do we substitute the bad bytes.
            $recovered = @mb_convert_encoding($v, 'UTF-8', 'Windows-1252');
            $v = ($recovered !== false && mb_check_encoding($recovered, 'UTF-8'))
                ? $recovered
                : mb_convert_encoding($v, 'UTF-8', 'UTF-8');
        }
        return mb_substr($v, 0, 5000);
    };

    $form_old = [
        'first_name' => $clean($_POST['first_name'] ?? ''),
        'last_name'  => $clean($_POST['last_name']  ?? ''),
        'email'      => $clean($_POST['email']      ?? ''),
        'budget'     => $clean($_POST['budget']     ?? ''),
        'source'     => $clean($_POST['source']     ?? ''),
        'message'    => $clean($_POST['message']    ?? ''),
        'services'   => array_values(array_filter(array_map($clean, (array)($_POST['services'] ?? [])))),
    ];

    if ($form_old['first_name'] === '') $form_errors['first_name'] = 'Please enter your first name.';
    if ($form_old['last_name']  === '') $form_errors['last_name']  = 'Please enter your last name.';
    if (!filter_var($form_old['email'], FILTER_VALIDATE_EMAIL)) $form_errors['email'] = 'Please enter a valid email address.';
    if (mb_strlen($form_old['message']) < 10) $form_errors['message'] = 'Please tell us a little more.';

    // Honeypot: silently accept so bots do not learn anything.
    $is_bot = trim((string)($_POST['lm_website'] ?? '')) !== '';

    if ($form_errors) {
        $form_status = 'error';
    } elseif ($is_bot) {
        $form_status = 'ok';   // accepted, deliberately not stored
        $form_old    = [];
    } else {
        $line = json_encode([
            'at'   => date('c'),
            'ip'   => $_SERVER['REMOTE_ADDR'] ?? '',
            'data' => $form_old,
        ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_INVALID_UTF8_SUBSTITUTE);

        // Never tell someone we received their enquiry unless it was stored.
        $stored = false;
        if ($line !== false) {
            $stored = @file_put_contents(
                __DIR__ . '/../data/enquiries.log',
                $line . PHP_EOL,
                FILE_APPEND | LOCK_EX
            ) !== false;
        }

        if ($stored) {
            $services = $form_old['services'] ?: ['Not specified'];
            $email_body = implode("\r\n", [
                'A new enquiry was submitted on the Links Boots website.',
                '',
                'Name: ' . $form_old['first_name'] . ' ' . $form_old['last_name'],
                'Email: ' . $form_old['email'],
                'Monthly budget: ' . ($form_old['budget'] ?: 'Not specified'),
                'Services: ' . implode(', ', $services),
                'How they heard about us: ' . ($form_old['source'] ?: 'Not specified'),
                '',
                'Message:',
                $form_old['message'],
                '',
                'Submitted: ' . date(DATE_ATOM),
            ]);
            $email_headers = [
                'From: ' . SITE_NAME . ' <' . SITE_EMAIL . '>',
                'Reply-To: ' . str_replace(["\r", "\n"], '', $form_old['email']),
                'Content-Type: text/plain; charset=UTF-8',
                'X-Mailer: PHP/' . PHP_VERSION,
            ];
            $sent = function_exists('mail') && @mail(
                SITE_EMAIL,
                'New website enquiry - ' . SITE_NAME,
                $email_body,
                implode("\r\n", $email_headers)
            );

            if ($sent) {
                $form_status = 'ok';
                $form_old    = [];
            } else {
                error_log('Links Boots: failed to send enquiry notification to ' . SITE_EMAIL);
                $form_status = 'email_failed';
            }
        } else {
            error_log('Links Boots: failed to store enquiry from ' . $form_old['email']);
            $form_status = 'store_failed';
        }
    }
}

$page_title = 'Contact ' . SITE_NAME . ' — Book a Strategy Call';
$page_desc  = 'Tell us about your website, market, and goals. We reply within one working day with a straight answer on scope, timing, and cost.';

require __DIR__ . '/../includes/header.php';

hero_inner([
  'crumbs'  => [['label' => 'Contact Us']],
  'eyebrow' => 'Contact',
  'pill'    => 'We reply within one working day',
  'title'   => 'Let&rsquo;s Talk About <span class="gradient-text">Where You Stand</span>',
  'lead'    => 'Search visibility does not just attract traffic, it starts conversations with the right people. Tell us what you are trying to fix and we will tell you what it takes.',
  'ticks'   => ['No lock-in contracts', 'Honest scoping', 'Reply in one working day'],
  'panel'   => ['title' => 'What happens next', 'metrics' => [
      ['01', 'We read your site and your market'],
      ['02', 'We map the gaps worth closing first'],
      ['03', 'You get scope, timing, and cost'],
      ['04', 'You decide — no pressure either way'],
  ]],
]);
?>

<section class="section">
  <div class="wrap">
    <div class="contact-split">
      <div class="reveal">
        <span class="eyebrow">Get in Touch</span>
        <h2>Reach Us <span class="gradient-text">Directly</span></h2>
        <p class="lead">Prefer to skip the form? Every one of these reaches the team, not a queue.</p>
        <dl class="contact-dl">
          <div><dt>Phone</dt><dd><a href="tel:<?= e(SITE_PHONE_HREF) ?>"><?= e(SITE_PHONE) ?></a></dd></div>
          <div><dt>Email</dt><dd><a href="mailto:<?= e(SITE_EMAIL) ?>"><?= e(SITE_EMAIL) ?></a></dd></div>
          <div><dt>LinkedIn</dt><dd><a href="<?= e(SOCIAL_LINKEDIN) ?>">Connect on LinkedIn</a></dd></div>
          <div><dt>Office</dt><dd><?= e(SITE_ADDRESS) ?></dd></div>
          <div><dt>Hours</dt><dd>Mon&ndash;Fri, 09:00&ndash;18:00 GMT</dd></div>
        </dl>
      </div>
      <div class="reveal">
        <?php require __DIR__ . '/../includes/contact-form.php'; ?>
      </div>
    </div>
  </div>
</section>

<?php faq_section('Questions we get every week', [
      ['How quickly will I hear back?', 'Within one working day, from a person who has actually looked at your site. If we are not the right fit we will say so in that first reply rather than booking a call to tell you.'],
      ['Do I need to know what service I want?', 'No. Most enquiries start with a problem rather than a service. We will look at your site and market and tell you which lever moves your numbers first.'],
      ['Is the strategy call a sales pitch?', 'It is a working session. We walk through what we found, what we would prioritise, and roughly what it costs. You leave with the plan whether or not you work with us.'],
      ['Do you work with agencies?', 'Yes. A large part of our work is white-label delivery for SEO and digital agencies, with reports branded to you and no contact with your clients.'],
      ['What is the minimum engagement?', 'Link building and content start from single-campaign commitments. Full-service retainers usually run on a three-month minimum, because that is the honest point at which results become readable.'],
    ], 'section-alt'); ?>

<?php cta_band('Rather Just Book the Call?', 'Thirty minutes, no slides. We look at your site live and tell you what we would do first.'); ?>
<?php require __DIR__ . '/../includes/footer.php'; ?>
