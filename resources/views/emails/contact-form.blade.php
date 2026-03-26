<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Enquiry — GeM Consultancy</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #f1f5f9; color: #1e293b; }
        .wrapper { max-width: 600px; margin: 32px auto; background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 24px rgba(0,0,0,0.08); }
        /* Header */
        .header { background: linear-gradient(135deg, #0a1628 0%, #0f2044 50%, #1a3a6b 100%); padding: 36px 40px; text-align: center; }
        .header-logo { display: inline-flex; align-items: center; gap: 12px; margin-bottom: 16px; }
        .logo-icon { width: 44px; height: 44px; background: linear-gradient(135deg, #059669, #0d9488); border-radius: 10px; display: inline-flex; align-items: center; justify-content: center; font-size: 22px; color: #fff; }
        .logo-text { font-size: 20px; font-weight: 700; color: #fff; }
        .header h1 { font-size: 22px; color: #ffffff; font-weight: 600; margin-bottom: 6px; }
        .header p  { font-size: 13px; color: rgba(255,255,255,0.6); }
        /* Alert badge */
        .new-badge { margin: -16px 40px 0; background: linear-gradient(135deg, #059669, #0d9488); color: #fff; font-size: 13px; font-weight: 600; padding: 10px 20px; border-radius: 50px; display: inline-block; position: relative; z-index: 1; }
        .badge-wrap { text-align: center; margin-bottom: 8px; }
        /* Body */
        .body { padding: 32px 40px; }
        .intro { font-size: 14px; color: #475569; line-height: 1.7; margin-bottom: 28px; }
        /* Info grid */
        .info-card { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; margin-bottom: 24px; }
        .info-row { display: flex; align-items: flex-start; padding: 14px 20px; border-bottom: 1px solid #e2e8f0; }
        .info-row:last-child { border-bottom: none; }
        .info-label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #94a3b8; width: 110px; flex-shrink: 0; padding-top: 2px; }
        .info-value { font-size: 14px; color: #1e293b; font-weight: 500; flex: 1; line-height: 1.6; }
        .info-value a { color: #059669; text-decoration: none; }
        /* Message box */
        .message-box { background: #f8fafc; border: 1px solid #e2e8f0; border-left: 4px solid #059669; border-radius: 0 12px 12px 0; padding: 20px; margin-bottom: 24px; }
        .message-box .label { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: #94a3b8; margin-bottom: 10px; }
        .message-box p { font-size: 14px; color: #334155; line-height: 1.8; white-space: pre-line; }
        /* CTA */
        .cta-wrap { text-align: center; margin: 28px 0; }
        .cta-btn { display: inline-block; background: linear-gradient(135deg, #059669, #0d9488); color: #ffffff; font-size: 14px; font-weight: 600; padding: 12px 32px; border-radius: 50px; text-decoration: none; }
        /* Footer */
        .footer { background: #f8fafc; border-top: 1px solid #e2e8f0; padding: 20px 40px; text-align: center; }
        .footer p { font-size: 12px; color: #94a3b8; line-height: 1.6; }
        .footer a { color: #059669; text-decoration: none; }
        /* Responsive */
        @media(max-width: 640px) {
            .body, .header, .footer { padding-left: 24px; padding-right: 24px; }
            .info-row { flex-direction: column; gap: 4px; }
            .info-label { width: auto; }
        }
    </style>
</head>
<body>
<div class="wrapper">

    <!-- Header -->
    <div class="header">
        <div class="header-logo">
            <div class="logo-icon">💎</div>
            <span class="logo-text">GeM Consultancy</span>
        </div>
        <h1>New Contact Form Enquiry</h1>
        <p>Someone has submitted the contact form on your website</p>
    </div>

    <!-- Badge -->
    <div class="badge-wrap" style="margin-top:24px;">
        <span class="new-badge">🔔 &nbsp;Action Required — New Lead</span>
    </div>

    <!-- Body -->
    <div class="body">
        <p class="intro">
            Hi Admin,<br><br>
            You have received a new enquiry through the GeM Consultancy website contact form.
            Please review the details below and follow up as soon as possible.
        </p>

        <!-- Contact Details -->
        <div class="info-card">
            <div class="info-row">
                <span class="info-label">Full Name</span>
                <span class="info-value">{{ $contact->name }}</span>
            </div>
            <div class="info-row">
                <span class="info-label">Email</span>
                <span class="info-value"><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></span>
            </div>
            <div class="info-row">
                <span class="info-label">Phone</span>
                <span class="info-value">
                    @if($contact->phone)
                        <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a>
                    @else
                        <span style="color:#94a3b8;">Not provided</span>
                    @endif
                </span>
            </div>
            <div class="info-row">
                <span class="info-label">Service</span>
                <span class="info-value">
                    @if($contact->service)
                        {{ $contact->service }}
                    @else
                        <span style="color:#94a3b8;">Not specified</span>
                    @endif
                </span>
            </div>
            <div class="info-row">
                <span class="info-label">Submitted</span>
                <span class="info-value">{{ $contact->created_at->format('d M Y, h:i A') }} IST</span>
            </div>
        </div>

        <!-- Message -->
        <div class="message-box">
            <div class="label">Message</div>
            <p>{{ $contact->message }}</p>
        </div>

        <!-- CTA -->
        <div class="cta-wrap">
            <a href="mailto:{{ $contact->email }}?subject=Re: Your GeM Consultancy Enquiry" class="cta-btn">
                ✉️ &nbsp; Reply to {{ $contact->name }}
            </a>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>
            This email was automatically generated by the GeM Consultancy website.<br>
            Please do not reply to this notification email directly.<br>
            &copy; {{ date('Y') }} GeM Consultancy &nbsp;|&nbsp; Bengaluru, Karnataka, India
        </p>
    </div>

</div>
</body>
</html>
