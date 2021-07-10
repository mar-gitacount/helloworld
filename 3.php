<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="base.css">
</head>

<body>
    <section>
        <h1>で？なんの役に立つの??</h1>
        <ul>
        </ul>
        <p>
            システム開発ではバグや、不具合で動かないと日常茶飯事なのでそういった事象が起きた時に、
        <p>すぐに修正ができるのはシステム開発ではとても助かります。<span>ゲームでいうところのセーブポイントのようなものです。</span></p>
        </p>
        <div class="pic_wrap">
            <img src="./picture/3.jpeg" alt="">
            <div id="fukidasi_wrap" class="is-hidden">
                <div class="balloon2-left">
                    <p class="fukidasi">めっちゃ便利やでー</p>
                </div>
            </div>
        </div>
        <p>
            <a href="4.php">next</a>
        </p>
    </section>
    <script>
        const fukidasi = document.getElementById("fukidasi_wrap");
        window.setTimeout(function() {
            fukidasi.classList.toggle('is-hidden');
        }, 3000);
    </script>
</body>

</html>