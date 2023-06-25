<!DOCTYPE html>
<html>

<head>
    <title>Search Matching Text</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../js/jquery.min.js"></script>
    <style>
    .loader {
        display: none;
        text-align: center;
        margin-top: 20px;
    }
    </style>
</head>

<body>
    <input type="text" id="searchInput" placeholder="Enter search  Blood Group">
    <div class="loader">
        <img src="loader.gif" alt="Loading...">
    </div>
    <div id="searchResults"></div>
</body>

</html>

<script>
$(document).ready(function() {
    // Handle search input change event
    $('#searchInput').on('input', function() {
        var searchTerm = $(this).val();
        // Call search function with a delay of 500 milliseconds
        setTimeout(function() {
            searchMatchingText(searchTerm);
        }, 5000);
    });

    function searchMatchingText(searchTerm) {
        // Display loader
        $('.loader').show();

        // Make AJAX request to PHP script
        $.ajax({
            url: 'displaysearch.php',
            method: 'POST',
            data: {
                search: searchTerm
            },
            success: function(response) {
                // Hide loader
                $('.loader').hide();
                // Display search results
                $('#searchResults').html(response);
            },
            error: function() {
                // Hide loader
                $('.loader').hide();
                // Display error message
                $('#searchResults').html('Error occurred during search.');
            }
        });
    }
});
</script>