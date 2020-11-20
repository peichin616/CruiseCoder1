<?php

?>

<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cruise Coders | HTML初級星球</title>
    <link rel="stylesheet" href="../css/main.css">

</head>

<body>
    <!-- include('layout/login.php'); -->
    <div class="wrap quiz">
        <?php
        include('layout/spacebackground.php');
        include('layout/header.php');
        ?>
        <main>
            <h2>HTML初級星球</h2>
            <section>
                <img src="../images/quiz/spacebase.svg" alt="">
                <div class="notice">
                    <div>測驗須知</div>
                    <div>測驗時間：20 分鐘</div>
                    <div>總共題目：10題</div>
                    <div>確認選項後，請按下一題繼續作答</div>
                    <input type="checkbox">我不會諮詢任何外部來源（包括網站，書籍或人）或從中複製代碼來完成這些任務。
                    <input type="checkbox">我不會複製、分發或公開顯示我在此測試過程中遇到的任何信息。
                </div>
                <a href="#0">開始試煉</a>
            </section>
        </main>
        <?php
        include('layout/footer.php');
        ?>
        <script src="../js/quiz.js"></script>
    </div>
</body>

</html>