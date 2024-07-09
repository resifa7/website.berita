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
    <!-- Sertakan Bootstrap jika diperlukan -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <main class="container">
        <h1 class="display-4 fst-italic article-title">Tentang</h1>
        <p class="lead my-3 content">Puji Syukur kami panjatkan ke hadirat Allah Yang Maha Esa, Karena berkat 
rahmat dan karunia-Nyalah sehingga Tugas Pemrograman Web ini dapat 
diselesaikan tepat pada waktunya. 
Terimakasih kami ucapkan kepada Ibu Wahyuni, S.Kom., M.Kom selaku 
dosen pengampu mata kuliah Pemrograman Web yang telah 
membimbing saya dalam membuat Website Berita ini. 

Saya sadar masih banyak kekurangan dalam pembuatan Website Berita ini 
untuk itu saya mohon kritik dan masukannya guna membuat saya 
jauh lebih baik lagi dalam membuat Website lain ke depan. </p>
    </main>
</body>
</html>
