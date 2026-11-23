<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
   @vite(['resources/sass/app.scss', 'resources/sass/web.scss'])
</head>
<body>

    <header>
        <h2>My Portofolio</h2>

        <nav>
            <a href="index.blade.php">Beranda</a>
            <a href="about.blade.php">Tentang</a>
            <a href="portofolio.blade.php">Portofolio</a>
            <a href="contact.blade.php">Kontak</a>
        </nav>
    </header>

    <section class="container">
        <h1>Proyek Saya</h1>

        <div class="project">
            <h2>1. Website Glowbie</h2>
            <p>
                Proyek aplikasi rekomendasi warna foundation
                berdasarkan warna dan undertone kulit.
            </p>
        </div>

        <div class="project">
            <h2>2. Sistem Informasi Pengelolaan SDM</h2>
            <p>
                Proyek perancangan sistem informasi untuk
                membantu pengelolaan data karyawan dan cuti.
            </p>
        </div>

        <div class="project">
            <h2>3. Angkringan Ladang Kencono</h2>
            <p>
                Proyek analisis supply chain management pada
                usaha makanan dan minuman.
            </p>
        </div>

    </section>

    <footer>
        <p>MUHAMMAD RAYHAN FADHILAH_108052500125 | Hosted on fadhil.lab — Nginx on Rocky Linux</p>
    </footer>
    @vite('resources/js/app.js')
</body>
</html>
