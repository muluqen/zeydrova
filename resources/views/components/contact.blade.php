<section id="contact" class="contact">
    <div class="container">
        <h2>Contact US</h2>
        <p>Or message me directly on Telegram: <a href="https://t.me/Zeydrova" target="_blank">@Zeydrova</a></p>

        @if(session('success'))
            <div id="contact-success" class="success-msg">
                <p><strong>Thank you for reaching out.</strong></p>
                <p>Your message has been successfully delivered to our Telegram inbox. We’ll review it shortly and respond via Telegram as soon as possible.</p>
                <p>Kindly keep your Telegram line open to receive our reply. We appreciate your patience and look forward to connecting with you.</p>
                <p>If you haven’t received a response within 36 hours, it’s possible that your Telegram username was incorrect or hasn’t interacted with our bot yet. In that case, we kindly ask you to resend your message and ensure your Telegram account is active and accurate.</p>
            </div>
        @endif

        <form method="POST" action="{{ route('send.message') }}">
            @csrf
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="text" name="telegram" placeholder="Your Telegram account  e.g @Zeydrova" required>
            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
            <button type="submit" class="btn-primary">Send Message</button>
        </form>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const successMsg = document.getElementById('contact-success');
        if (successMsg) {
            successMsg.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
</script>
