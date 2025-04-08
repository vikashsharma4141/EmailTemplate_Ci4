
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>OTP Verified</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, #74ebd5, #acb6e5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .success-container {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 5px 25px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
            animation: fadeIn 0.8s ease-in-out;
        }

        h2 {
            color: #28a745;
            font-size: 28px;
            margin-bottom: 10px;
        }

        p {
            color: #333;
            font-size: 18px;
        }

        .quote {
            margin-top: 30px;
            font-style: italic;
            font-size: 16px;
            color: #555;
            background: #f1f1f1;
            padding: 15px;
            border-left: 4px solid #28a745;
            border-radius: 8px;
        }

        .btn-home {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 25px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            font-size: 16px;
            transition: background 0.3s ease;
        }

        .btn-home:hover {
            background-color: #0056b3;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <?php
        // PHP array of motivational quotes with emojis
        $quotes = [
            "💪 Believe in yourself. You’re stronger than you think.",
            "🚀 Push yourself, because no one else is going to do it for you.",
            "🌟 Every accomplishment starts with the decision to try.",
            "🔥 Don’t watch the clock; do what it does. Keep going.",
            "🏆 Success doesn’t come to you — you go to it.",
            "🧠 Doubt kills more dreams than failure ever will.",
            "🎯 Focus on your goal. Don’t look in any direction but ahead.",
            "✨ Great things never come from comfort zones.",
            "🛤️ The journey of a thousand miles begins with a single step.",
            "⚡ You are capable of amazing things."
        ];

        // Pick a random quote
        $randomQuote = $quotes[array_rand($quotes)];
    ?>

    <div class="success-container">
        <h2>OTP Verified Successfully 🎉</h2>
        <p>Hello <strong><?= esc($name) ?></strong>,</p>
        <p>Your email <strong><?= esc($email) ?></strong> has been verified.</p>

        <div class="quote">
            <?= esc($randomQuote) ?>
        </div>

        <a href="<?= base_url('welcome_email') ?>" class="btn-home">Go to Home Page</a>
    </div>
</body>
</html>
