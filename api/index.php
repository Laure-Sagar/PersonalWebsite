
<?php
// Set the content type to JSON
header ('Content-Type: application/json');
if ($_SERVER[' REQUEST_METHOD' ] === 'GET') {
// Create a response array
$response = array( 'message' => 'Hello, Sagar!' );
// Encode the response array to JSON and print it
echo json_encode($response);
} else {
// If the request method is not GET, return an error response
http_response_code(405); // Method Not Allowed echo json_encode(array('error' →> 'Method Not Allowed'));
}
?>
