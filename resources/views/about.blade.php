<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya</title>
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
        <h1>Tentang Saya</h1>

        <p>
            Saya merupakan mahasiswa S1 Sistem Informasi
            Telkom University. Saat ini saya sedang mempelajari
            berbagai bidang teknologi informasi.
        </p>

        <h2>Pendidikan</h2>
        <p>S1 Sistem Informasi - Telkom University</p>

        <h2>Keahlian</h2>
        <ul>
            <li>Microsoft Word dan PowerPoint</li>
            <li>HTML dan CSS dasar</li>
            <li>Database dasar</li>
            <li>Kerja sama tim</li>
        </ul>

        <h2>Minat</h2>
        <p>
            Saya memiliki minat dalam bidang teknologi,
            desain website, dan pengembangan sistem informasi.
            Selain itu, saya juga menyukai olahraga badminton dan lari.
        </p>
    </section>

    <footer>
        <p>MUHAMMAD RAYHAN FADHILAH_108052500125 | Hosted on fadhil.lab — Nginx on Rocky Linux</p>
    </footer>
@vite('resources/js/app.js')
</body>
</html>
