<?php include "connect.php" ?>
<html>

<head>
    <meta charset="utf-8">
    <script>
        function Delete(username) {
            var ans = confirm("ต้องการลบชื่อ " + username);
            if (ans == true)
                document.location = "delete.php?username=" + username;
        }
    </script>
</head>

<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo "ชื่อ: " . $row["name"] . "<br>";
        echo "ที่อยู่ : " . $row["address"] . "<br>";
        echo " เบอร์โทร: " . $row["mobile"] . "<br>";
        echo " email: " . $row["email"] . "<br>";
        echo "<a href='#' onclick='Delete(" . $row["username"] . ")'>ลบ</a>";

        echo "<hr>\n";
    }
    ?>
</body>

</html>