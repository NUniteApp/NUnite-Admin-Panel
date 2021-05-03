<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>NUnite Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css"
          integrity="sha512-3icgkoIO5qm2D4bGSUkPqeQ96LS8+ukJC7Eqhl1H5B2OJMEnFqLmNDxXVmtV/eq5M65tTDkUYS/Q0P4gvZv+yA=="
          crossorigin="anonymous"/>
</head>
<body>

<div class="wrapper hover_collapse">

    <!-- Navigation Bar -->
    <div class="top_navbar">
        <div class="logo">
            <div class="toggle-menu">
                <button><img src="images/NUnite_Logo.png" class="nunite-logo" alt="NUnite Logo" width="40" height="50">
                </button>
            </div>
        </div>

        <div class="navbar">
            <a
            <button class="refresh" onClick="window.location.reload();"><i class="fa fa-refresh fa-spin"></i> Refresh
            </button>
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
        <h1>NUnite Admin Dashboard</h1>
        <br>

        <div class="row">

            <div class="column">
                <div class="card">
                    <div class="analytics">

                        <?php //Call
                        $myData = file_get_contents("https://nunite.xyz/assessment-backend/api/total_users");
                        $myObject = json_decode($myData);
                        $myObjectMap = $myObject->data;
                        ?>
                        <p>
                            <i class="fa fa-users"> </i>
                            <?php foreach ($myObjectMap as $key => $item): //Display
                                echo $item->totalusers;
                            endforeach; ?>
                        </p>

                    </div>
                    <hr>
                    <div class="cardTitle">
                        <a href="manageMembers.php">
                            <h1>Total Users</h1>
                        </a>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="analytics">

                        <?php //Call
                        $myData = file_get_contents("https://nunite.xyz/assessment-backend/api/total_posts");
                        $myObject = json_decode($myData);
                        $myObjectMap = $myObject->data;
                        ?>
                        <p>
                            <i class="fa fa-file-alt"> </i>
                            <?php foreach ($myObjectMap as $key => $item): //Display
                                echo $item->totalposts;
                            endforeach; ?>
                        </p>

                    </div>
                    <hr>
                    <div class="cardTitle">
                        <a href="managePosts.php">
                            <h1>Total Posts</h1>
                        </a>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="analytics">

                        <?php //Call
                        $myData = file_get_contents("https://nunite.xyz/assessment-backend/api/total_reports");
                        $myObject = json_decode($myData);
                        $myObjectMap = $myObject->data;
                        ?>
                        <p>
                            <i class="fas fa-exclamation-triangle"></i>
                            <?php foreach ($myObjectMap as $key => $item): //Display
                                echo $item->totalreports;
                            endforeach; ?>
                        </p>

                    </div>
                    <hr>
                    <div class="cardTitle">
                        <a href="reports.php">
                            <h1>New Reports</h1>
                        </a>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="analytics">

                        <?php //Call
                        $myData = file_get_contents("https://nunite.xyz/assessment-backend/api/total_requests");
                        $myObject = json_decode($myData);
                        $myObjectMap = $myObject->data;
                        ?>
                        <p>
                            <i class="fas fa-envelope"></i>
                            <?php foreach ($myObjectMap as $key => $item): //Display
                                echo $item->totalrequests;
                            endforeach; ?>
                        </p>

                    </div>
                    <hr>
                    <div class="cardTitle">
                        <a href="contactUsRequests.php">
                            <h1>Contact Requests</h1>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="design-demo">
            <center><img src="images/design/admin.png" alt="admin" width="80%" height="60%"></center>
        </div>

    </div>
</div>

<!-- Javascript Side Bar Animation-->
<script src="sidebarAnimation.js"></script>

</body>
</html>