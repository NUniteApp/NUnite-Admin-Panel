<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NUnite Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles/dashboard.css">
    <link rel="stylesheet" type="text/css" href="styles/manage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css" integrity="sha512-3icgkoIO5qm2D4bGSUkPqeQ96LS8+ukJC7Eqhl1H5B2OJMEnFqLmNDxXVmtV/eq5M65tTDkUYS/Q0P4gvZv+yA==" crossorigin="anonymous" /></head>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>

<div class="wrapper hover_collapse">

    <!-- Navigation Bar -->
    <div class="top_navbar">
        <div class="logo">
            <div class="toggle-menu">
                <button> <img src="images/NUnite_Logo.png" class="nunite-logo" alt="NUnite Logo" width="40" height="50"> </button>
            </div>
        </div>

        <div class="navbar">
            <a <button class="refresh" onClick="window.location.reload();"> <i class="fa fa-refresh fa-spin"></i> Refresh</button>
            <a href="reports.php">Reports</a>
            <a href="messages.php">Messages</a>
            <div class="dropdown">
                <button class="dropbtn"><i class="fa fa-user"></i> NUnite Admin <i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="#">Settings</a>
                    <a href="login.php">Log Out</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Side Bar -->
    <div class="sidebar">
        <div class="sidebar_inner">
            <br>
            <ul>
                <li>
                    <a href="dashboard.php">
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="managePosts.php">
                        <span class="text">Manage Posts</span>
                    </a>
                </li>
                <li>
                    <a href="manageMembers.php">
                        <span class="text">Manage Members</span>
                    </a>
                </li>
                <li>
                    <a href="postAnalyzerML.php">
                        <span class="text">ML Post Analyzer</span>
                    </a>
                </li>
                <li>
                    <a href="manageSponsorships.php">
                        <span class="text">Manage Sponsorships</span>
                    </a>
                </li>
                <li>
                    <a href="contactUsRequests.php">
                        <span class="text">Contact Us Requests</span>
                    </a>
                </li>
                <li>
                    <a href="adminGuidance.php">
                        <span class="text">Admin Guidance</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main_container">
        <h1>New Message</h1>
        <br>
        <div class="alert">
            <p>Please type your message and click send once you are ready.</p>
        </div>
        <br>
        <h2 id="message"></h2>
        <br>

        <div class="container">

            <form class="sponsorForm" id="messageForm">
                <h3>New Message</h3>
                <br>

                <label for="sender">From: <br></label>
                <input type="text" id="sender" name="from" placeholder="admin@nunite.com">
                <br>
                <br>

                <label for="receiver">To: <br></label>
                <input type="text" id="receiver" name="to">
                <br>
                <br>

                <label for="subject">Subject: <br></label>
                <input type="text" id="subject" name="subject">
                <br>
                <br>

                <label for="message">Message: <br></label>
                <input type="text" id="message" name="description">
                <br>
                <br>
                <br>
                <input id="sendButton" type="submit" value="SEND MESSAGE">
            </form>

            <script>
                document.getElementById("sendButton").onclick = function () {
                    alert("Your Message Has Been Sent!");
                };
            </script>

            <br>
            <h2 id="message2"></h2>

        </div>
    </div>
</div>




<!-- Javascript Side Bar Animation-->
<script src="sidebarAnimation.js"></script>

</body>
</html>