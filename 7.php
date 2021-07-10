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
        <h1>基本的にgithubでは主に以下の用語を利用します</h1>
        <ul>
            <li>リモートリポジトリ</li>
            <li>ローカルリポジトリ</li>
            <li>ブランチ</li>
        </ul>
        <div class="pic_wrap">
            <img src="./picture/3.jpeg" alt="">
            <div id="fukidasi_wrap" class="is-hidden">
                <div class="balloon2-left">
                    <p class="fukidasi">色々あるけどとりあえずこれさえ抑えといてえてや〜</p>
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