<p class="input-block">
    <label for="contact-name"><strong>Name</strong> (required)</label>
    [text* your-name id:contact-name]
</p>
<p class="input-block">
    <label for="contact-email"><strong>Email</strong> (required)</label>
    [email* your-email id:contact-email]
</p>
<p class="input-block">
    <label for="contact-subject"><strong>Subject</strong></label>
    [text your-subject id:contact-subject]
</p>
<p class="input-block">
    <label for="contact-message"><strong>Your Message</strong> (required)</label>
    [textarea* your-message id:contact-message]
</p>
<div class="hidden">
    <label for="contact-spam-check">Do not fill out this field:</label>
    [text spam-check id:contact-spam-check ""]
</div>
[submit "Submit"]
<div class="clear"></div>
