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
        <h1>そこでgithubの登場です</h1>
        <p>
            githubとソースツリーを使えば直感的に操作する事が可能なんです。
        </p>
        <div class="pic_wrap">
            <img src="./picture/7.png" alt="">
            <img src="./picture/8.jpeg" alt="">
        </div>
        <div class="pic_wrap">
            <img src="./picture/6.png" alt="">
            <div id="fukidasi_wrap" class="is-hidden">
                <div class="balloon2-left">
                    <p class="fukidasi">ソース?なんですか?</p>
                </div>
            </div>
        </div>
        <p>
            <a href="6.php">next</a>
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