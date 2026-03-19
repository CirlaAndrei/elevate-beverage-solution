<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Enquiry – Elevate Beverage Solution</title>
</head>
<body style="margin:0;padding:0;background-color:#0a0908;font-family:Georgia,serif;">

    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#0a0908;padding:40px 20px;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" border="0" style="max-width:600px;width:100%;">

                    {{-- HEADER --}}
                    <tr>
                        <td style="background-color:#141210;padding:36px 40px 28px;border-top:3px solid #c9a84c;">
                            <p style="margin:0 0 6px;font-family:Georgia,serif;font-size:22px;font-weight:normal;color:#c9a84c;letter-spacing:2px;">
                                ELEVATE BEVERAGE SOLUTION
                            </p>
                            <p style="margin:0;font-family:Arial,sans-serif;font-size:11px;color:#7a746a;letter-spacing:3px;text-transform:uppercase;">
                                New Contact Form Submission
                            </p>
                        </td>
                    </tr>

                    {{-- DIVIDER --}}
                    <tr>
                        <td style="background-color:#1c1916;padding:0 40px;">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr><td style="height:1px;background-color:#c9a84c33;font-size:0;line-height:0;">&nbsp;</td></tr>
                            </table>
                        </td>
                    </tr>

                    {{-- BODY --}}
                    <tr>
                        <td style="background-color:#1c1916;padding:36px 40px;">

                            {{-- Name --}}
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:24px;">
                                <tr>
                                    <td style="padding-bottom:4px;font-family:Arial,sans-serif;font-size:10px;color:#c9a84c;letter-spacing:3px;text-transform:uppercase;">
                                        NAME
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-family:Georgia,serif;font-size:17px;color:#f5f0e8;padding-bottom:20px;border-bottom:1px solid #c9a84c22;">
                                        {{ $submission->name }}
                                    </td>
                                </tr>
                            </table>

                            {{-- Email --}}
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:24px;">
                                <tr>
                                    <td style="padding-bottom:4px;font-family:Arial,sans-serif;font-size:10px;color:#c9a84c;letter-spacing:3px;text-transform:uppercase;">
                                        EMAIL
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-bottom:20px;border-bottom:1px solid #c9a84c22;">
                                        <a href="mailto:{{ $submission->email }}" style="font-family:Georgia,serif;font-size:17px;color:#c9a84c;text-decoration:none;">
                                            {{ $submission->email }}
                                        </a>
                                    </td>
                                </tr>
                            </table>

                            {{-- Phone + Service side by side --}}
                            <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:24px;">
                                <tr>
                                    <td width="50%" style="vertical-align:top;padding-right:20px;">
                                        <p style="margin:0 0 4px;font-family:Arial,sans-serif;font-size:10px;color:#c9a84c;letter-spacing:3px;text-transform:uppercase;">PHONE</p>
                                        <p style="margin:0;font-family:Georgia,serif;font-size:17px;color:#f5f0e8;padding-bottom:20px;border-bottom:1px solid #c9a84c22;">
                                            @if($submission->phone)
                                                <a href="tel:{{ $submission->phone }}" style="color:#f5f0e8;text-decoration:none;">{{ $submission->phone }}</a>
                                            @else
                                                <span style="color:#7a746a;font-style:italic;font-size:14px;">Not provided</span>
                                            @endif
                                        </p>
                                    </td>
                                    <td width="50%" style="vertical-align:top;">
                                        <p style="margin:0 0 4px;font-family:Arial,sans-serif;font-size:10px;color:#c9a84c;letter-spacing:3px;text-transform:uppercase;">SERVICE</p>
                                        <p style="margin:0;font-family:Georgia,serif;font-size:17px;color:#f5f0e8;padding-bottom:20px;border-bottom:1px solid #c9a84c22;">
                                            @if($submission->service)
                                                {{ $submission->service }}
                                            @else
                                                <span style="color:#7a746a;font-style:italic;font-size:14px;">Not specified</span>
                                            @endif
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            {{-- Message --}}
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td style="padding-bottom:4px;font-family:Arial,sans-serif;font-size:10px;color:#c9a84c;letter-spacing:3px;text-transform:uppercase;">
                                        MESSAGE
                                    </td>
                                </tr>
                                <tr>
                                    <td style="background-color:#0a0908;border-left:3px solid #c9a84c;padding:20px 24px;">
                                        <p style="margin:0;font-family:Georgia,serif;font-size:15px;color:#d4cfc6;line-height:1.8;">
                                            {{ $submission->message }}
                                        </p>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    {{-- REPLY BUTTON --}}
                    <tr>
                        <td style="background-color:#1c1916;padding:0 40px 36px;text-align:center;">
                            <a href="mailto:{{ $submission->email }}?subject=Re: Your Enquiry – Elevate Beverage Solution"
                               style="display:inline-block;background-color:#c9a84c;color:#0a0908;font-family:Arial,sans-serif;font-size:11px;font-weight:bold;letter-spacing:3px;text-transform:uppercase;text-decoration:none;padding:14px 32px;">
                                REPLY TO {{ strtoupper(explode(' ', $submission->name)[0]) }}
                            </a>
                        </td>
                    </tr>

                    {{-- FOOTER --}}
                    <tr>
                        <td style="background-color:#0a0908;border-top:1px solid #c9a84c22;padding:24px 40px;text-align:center;">
                            <p style="margin:0 0 4px;font-family:Arial,sans-serif;font-size:11px;color:#7a746a;letter-spacing:1px;">
                                Elevate Beverage Solution Ltd · Ireland
                            </p>
                            <p style="margin:0;font-family:Arial,sans-serif;font-size:10px;color:#3a3530;">
                                Submitted {{ $submission->created_at->format('d M Y \a\t H:i') }}
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>
