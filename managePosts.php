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
            <a href="#">Reports</a>
            <a href="#">Messages</a>
            <div class="dropdown">
                <button class="dropbtn"><i class="fa fa-user"></i> Rajan Makh <i class="fa fa-caret-down"></i></button>
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
        <h1>Manage Posts</h1>
        <br>

        <div class="container">
            <?php
            $myData = file_get_contents("http://unn-w18013561.newnumyspace.co.uk/nunite_api/api/admin_posts");
            $myObject = json_decode($myData);
            $myObjectMap = $myObject->data;
            ?>
                <script>
                    // Make a request for a user with a given ID
                    axios.get('http://unn-w18013561.newnumyspace.co.uk/nunite_api/api/admin_posts')
                        .then(function (response) {
                            // handle success
                            console.log(response.data.data);
                        })
                        .catch(function (error) {
                            // handle error
                            console.log(error);
                        })
                        .then(function () {
                            // always executed
                        });
                </script>
            <table>

                <thead>
                <tr>
                    <th>User Id</th>
                    <th>Username</th>
                    <th>Post Id</th>
                    <th>Post Title</th>
                    <th>Time and Date</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach($myObjectMap as $key => $item): ?>
                    <tr>
                        <td><?PHP echo $item->user_id; ?></td>
                        <td><?PHP echo $item->username; ?></td>
                        <td><?PHP echo $item->post_id; ?></td>
                        <td><?PHP echo $item->post_title; ?></td>
                        <td><?PHP echo $item->post_date; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>

            </table>
        </div>

    </div>
</div>

<!-- Javascript Side Bar Animation-->
<script>
    var li_items = document.querySelectorAll(".sidebar ul li");
    var toggle_menu = document.querySelector(".toggle-menu");
    var wrapper = document.querySelector(".wrapper");


    li_items.forEach((li_item)=>{
        li_item.addEventListener("mouseenter", ()=>{
            if(wrapper.classList.contains("click_collapse")){
            }
            else{
                li_item.closest(".wrapper").classList.remove("hover_collapse");
            }
        })
    });

    li_items.forEach((li_item)=>{
        li_item.addEventListener("mouseleave", ()=>{
            if(wrapper.classList.contains("click_collapse")){
            }
            else{
                li_item.closest(".wrapper").classList.add("hover_collapse");
            }
        })
    });

    toggle_menu.addEventListener("click", () => {
        toggle_menu.closest(".wrapper").classList.toggle("click_collapse");
        toggle_menu.closest(".wrapper").classList.toggle("hover_collapse");
    })
</script>

</body>
</html>