<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Portofolio</title>
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

    <section class="home">
        <div class="avatar"><img src="public/folder upload/profil.jpeg" alt="Avatar"></div>

        <h1>Halo, Saya [Muhammad Rayhan Fadhilah]</h1>
        <h3>Mahasiswa Sistem Informasi</h3>

        <p>
            Saya adalah mahasiswa yang sedang belajar dan mengembangkan
            kemampuan di bidang teknologi informasi. Saya tertarik
            mempelajari hal baru, bekerja sama dalam tim, dan membuat
            sebuah proyek sederhana.
        </p>

        <a href="about.html" class="tombol">Tentang Saya</a>
    </section>

    <footer>
        <p>MUHAMMAD RAYHAN FADHILAH_108052500125 | Hosted on fadhil.lab — Nginx on Rocky Linux</p>
    </footer>
    @vite('resources/js/app.js')
</body>
</html>
