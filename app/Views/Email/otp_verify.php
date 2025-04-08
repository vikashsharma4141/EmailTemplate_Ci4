<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify OTP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Styling -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #667eea, #764ba2);
            color: #fff;
            padding: 50px 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            margin-bottom: 30px;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border-radius: 10px;
            border: none;
            outline: none;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        button {
            background-color: #ffffff;
            color: #764ba2;
            padding: 12px 24px;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        button:hover {
            background-color: #ffddf4;
            color: #333;
        }

        .emoji {
            font-size: 40px;
            margin-bottom: 15px;
        }

        @media (max-width: 500px) {
            .container {
                padding: 20px;
            }

            h2 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="emoji">📩🔐</div>
        <h2>Hello, <?= esc($name) ?>!</h2>
        <p>We've sent an OTP to <strong><?= esc($email) ?></strong><br>Enter it below to verify:</p>

        <form action="<?= base_url('otp_verify') ?>" method="post">
            <input type="hidden" name="email" value="<?= esc($email) ?>">
            <input type="text" name="otp" placeholder="Enter OTP" required>
            <button type="submit">✅ Verify OTP</button>
        </form>
    </div>
</body>
</html>
