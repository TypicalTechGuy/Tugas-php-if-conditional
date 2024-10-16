<?php


$products = [
    [
        "name" => "Apel",
        "description" => "Apel Merah",
        "price" => 10000,
        "image" => "https://www.balipost.com/wp-content/uploads/2017/12/balipostcom_makan-apel-setiap-hari-ini-10-manfaatnya_01-696x464.jpg"
    ],
    [
        "name" => "Jeruk",
        "description" => "Jeruk",
        "price" => 15000,
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-j4u16u7kkS40lN91djWL34LBEBBvI5LVkg&s"
    ],
    [
        "name" => "Mangga",
        "description" => "Mangga :yum:",
        "price" => 15000,
        "image" => "https://www.astronauts.id/blog/wp-content/uploads/2023/04/Manfaat-Kesehatan-Buah-Mangga-yang-Mungkin-Belum-Kamu-Ketahui.jpg"
    ],
    [
        "name" => "Pisang",
        "description" => "Pisang Kuning",
        "price" => 25000,
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqv97GNIQkhFZLoQYqG0tsc-f9cM8JpuO6KA&s"
    ],
    [
        "name" => "Northrop B-2 Spirit",
        "description" => "Northrop B-2 Spirit adalah pesawat perang yang digunakan untuk pengeboman",
        "price" => 31128792200000,
        "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a1/B-2_Spirits_on_Deployment_to_Indo-Asia-Pacific.jpg/800px-B-2_Spirits_on_Deployment_to_Indo-Asia-Pacific.jpg"
    ],
    [
        "name" => "Kelapa",
        "description" => "Kelapa Muda",
        "price" => 20000,
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDJGWgH4PbDgPQESSas_31DnkvXp9EpqKzWA&s"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 200px;
        }
        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            width: 25%;
            margin: 10px;
            padding: 20px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
            box-sizing: border-box;
        }
        .card img {
            width: 100%;
            height: 50%;
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
        }
        .card h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .card p {
            font-size: 1em;
            margin-bottom: 10px;
        }
        .card .price {
            font-weight: bold;
            color: #28a745;
            font-size: 1.2em;
        }
    </style>
</head>
<body>

<?php foreach ($products as $product) : ?>
    <div class="card">
        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        <h2><?php echo $product['name']; ?></h2>
        <p><?php echo $product['description']; ?></p>
        <p class="price">Rp <?php echo number_format($product['price'], 0, ',', '.'); ?></p>
    </div>
<?php endforeach; ?>

</body>
</html>