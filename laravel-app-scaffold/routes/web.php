<?php
// Minimal routes file - mirrors Laravel's `routes/web.php`.

// Example route (for a real app you'd bootstrap framework and dispatch requests):
function routeHello() {
    echo "GET / => Welcome to the scaffolded app\n";
}

// Simulated dispatch if run from CLI for quick test
if (php_sapi_name() === 'cli') {
    routeHello();
}
