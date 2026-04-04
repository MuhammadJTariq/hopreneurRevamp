<?php 
/*

ob_start();

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $allowedPaths = array("/", "/products", "/projects", "/contact");
    $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    echo $request_uri;
    $base = dirname($_SERVER['PHP_SELF']);
    $request_uri = str_replace($base, '', $request_uri);
    print_r($request_uri);
    echo $request_uri;

    // Normalize the request URI to exclude the .php for comparison
    // This prevents /index.php from being redirected to /index.php.php
    $request_uri_without_extension = preg_replace('/\.php$/', '', $request_uri);

    if (in_array($request_uri_without_extension, $allowedPaths)) {
        // Construct the full path with .php
        $target_file = $request_uri_without_extension;

        // Only redirect if the current URI is different from the target file
        // This prevents infinite loops if /index.php is accessed directly
        if ($request_uri !== $target_file) {
            header("Location: " . $target_file);
            exit(); // Crucial: Stop script execution after redirect
        }
        // If $request_uri is already e.g., /index.php, just let the script continue
        // (assuming the rest of your index.php code will render the page)
    } else {
        header("Location: 404.php"); // Use absolute path for consistency
        exit(); // Crucial: Stop script execution after redirect
    }
}

ob_end_flush();
*/

?>