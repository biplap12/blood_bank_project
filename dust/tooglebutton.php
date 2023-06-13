<!DOCTYPE html>
<html>

<head>
    <title>Active/Inactive Button</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
    .active {
        background-color: green;
    }

    .inactive {
        background-color: red;
    }
    </style>
</head>

<body>

    <?php
// Assume this variable indicates the current status
$status = "active"; // Replace with your logic to determine the status

// Determine the initial class based on the status
$initialClass = ($status == "active") ? "active" : "inactive";
?>

    <button id="statusBtn" class="<?php echo $initialClass; ?>">
        <?php echo ucfirst($status); ?>
    </button>

    <script>
    $(document).ready(function() {
        $('#statusBtn').click(function() {
            // Toggle the class on button click
            $(this).toggleClass('active inactive');

            // Update the status text based on the new class
            var newStatus = $(this).hasClass('active') ? 'active' : 'inactive';
            $(this).text(newStatus.charAt(0).toUpperCase() + newStatus.slice(1));
        });
    });
    </script>

</body>

</html>