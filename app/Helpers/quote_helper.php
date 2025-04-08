<?php

if (!function_exists('getRandomQuote')) {
    function getRandomQuote()
    {
        $quotes = [
            "“Success is not final, failure is not fatal: It is the courage to continue that counts.” – Winston Churchill",
            "“Push yourself, because no one else is going to do it for you.”",
            "“Believe in yourself and all that you are.”",
            "“The harder you work for something, the greater you’ll feel when you achieve it.”",
            "“Don’t watch the clock; do what it does. Keep going.” – Sam Levenson",
            "“Your limitation—it’s only your imagination.”",
            "“Great things never come from comfort zones.”",
            "“Dream it. Wish it. Do it.”",
        ];
        return $quotes[array_rand($quotes)];
    }
}
