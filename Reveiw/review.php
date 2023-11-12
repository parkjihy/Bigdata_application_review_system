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
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
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
                <a href="ranking.php">
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
        <h1>Ranking_review</h1>
        <span>Overall ranking by stars (0-5), reviews (also for each store)</span>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "restaurant_data";
        
            // MySQL 연결
            $conn = new mysqli($servername, $username, $password, $dbname);
        
            // 연결 확인
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        
            // 각 상점별 평균 랭킹 쿼리
            $sql = "SELECT store_id, AVG(ranking) as avg_ranking
                    FROM Reviews
                    GROUP BY store_id
                    ORDER BY avg_ranking ASC";
        
            $result = $conn->query($sql);
        
            // 결과 출력
            if ($result->num_rows > 0) {
                echo "<table><tr><th>Store ID</th><th>Average Ranking</th></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["store_id"] . "</td><td>" . $row["avg_ranking"] . "</td></tr>";
                }
                echo "</table>";
            } else {
                echo "No results found.";
            }
        
            // 연결 종료
            $conn->close();
        ?>
    </div>
</body>
</html>