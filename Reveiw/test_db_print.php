<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <script src="test.js" defer></script>
    <title>Management</title>
</head>
<body id="page-body">
    <nav>
        <ul>
            <li>
                <a href="test.html" class="logo">
                    <img src="logo.jpg" alt="nav-bars">
                    <span class="nav-item">Menu</span>
                </a>
            </li>
            <li>
                <a href="profile.html">
                    <i class="fa-regular fa-user"></i>
                    <span class="nav-item">Profile</span>
                </a>
            </li>
            <li>
                <a href="stores.html">
                    <i class="fa-solid fa-shop"></i>
                    <span class="nav-item">Stores</span>
                </a>
            </li>
            <li>
                <a href="ranking.html">
                    <i class="fa-regular fa-star"></i>
                    <span class="nav-item">Ranking</span>
                </a>
            </li>
            <li>
                <a href="analytics.html">
                    <i class="fa-solid fa-chart-simple"></i>
                    <span class="nav-item">Analytics</span>
                </a>
            </li>
            <div class="logout">
                <li>
                    <a href="settings.html">
                        <i class="fa-solid fa-gear"></i>
                        <span class="nav-item">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="mainpage.html">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span class="nav-item">Logout</span>
                    </a>
                </li>
            </div>    
        </ul>
    </nav>
    <div class="section">
        <h1>Test</h1>
        <br>
        <span>Test sql query:</span>
        <br><br>
        <?php
        $mysqli = mysqli_connect("127.0.0.1","root","","test");
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n",mysqli_connect_error());
            exit();
        }
        else {
            $sql = "select * from test";
            $res = mysqli_query($mysqli,$sql);
            if ($res) {
                while ($newArray = mysqli_fetch_array($res,MYSQLI_ASSOC)) {
                    $id = $newArray['test_id'];
                    $name = $newArray['test_name'];
                    $age = $newArray['test_age'];
                    $address = $newArray['test_address'];
                    echo "The ID is ".$id.", name is ".$name.", age is ".$age.
                    " and position is ".$address.".","<br/>";
                    }
        } else {
            printf("Could not retrieve records: %s\n",mysqli_error($mysqli));
        }
        mysqli_free_result($res);
        mysqli_close($mysqli);
        }
        ?>
    </div>
</body>
</html>
