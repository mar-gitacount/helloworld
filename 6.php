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
        <h1>初学者にgithubの習得を勧める理由</h1>
        <ul>
            <li>企業ではほぼ必須のツール</li>
            <li>サーバーを契約しないでhpが作成する事ができる。</li>
            <li>仮にバグやエラーが起きてもやり直すことができる。</li>
            <li>差分が目で見れるのでバグやエラーの特定がしやすい。</li>
        </ul>
        <div class="pic_wrap">
            <img src="./picture/9.jpeg" alt="">
            <div id="fukidasi_wrap" class="is-hidden">
                <div class="balloon2-left">
                    <p class="fukidasi">めっちゃ便利やん</p>
                </div>
            </div>
        </div>
        <p>
            <a href=".php">next</a>
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