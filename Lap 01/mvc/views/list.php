<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Danh sanh san pham</h1>
    <a href="?ctr=create">Them san pham</a>
    <table border="1">
        <tr>
            <th>carName</th>
            <th>image</th>
            <th>price</th>
            <th>description</th>
            <th>version</th>
            <th>gear</th>
            <th>origin</th>
            <th>brand_id</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        <?php foreach ($products as $productss) { ?> <tr>
                <th><?= $productss['carName'] ?></th>
                <th><img width="100" src="uploads/<?= $productss['image'] ?>" alt=""></th>
                <th><?= $productss['price'] ?></th>
                <th><?= $productss['description'] ?></th>
                <th><?= $productss['version'] ?></th>
                <th><?= $productss['gear'] ?></th>
                <th><?= $productss['origin'] ?></th>
                <th><?= $productss['brand_id'] ?></th>
                <th><a href="?ctr=edit-car&id=<?= $productss['id'] ?>">edit</a></th>
                <th><a href="?ctr=delete-car&id=<?= $productss['id'] ?>">delete</a></th>
                <th><a href="?ctr=show-car&id=<?= $productss['id'] ?>">show</a></th>
            </tr>
        <?php } ?>
    </table>
</body>

</html>