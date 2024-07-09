<?php
require_once "config.php";
require_once "koneksi.php";

$sql = "SELECT id, judul, deskripsi, isi, tgl_publish, penulis, gambarr FROM artikel WHERE id = '".$_GET['id']."'";
$result = $conn->query($sql);

$article = $result->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Artikel</title>
    <style>
        body {
            font-family: Arial, sans-serif; /* Default font */
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .content {
            text-align: justify;
            font-family: 'Georgia', serif; /* Change font type */
            font-size: 18px; /* Change font size */
            line-height: 1.6; /* Change line height */
            margin-bottom: 20px; /* Space between paragraphs */
        }
        img {
            max-width: 100%;
            height: auto;
        }
        .article-title {
            font-size: 2.5em; /* Default font size for large screens */
            margin-bottom: 20px;
        }
        @media (max-width: 1200px) {
            .article-title {
                font-size: 2.2em;
            }
        }
        @media (max-width: 992px) {
            .article-title {
                font-size: 2em;
            }
        }
        @media (max-width: 768px) {
            .article-title {
                font-size: 1.8em;
            }
        }
        @media (max-width: 576px) {
            .article-title {
                font-size: 1.6em;
            }
        }
    </style>
</head>
<body>
    <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <div class="col-lg-12 px-0">
                <h1 class="display-4 fst-italic article-title"><?php echo $article['judul']; ?></h1>
                <img src="/situs-berita/uploads/<?php echo $article['gambarr']; ?>" alt="Article Image" />
                <p class="lead my-3 content"><?php echo nl2br($article['isi']); ?></p> <!-- Use nl2br to preserve line breaks -->
            </div>
        </div>
    </main>
</body>
</html>