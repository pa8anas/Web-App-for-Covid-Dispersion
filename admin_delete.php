<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body class="loggedin">
<nav class="navtop">
    <div>
        <h1>Covid-19 Tracing</h1>

        <!-- Navigation Bar -->
        <a href="admin.php"><i class="fas fa-user"></i>Home Page</a>
        <a href="admin_stats.php"><i class="fas fa-chart-line"></i>Stats</a>
        <a href="admin_upload.php"><i class="fas fa-cloud-upload-alt"></i>Upload</a>
        <a href="admin_delete.php"><i class="selected fas fa-trash-restore-alt"></i>Delete</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>
</nav>
<div class="content">
<h2>Delete All Pois</h2>
    <div>
        <form action="delete.php">
            <input type="submit" value="Delete all location data"/>
        </form>
    </div>

</div>

</body>
</html>


