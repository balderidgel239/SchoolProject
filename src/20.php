<?php
// This is a simple PHP script to demonstrate basic file operations.
// It opens and reads a file named "example.txt" from the current directory.
// The read() function returns the contents of the file as a string.

$filePath = 'example.txt';
$fileContent = file_get_contents($filePath);
echo $fileContent;

// This line will not be executed because PHP is run in the context of the web server, and you can't directly write to file paths from within an HTTP request.
?>
