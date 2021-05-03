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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css" integrity="sha512-3icgkoIO5qm2D4bGSUkPqeQ96LS8+ukJC7Eqhl1H5B2OJMEnFqLmNDxXVmtV/eq5M65tTDkUYS/Q0P4gvZv+yA==" crossorigin="anonymous" />
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
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
        <h1>Reports</h1>
        <br>
        <h2 id="message"></h2>
        <br>

        <div class="container">
            <script>
                // Make a request for a user with a given ID
                axios.get('https://nunite.xyz/assessment-backend/api/admin_reported_posts')
                    .then(function (response) {
                        // handle success
                        console.log(response.data.data);

                        if (response.data.data === null) return;
                        let apiData = response.data.data;
                        apiData.map((data, i) => {
                            let dataRow = document.createElement("tr");
                            dataRow.setAttribute('id', 'posts-' + i);
                            document.getElementById("dataTable").appendChild(dataRow);

                            //Loops Through JSON Objects
                            let post_id;
                            Object.keys(data).forEach((key, k, objArray) => {
                                console.log(key + ' - ' + data[key]) // key - value
                                let rowCol = document.createElement('td');
                                rowCol.innerText = data[key];
                                document.getElementById('posts-' + i).appendChild(rowCol);

                                if(key === 'post_id') {
                                    post_id = data[key];
                                }

                                if(k === objArray.length - 1) {
                                    let rowCol = document.createElement('td');
                                    document.getElementById('posts-' + i).appendChild(rowCol);

                                    let btnCol1 = document.createElement("button");
                                    btnCol1.innerHTML = "MESSAGE";
                                    btnCol1.setAttribute("onclick", "messageUser(" + post_id + ")");
                                    rowCol.appendChild(btnCol1);
                                    btnCol1.className = "messageButton";

                                    btnCol1.onclick = function () {
                                        location.href = "newMessage.php";
                                    };

                                    let btnCol = document.createElement("button");
                                    btnCol.innerHTML = "DELETE";
                                    btnCol.setAttribute("onclick", "deleteReportedPost(" + post_id + ")");
                                    rowCol.appendChild(btnCol);
                                    btnCol.className = "deleteButton";

                                    let btnCol2 = document.createElement("button");
                                    btnCol2.innerHTML = "BAN";
                                    btnCol2.setAttribute("onclick", "banUser(" + post_id + ")");
                                    rowCol.appendChild(btnCol2);
                                    btnCol2.className = "banButton";

                                    btnCol2.onclick = function () {
                                        alert("This User Has Now Been Banned!");
                                    };
                                }

                            });

                        });
                    })
                    .catch(function (error) {
                        document.getElementById("message").innerHTML = err.name;
                    })
                    .then(function () {
                    });

                const deleteReportedPost = async (post_id) => {
                    let postData = {
                        post_id: post_id
                    }
                    let resDel = await axios.post('https://nunite.xyz/assessment-backend/api/delete_post',
                        postData );
                    console.log(resDel);
                    document.getElementById("message").innerHTML = "Success! The Post Has Been Deleted";
                    document.getElementById("message2").innerHTML = "Refresh The Page To See The Changes Applied.";
                }

            </script>

            <table>
                <thead>
                <tr>
                    <th>Report Id</th>
                    <th>Report Title</th>
                    <th>Report Text</th>
                    <th>PostId</th>
                    <th>Post Title</th>
                    <th>Post Description</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th style="color: limegreen">Actions</th>
                </tr>
                </thead>

                <tbody id="dataTable">

                </tbody>
            </table>

            <br>
            <h2 id="message2"></h2>

        </div>

    </div>
</div>

<!-- Javascript Side Bar Animation-->
<script src="sidebarAnimation.js"></script>

</body>
</html>