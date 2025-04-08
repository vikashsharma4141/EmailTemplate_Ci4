
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send OTP | Altra Pro Max</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #667eea, #764ba2);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .otp-container {
            background-color: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 420px;
            animation: popIn 0.6s ease-out;
        }

        @keyframes popIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        h2 {
            text-align: center;
            color: #4c00ff;
            margin-bottom: 30px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input:focus {
            border-color: #4c00ff;
            outline: none;
        }

        button {
            width: 100%;
            background: #4c00ff;
            color: white;
            padding: 14px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #3700b3;
        }

        .footer-text {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
            text-align: center;
        }

        .footer-text span {
            color: #000;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="otp-container">
    <h2>📧 Send OTP to Your Email</h2>
    <form action="<?= base_url('mailer/sendOtp') ?>" method="post">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <button type="submit">Send OTP</button>
    </form>
    <div class="footer-text">
        Powered by <span>Vikash Sharma</span> 🚀
    </div>
</div>

</body>
</html>
