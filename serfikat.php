<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JagoeCoding - Unduh Sertifikat</title>
    <link href="https://fonts.googleapis.com/css2?family=Freckle+Face&display=swap" rel="stylesheet"> <!-- Font interaktif -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #1a1a1a, #4b0082);
            /* Gradien ungu gelap dan hitam */
            color: #ffffff;
            /* Warna teks putih */
            padding: 50px;
            text-align: center;
            overflow: hidden;
            /* Menghindari scrollbar */
            animation: backgroundMove 10s ease infinite;
            /* Animasi bergerak */
        }

        @keyframes backgroundMove {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        h1 {
            font-family: 'Freckle Face', cursive;
            /* Font baru untuk judul */
            font-size: 48px;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #ff00cc, #3333ff, #00ccff);
            /* Gradien warna-warni */
            -webkit-background-clip: text;
            /* Memotong latar belakang untuk efek teks */
            -webkit-text-fill-color: transparent;
            /* Mengisi warna teks menjadi transparan */
            animation: fadeIn 2s;
            /* Animasi muncul untuk judul */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        p {
            font-size: 24px;
            margin-bottom: 30px;
            animation: slideIn 2s;
            /* Animasi slide untuk paragraf */
        }

        @keyframes slideIn {
            from {
                transform: translateY(20px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        button {
            background-color: #8e44ad;
            /* Warna ungu */
            color: white;
            border: none;
            padding: 15px 30px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 20px;
            transition: background-color 0.3s ease, transform 0.2s;
            /* Transisi untuk warna dan transformasi */
        }

        button:hover {
            background-color: #732d91;
            /* Warna ungu gelap saat hover */
            transform: scale(1.05);
            /* Efek pembesaran saat hover */
        }

        .container {
            background-color: rgba(44, 44, 44, 0.8);
            /* Warna latar belakang kontainer dengan transparansi */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            display: inline-block;
            animation: bounce 2s infinite;
            /* Animasi bounce untuk kontainer */
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-10px);
            }

            60% {
                transform: translateY(-5px);
            }
        }

        .icons {
            margin-top: 40px;
        }

        .icon {
            display: inline-block;
            margin: 0 15px;
        }

        .icon img {
            width: 50px;
            /* Ukuran ikon */
            transition: transform 0.3s;
            /* Transisi untuk efek hover */
        }

        .icon img:hover {
            transform: scale(1.1);
            /* Efek pembesaran saat hover */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>JagoeCoding</h1>
        <p>Untuk mengunduh sertifikat Anda, silakan klik tombol di bawah ini.</p>
        <a href="download_certificate.php"><button>Unduh Sertifikat</button></a>
    </div>

    <div class="icons">
        <div class="icon">
            <img src="https://img.icons8.com/color/48/000000/php.png" alt="PHP">
        </div>
        <div class="icon">
            <img src="https://img.icons8.com/color/48/000000/java-coffee-cup-logo.png" alt="Java">
        </div>
        <div class="icon">
            <img src="https://img.icons8.com/color/48/000000/python.png" alt="Python">
        </div>
    </div>
</body>

</html>