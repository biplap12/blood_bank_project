<?php
include "../Client/service.php";
?>

<div class="searchbloodshow">
    <h1><i class="fa-solid fa-magnifying-glass"></i>Search Blood Details</h1>
    <hr>

    <div class="searchinput">
        <label for="search_data">Search Blood Group</label>
        <br>
        <input type="text" id="searchInput" placeholder="Enter search Blood Group">
    </div>
    <br>
    <table class="donorshow-table">
    </table>


</div>

<div id="loader" style=" display: none; ">
    <div class="loading">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
</div>


<script>
$(document).ready(function() {
    // Handle search input change event
    $('#searchInput').on('input', function() {
        var searchTerm = $(this).val().trim(); // Trim whitespace

        if (searchTerm === '') {
            // Display error message when input is empty
            $('.donorshow-table').html('<td class="error-message">Please enter a search term.</td>');
            return;
        }
        setTimeout(function() {
            searchMatchingText(searchTerm);
        }, 500);
    });

    function searchMatchingText(searchTerm) {
        // Display loader
        $('#loader').show();

        // Make AJAX request to PHP script
        $.ajax({
            url: '../getdata/getClientSearchblood.php',
            method: 'POST',
            data: {
                search: searchTerm
            },
            success: function(response) {
                // Hide loader
                $('#loader').hide();
                // Display search results
                $('.donorshow-table').html(response);
            },
            error: function() {
                // Hide loader
                $('#loader').hide();
                // Display error message
                $('.donorshow-table').html('Error occurred during search.');
            }
        });
    }
});
</script>
<?php include "footer.php";
?>