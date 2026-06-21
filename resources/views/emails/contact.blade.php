<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Contact</title>
    <style>
        body { margin: 0; padding: 0; background: #09090b; font-family: 'Courier New', monospace; }
        .wrapper { max-width: 600px; margin: 40px auto; background: #0a0a0a; border: 1px solid #27272a; }
        .header { padding: 20px 32px; border-bottom: 1px solid #27272a; }
        .header-label { font-size: 10px; color: #ec4899; letter-spacing: 0.4em; text-transform: uppercase; margin: 0 0 4px; }
        .header-title { font-size: 18px; font-weight: 700; color: #ffffff; text-transform: uppercase; letter-spacing: 0.15em; margin: 0; }
        .body { padding: 32px; }
        .field { margin-bottom: 24px; }
        .field-label { font-size: 9px; color: #52525b; letter-spacing: 0.4em; text-transform: uppercase; margin-bottom: 6px; }
        .field-value { font-size: 13px; color: #d4d4d8; line-height: 1.6; }
        .field-value a { color: #ec4899; text-decoration: none; }
        .divider { border: none; border-top: 1px solid #27272a; margin: 24px 0; }
        .message-box { background: #111113; border: 1px solid #27272a; padding: 16px 20px; }
        .message-text { font-size: 13px; color: #a1a1aa; line-height: 1.8; white-space: pre-wrap; margin: 0; }
        .footer { padding: 16px 32px; border-top: 1px solid #27272a; }
        .footer-text { font-size: 10px; color: #3f3f46; letter-spacing: 0.2em; text-transform: uppercase; margin: 0; }
        .pink { color: #ec4899; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <p class="header-label">// INCOMING_TRANSMISSION</p>
            <h1 class="header-title">New Contact Message</h1>
        </div>

        <div class="body">
            <div class="field">
                <p class="field-label">Sender Name</p>
                <p class="field-value">{{ $senderName }}</p>
            </div>

            <div class="field">
                <p class="field-label">Sender Email</p>
                <p class="field-value">
                    <a href="mailto:{{ $senderEmail }}">{{ $senderEmail }}</a>
                </p>
            </div>

            <hr class="divider">

            <div class="field">
                <p class="field-label">Message</p>
                <div class="message-box">
                    <pre class="message-text">{{ $senderMessage }}</pre>
                </div>
            </div>
        </div>

        <div class="footer">
            <p class="footer-text">
                <span class="pink">▶</span> DEV_PORTFOLIO // AUTO-GENERATED TRANSMISSION
            </p>
        </div>
    </div>
</body>
</html>
