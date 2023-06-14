<?php
include "../header/header.php";
include "../admin/admin.php";

?>

<div class="adminContent">
    <h1> Search Donor Details</h1>
    <hr>
    <div class="main-content">
        <div class="content">
            <div class="searchinput">
                <label for="search_data">Search Text</label>
                <input type="text" id="searchInput" placeholder="Enter search term">
            </div>
            <br>
            <table class="donorshow-table">
            </table>






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
                var searchTerm = $(this).val();

                // Call search function with a delay of 500 milliseconds
                setTimeout(function() {
                    searchMatchingText(searchTerm);
                }, 5000);
            });

            function searchMatchingText(searchTerm) {
                // Display loader
                $('#loader').show();

                // Make AJAX request to PHP script
                $.ajax({
                    url: '../getdata/getsearchdonor.php',
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