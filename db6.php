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
    while ($row = $stmt->fetch()) : ?>
        ชื่อ: <?=$row["name"]?><br>
        ที่อยู่ : <?=$row["address"]?><br>
        เบอร์โทร: <?=$row["mobile"]?><br>
        email: <?=$row["email"]?><br>
        <a href='#' onclick='Delete("<?=$row["username"]?>")'>ลบ</a>
        <hr>
    <?php endwhile ?>
</body>

</html>
