<!DOCTYPE html>
<html>
<head>
    <title>Website Radhit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        #dataContainer {
            display: none;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f7f7f7;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        img {
            max-width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        .bold-text {
            font-weight: bold;
            font-size: 18px;
            color: red;
        }
    </style>
</head>
<body>
    <h1>Bapaknya sampek bingung cik</h1>

    <button id="tampilkanData">Penced en li</button>

    <div id="dataContainer">
        <p class="bold-text">Data anda telah tersebar karna telah menekan tombol haram</p>
        <img src="img/matekae.jpg" alt="Gambar Contoh" width="200px">
        <h2>Data yang terbongkar:</h2>
        <table>
            <tr>
                <td>Nama</td>
                <td>Aris Yoga Saputra</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>2 Februari</td>
            </tr>
            <tr>
                <td>Alamat rumah</td>
                <td>Jl Sadewa Wagir</td>
            </tr>
            <tr>
                <td>No Handphone</td>
                <td>+62 897-4808-949</td>   
            </tr>
            <tr>
                <td>Sekolah saat ini</td>
                <td>SMK 11 Malang</td>
            </tr>
        </table>
        <button id="kembaliKeAwal">Kembali ke Halaman Awal</button>
    </div>

    <audio id="suara" src="audio/acumalaka.mp3"></audio>

    <script>
        // JavaScript untuk menampilkan data ketika tombol ditekan dan memainkan suara
        var tombolTampilkan = document.getElementById("tampilkanData");
        var tombolKembali = document.getElementById("kembaliKeAwal");
        var container = document.getElementById("dataContainer");
        var suara = document.getElementById("suara");

        tombolTampilkan.addEventListener("click", function() {
            container.style.display = "block";
            suara.play(); // Memainkan suara saat tombol ditekan
        });

        tombolKembali.addEventListener("click", function() {
            container.style.display = "none";
        });
    </script>
</body>
</html>
