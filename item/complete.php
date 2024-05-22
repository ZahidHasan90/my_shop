<?php
session_start();
session_regenerate_id(true);

if (isset($_SESSION['my_shop']['cart'])) {
    unset($_SESSION['my_shop']['cart']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<body>
    <main class="m-auto w-50">
        <h2 class="p-2 text-center">購入完了</h2>
        <p>
            お買い上げありがとうございました。
        </p>
        <div class="d-flex mt-3">
            <a href="../" class="btn btn-outline-primary w-50 me-2">トップーページ</a>
            <a href="../item/" class="btn btn-outline-primary w-50">商品一覧</a>
        </div>
    </main>
</body>

</html>