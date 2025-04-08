<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OTP Verification Failed ❌</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, #ff5858, #f09819);
            color: #fff;
            text-align: center;
            padding: 50px 20px;
        }

        .container {
            max-width: 500px;
            margin: auto;
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
        }

        h2 {
            font-size: 32px;
            margin-bottom: 15px;
        }

        p {
            font-size: 18px;
            margin-bottom: 30px;
        }

        a {
            display: inline-block;
            padding: 12px 24px;
            background-color: #fff;
            color: #ff5858;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        a:hover {
            background-color: #ff3c3c;
            color: #fff;
        }

        .emoji {
            font-size: 50px;
            margin-bottom: 10px;
        }

        @media (max-width: 600px) {
            h2 { font-size: 26px; }
            p  { font-size: 16px; }
            .emoji { font-size: 40px; }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="emoji">😢</div>
        <h2>OTP Verification Failed</h2>
        <p>Sorry! The OTP entered for <strong><?= esc($email) ?></strong> is either <u>invalid</u> or <u>expired</u>.</p>

        <a href="<?= base_url('mailer/sendOtp') ?>">🔁 Try Again</a>
    </div>
</body>
</html>
