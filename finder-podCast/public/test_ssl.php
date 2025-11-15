<?php
// URL to Cloudinary upload API
$url = "https://api.cloudinary.com/v1_1/dlrtdgc8e/image/upload";

// Initialize cURL
$ch = curl_init($url);

// Return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Enforce SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

// Execute the request
$result = curl_exec($ch);

// Get any error
$error = curl_error($ch);

// Close cURL
curl_close($ch);

// Output the result
if ($error) {
    echo "SSL Test Failed: " . $error;
} else {
    echo "SSL Test Passed: Secure connection established!";
}
