<?php
// Establish database connection
include "../../database/dbConnect.php";

// Retrieve search term from POST request
$searchTerm = $_POST['search'];

// Construct SQL query
$sql = "SELECT * FROM `donors` WHERE bloodgroup LIKE '%$searchTerm%'";

// Execute query
$result = $con->query($sql);

// Process results
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['bloodgroup']; // Output the matching value
    }
} else {
    echo "No matching results found.";
}

// Close database connection
$con->close();
?>