<?php
$legal = [
  'title'   => 'Privacy Policy',
  'heading' => 'How We Handle <span class="gradient-text">Your Data</span>',
  'lead'    => 'What we collect, why we collect it, how long we keep it, and what you can ask us to do with it.',
  'updated' => 'September 2026',
  'sections' => [
    ['h' => 'Who We Are', 'body' => [
      'Links Boots is a digital marketing agency. In this policy, &ldquo;we&rdquo;, &ldquo;us&rdquo; and &ldquo;our&rdquo; mean Links Boots. We are the data controller for the personal information described here.',
    ]],
    ['h' => 'What We Collect', 'body' => [
      'We collect only what we need to answer your enquiry and run our services:',
      ['Contact details you give us: name, email address, phone number and company.',
       'Enquiry details: your budget range, services of interest, how you found us, and the message you send.',
       'Client project data: analytics, search console and advertising account access granted to us for delivery.',
       'Technical data: IP address, browser type and pages visited, collected through standard web analytics.'],
    ]],
    ['h' => 'Why We Collect It', 'body' => [
      'We process personal data on three lawful bases. <strong>Legitimate interests</strong> cover replying to enquiries and running our business. <strong>Contract</strong> covers everything needed to deliver work you have engaged us for. <strong>Consent</strong> covers marketing emails, which you can withdraw at any time.',
      'We do not sell personal data, and we do not share it with third parties for their own marketing.',
    ]],
    ['h' => 'Client Data', 'body' => [
      'Data belonging to a client project is used only for the work we are doing with that client. It is never repurposed for another client, added to a shared database, or used to build prospect lists.',
      'You choose who on your team has access to reports and accounts. Access is revoked when an engagement ends.',
    ]],
    ['h' => 'How Long We Keep It', 'body' => [
      'Enquiry data is kept for twenty-four months from your last contact with us, then deleted. Client records are kept for seven years after an engagement ends where tax and accounting rules require it. Analytics data follows the retention period set in the analytics platform.',
    ]],
    ['h' => 'Who We Share It With', 'body' => [
      'We use a small number of processors to run the business, including email, cloud storage, analytics and accounting providers. Each is bound by a data processing agreement and may only act on our instructions.',
      'We will disclose personal data if legally required to do so, and we will tell you when we are permitted to.',
    ]],
    ['h' => 'Cookies', 'body' => [
      'This site uses only the cookies needed for it to work and, where you consent, analytics cookies that help us understand which pages are useful. You can block or delete cookies in your browser settings at any time; the site will continue to work without them.',
    ]],
    ['h' => 'Your Rights', 'body' => [
      'Under UK and EU data protection law you can ask us to:',
      ['Give you a copy of the personal data we hold about you.',
       'Correct anything that is inaccurate or incomplete.',
       'Delete your data, where we have no overriding obligation to keep it.',
       'Restrict or object to how we process it.',
       'Transfer your data to another provider in a portable format.',
       'Withdraw consent for marketing, at any time and without explanation.'],
      'We respond to requests within one calendar month. If you are unhappy with our response, you can complain to the Information Commissioner&rsquo;s Office.',
    ]],
    ['h' => 'Security', 'body' => [
      'Access to client accounts and personal data is limited to the people working on the relevant project. Accounts are protected with multi-factor authentication, and access is reviewed when team members or engagements change.',
    ]],
    ['h' => 'International Transfers', 'body' => [
      'Some of our processors are based outside the UK and EEA. Where that is the case, transfers are covered by adequacy decisions or standard contractual clauses.',
    ]],
    ['h' => 'Changes to This Policy', 'body' => [
      'When we change this policy we update the date at the top of the page. Material changes affecting how we use your data will be communicated directly to active clients.',
    ]],
  ],
];
require __DIR__ . '/../includes/legal.php';
