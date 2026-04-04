<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    // Get the requested URI path
    $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // Check if the path is the root (/)
    if ($request_uri === "/") {
        // Redirect to index.html
        header("Location: index.html");
        exit(); // Always exit after a header redirect
    } else if ($request_uri === "/about") {
        // Example for another route
        // include 'about.php'; // Or some other action
        header('Location : contact.html');
    }
    // You can add more 'else if' conditions for other routes
    // Or a final 'else' for a 404 Not Found page
}
?>