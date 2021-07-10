<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="base.css">
</head>

<body>
    <section>
        <h1>黒い画面問題..</h1>
        <p>
            gitは通常コマンドプロンプト(windows)やターミナル(Mac)で利用します。
        </p>
        <div class="pic_wrap">
            <img src="./picture/4.jpeg" alt="">
            <img src="./picture/5.jpeg" alt="">
        </div>
        <div class="pic_wrap">
            <img src="./picture/6.png" alt="">
            <div id="fukidasi_wrap" class="is-hidden">
                <div class="balloon2-left">
                    <p class="fukidasi">ハッカーの人とかが使う奴ですか?</p>
                </div>
            </div>
        </div>
        <p>
            <a href="5.php">next</a>
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