<div class="dashboard">
    <div class="sidebar">
        <h1><a href="../displaydata/displaymessage.php"><i class="fa-solid fa-gauge"></i>Dashboard</a></h1>
        <hr>
        <ul>
            <li><a href="../displaydata/displaymessage.php"><i class="fa-sharp fa-solid fa-envelope"></i>
                    Inbox</a>
            </li>
            <li><a href="../searchDonor/searchdonor.php"><i class="fa-solid fa-magnifying-glass"></i>Search Blood</a>
            </li>
            <li><a href="../displaydata/activedonor.php"><i class="fa-solid fa-users" style="color: #35f500;"></i>Active
                    Doners</a></li>
            <li><a href="../displaydata/donordisplay.php"><i class="fa-solid fa-users"></i>Not Active Donor</a></li>
            <li><a href="../displaydata/needblooddisplay.php"><i class="fa-solid fa-bed"></i>Need Blood</a></li>


        </ul>
    </div>



    <script>
    var currentUrl = window.location.href;

    var links = document.querySelectorAll('.sidebar ul li a');

    for (var i = 0; i < links.length; i++) {
        if (links[i].href === currentUrl) {
            links[i].parentElement.classList.add('activeAdminDashboard');
            links[i].style.color = 'white';

            break;
        }
    }
    </script>