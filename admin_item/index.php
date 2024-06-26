<?php
// データベースに接続
require_once '../db.php';

// itemsテーブルからレコードを取得
$sql = "SELECT * FROM items;";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$items = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2 class="h2">商品⼀覧</h2>
        <table class="table">
            <thead>
                <tr>
                    <th><a class="btn btn-outline-primary" href="input.php">新規</a></th>
                    <th>コード</th>
                    <th>商品名</th>
                    <th>価格</th>
                    <th>在庫数</th>
                    <th>更新⽇</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item): ?>
                <tr>
                    <td></td>
                    <td><?php echo $item['code']; ?></td>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['price']; ?></td>
                    <td><?php echo $item['stock']; ?></td>
                    <td><?php echo $item['updated_at']; ?></td>
                    <td><a class="btn btn-outline-primary" href="edit.php?id=<?php echo $item['id']; ?>">編集</a></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>
