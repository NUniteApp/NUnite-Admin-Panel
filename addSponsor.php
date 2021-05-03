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
        <h1>Add New Sponsor</h1>
        <br>
            <div class="alert">
                <p>Before a New Sponsor can be added to NUnite, please create a Contract with the Sponsor and NUnite. Refer to the Admin Guidance Section (Admin Policy Procedure Document).</p>
            </div>
        <br>
        <h2 id="message"></h2>
        <br>

        <div class="container">

            <div class="sponsorForm" id="newSponsor">
                <h3>Sponsor Details</h3>
                <br>

                <label for="post_user_id">User Id: <br></label>
                <input id="post_user_id" type="text" name="post_user_id">

                <br>
                <br>

                <label for="post_title">Title: <br></label>
                <input id="post_title" type="text" name="post_title">
                <br>
                <br>

                <label for="post_description">Post Description: <br></label>
                <input id="post_description" type="text" name="post_description">
                <br>
                <br>

                <label for="post_image">Post Image: <br></label>
                <input type="file" id="sponsorPostImage" name="sponsorPostImage" accept="image/png, image/jpeg">

                <br>
                <br>

                <br>
                <button onclick="addSponsor()">Add Sponsor</button>
            </div>

                <script>
                const addSponsor = async () => {
                    let post_user_id = document.getElementById("post_user_id").value ;
                    let post_title = document.getElementById("post_title").value;
                    let post_description = document.getElementById("post_description").value;
                    const selectedFile = document.getElementById('sponsorPostImage').files[0];
                    console.log(selectedFile);

                    console.log(post_user_id);
                    console.log(post_title);
                    console.log(post_description);

                //     let data = {
                //         post_user_id: post_user_id,
                //         post_title: post_title,
                //         post_description: post_description,
                // }

                    var data = new FormData();
                    data.append('post_title', post_title);
                    data.append('post_description', post_description);
                    data.append('post_user_id', post_user_id);
                    data.append('postimage', selectedFile );


                    console.log(data);

                    let resAdd = await axios.post('https://nunite.xyz/assessment-backend/api/create_sponsorships', data, {
                        headers: {
                            "Content-Type": "multipart/form-data; ",
                        },
                    });

                    console.log(resAdd.data);

                    document.getElementById("message").innerHTML = "Success! The Sponsor Has Been Uploaded.";

                }
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