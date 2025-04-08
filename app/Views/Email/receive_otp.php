
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Secure OTP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #111827, #1f2937);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .email-box {
            max-width: 480px;
            width: 90%;
            background: #1e293b;
            border-radius: 20px;
            padding: 30px 25px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            text-align: center;
        }

        h2 {
            font-size: 26px;
            color: #facc15;
            margin-bottom: 12px;
        }

        .greet {
            font-size: 18px;
            margin-bottom: 12px;
            color: #f3f4f6;
        }

        .otp-display {
            background: #facc15;
            color: #1e293b;
            font-size: 32px;
            font-weight: bold;
            letter-spacing: 5px;
            padding: 16px 0;
            border-radius: 12px;
            margin: 20px 0;
        }

        .info {
            font-size: 15px;
            color: #cbd5e1;
            line-height: 1.6;
        }

        .quote-box {
            margin-top: 30px;
            padding: 16px;
            background: #0f172a;
            border-left: 5px solid #facc15;
            border-radius: 10px;
            font-style: italic;
            color: #e5e7eb;
        }

        .footer {
            margin-top: 20px;
            font-size: 13px;
            color: #94a3b8;
        }

        @media(max-width: 500px) {
            h2 { font-size: 22px; }
            .otp-display { font-size: 26px; }
            .greet { font-size: 16px; }
        }
    </style>
</head>
<body>

<div class="email-box">
    <h2>🔐 OTP Verification</h2>
    <div class="greet">Hey <?= esc($name) ?>, your secure code is here:</div>

    <div class="otp-display"><?= esc($otp) ?></div>

    <div class="info">
        Use this OTP to verify your identity. It will expire in <strong>10 minutes</strong>.<br>
        Keep it confidential and never share it with anyone.
    </div>

    <div class="quote-box">
        <?= esc(getRandomQuote()) ?>
    </div>

    <div class="footer">
        You’re awesome ✨<br>Thanks for using our service!
    </div>
</div>

</body>
</html>
