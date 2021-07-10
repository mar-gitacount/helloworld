<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="base.css">
</head>

<body>
    <section>
        <h1>つまり</h1>
        <ul>
        </ul>
        <p>
            めちゃ簡単にいうとリーナス・トーバルズっておっさんが作ったソースコードの履歴を行き来できる便利なツールってことです。

        </p>
        <div class="pic_wrap pic2_wrap">
            <img src="./picture/fuckhidden.png" id="fuckhidden" class="fuckhidden is-hidden " alt="">
            <img src="./picture/11.jpeg" alt="">
            <p class="fuck">この中指立てているおっさん</p>
        </div>

        <p>
            <a href="3.php">next</a>
        </p>
    </section>
    <script>
        const fuckhidden = document.getElementById("fuckhidden");
        window.setTimeout(function() {
            fuckhidden.classList.toggle('is-hidden');
        }, 3000);
    </script>
</body>

</html>