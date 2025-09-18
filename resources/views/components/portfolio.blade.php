<section id="portfolio" class="portfolio">
  <div class="container">
    <h2>Our Work</h2>
    <p>Explore a few highlights from the systems and brands we've crafted with clarity, creativity, and care.</p>

    <div class="portfolio-grid">
      @php
        $projects = [
          ['img'=>'va.png','title'=>'Zeydrova Brand & Platform','desc'=>'Zeydrova is more than a brand it’s a declaration of clarity, creativity, and empowerment. Designed to elevate small businesses, it combines bold visual identity with a modular, scalable web platform. Every element from the logo to the contact flow is built to break away from mainstream templates and reflect the originality of the people it serves.'],
          ['img'=>'fixflow.png','title'=>'FixFlow supporting from remote','desc'=>'FixFlow is a modular support and documentation platform built for clarity, control, and scale. It enables institutions to deliver step by step instructions remotely, with role based access control, dynamic checklists, and structured workflows. Whether for IT troubleshooting, academic SOPs, or operational guides, FixFlow helps teams stay aligned filterable, taggable, and ready for any environment that demands precision and accountability.'],
          ['img'=>'registration.png','title'=>'Full registration system','desc'=>'A complete registration engine built for flexibility and security. Designed to serve any organization, it supports dynamic form logic, user validation, and scalable data handling all wrapped in a clean, professional interface.'],
          ['img'=>'tg.png','title'=>'Telegram Contact Integration','desc'=>'Real time communication meets web presence. This integration connects your website directly to Telegram, enabling secure, instant messaging with clients no friction, no delay.'],
          ['img'=>'checklist.png','title'=>'Dynamic checklist System','desc'=>'Smart checklists that adapt to field realities. Built for clarity, speed, and structured workflows, this system helps teams stay aligned and accountable especially in remote or high pressure environments.'],
          ['img'=>'veynova.png','title'=>'This Spot Awaits Our Next Craft.','desc'=>'A new project is in the works. This space will soon showcase our next original creation crafted with the same clarity, creativity, and care that define everything we build.'],
          ['img'=>'your.png','title'=>'Collaborate with Us','desc'=>'We’re open to bold ideas and meaningful collaborations. Whether you\'re a founder, a dreamer, or a builder we’d love to create something unforgettable with you.'],
        ];
      @endphp

      @foreach($projects as $p)
      <div class="tooltip-card">
        <div class="card">
          <img src="{{ asset('images/'.$p['img']) }}" alt="{{ $p['title'] }}">
          <h3>{{ $p['title'] }}</h3>
          <div class="tooltip">{{ $p['desc'] }}</div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Link the CSS -->
<link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
