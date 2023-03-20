<?php
// Initialize a cURL session
$ch = curl_init();

// Set the URL to retrieve data from
curl_setopt($ch, CURLOPT_URL, "https://aicenter.site/hIVbPm9bLMWhiiGpI/d7c51e04-b291-4523-9c2e-d7289739b6f7/new");

// Set the option to return the data as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Execute the cURL session and retrieve the data
$data = curl_exec($ch);

// Close the cURL session
curl_close($ch);

// Output the retrieved data
echo $data;
?>
