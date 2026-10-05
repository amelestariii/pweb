<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Pribadi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <main class="portfolio-shell">
        <header class="hero">
            <div class="hero-copy">
                <p class="eyebrow">PORTOFOLIO <span>•</span> WEB DEVELOPER</p>
                <h1>Portofolio <span>Pribadi</span></h1>
                <p class="hero-description">Saya membuat pengalaman web yang sederhana, berguna, dan menyenangkan untuk digunakan.</p>
                <nav class="hero-links" aria-label="Navigasi utama">
                    <a class="button button-light" href="#pengalaman">Lihat pengalaman <span aria-hidden="true">↘</span></a>
                    <a class="button button-outline" href="#kontak">Hubungi saya</a>
                </nav>
            </div>
            <figure class="hero-portrait">
                <img src="{{ asset('images/profile.jpg') }}" alt="Foto profil" class="profile-image">
                <figcaption>Web Developer</figcaption>
            </figure>
            <span class="hero-index" aria-hidden="true">01 / 05</span>
        </header>

        <section class="about-section" id="tentang">
            <div class="section-copy">
                <p class="eyebrow">01 — TENTANG SAYA</p>
                <h2>Mengubah ide menjadi pengalaman digital.</h2>
                <p>Saya adalah seorang developer yang berfokus pada pembuatan aplikasi web yang user-friendly dan efisien.</p>
            </div>
            <blockquote>
                <span class="quote-mark" aria-hidden="true">“</span>
                <p>Kreativitas adalah kunci untuk menciptakan solusi yang inovatif.</p>
                <footer>John Doe</footer>
            </blockquote>
        </section>

        <section class="content-section" id="pengalaman">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">02 — PERJALANAN</p>
                    <h2>Pengalaman kerja</h2>
                </div>
                <span class="heading-note">Tempat saya bertumbuh dan berkarya.</span>
            </div>
            <div class="table-wrap">
                <table class="experience-table">
                    <thead>
                        <tr>
                            <th>Perusahaan</th>
                            <th>Posisi</th>
                            <th>Tahun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PT. Teknologi Indonesia</td>
                            <td>Web Developer</td>
                            <td>2020 — Sekarang</td>
                        </tr>
                        <tr>
                            <td>PT. Kreatif Digital</td>
                            <td>Frontend Developer</td>
                            <td>2018 — 2020</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="content-section" id="organisasi">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">03 — KONTRIBUSI</p>
                    <h2>Pengalaman organisasi</h2>
                </div>
                <span class="heading-note">Peran dan kegiatan di luar pekerjaan.</span>
            </div>
            <div class="table-wrap">
                <table class="experience-table">
                    <thead>
                        <tr>
                            <th>Organisasi</th>
                            <th>Jabatan atau peran</th>
                            <th>Periode</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Himpunan Mahasiswa Informatika</td>
                            <td>Ketua Departemen Minat dan Bakat</td>
                            <td>September 2026 - Sekarang</td>
                        </tr>
                        <tr>
                            <td>UKM Tahungoding</td>
                            <td>Bendahara Divisi SDM</td>
                            <td>Oktober 2025 - Agustus 2026</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="content-section interests-section" id="minat">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">04 — DI LUAR PEKERJAAN</p>
                    <h2>Hal-hal yang saya suka</h2>
                </div>
            </div>
            <div class="interest-grid">
                <div class="interest-group">
                    <h3>Waktu santai</h3>
                    <ul>
                        <li>Membaca buku novel</li>
                        <li>Mendengarkan musik</li>
                        <li>Menonton film</li>
                        <li>Menonton windah</li>
                        <li>Jajan</li>
                        <li>Makan</li>
                    </ul>
                </div>
                <div class="interest-group">
                    <h3>Selalu ingin belajar</h3>
                    <ul>
                        <li>Teknologi baru</li>
                        <li>Memasak</li>
                        <li>Berkebun</li>
                        <li>Menjadi orang baik  </li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="content-section media-section" id="media">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">05 — PILIHAN SAYA</p>
                    <h2>Musik & video</h2>
                </div>
            </div>
            <div class="media-grid">
                <article class="media-item">
                    <h3>good 4 u</h3>
                    <p class="spotify-artist">Olivia Rodrigo</p>
                    <iframe
                        class="spotify-embed"
                        title="good 4 u oleh Olivia Rodrigo di Spotify"
                        src="https://open.spotify.com/embed/track/4ZtFanR9U6ndgddUvNcjcG?utm_source=generator"
                        width="100%"
                        height="152"
                        loading="lazy"
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                        referrerpolicy="strict-origin-when-cross-origin">
                    </iframe>
                </article>
                <article class="media-item">
                    <h3>Video karya</h3>
                    <div class="video-frame">
                        <iframe
                            src="https://www.youtube-nocookie.com/embed/rx223e8z4DQ"
                            title="Video karya"
                            loading="lazy"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen>
                        </iframe>
                    </div>
                </article>
            </div>
        </section>

        <footer class="site-footer" id="kontak">
            <div>
                <p class="eyebrow">TERHUBUNG</p>
                <h2>Mari mulai percakapan.</h2>
            </div>
            <div class="social-links">
                <a href="https://www.instagram.com/amelestariii" target="_blank" rel="noopener noreferrer">Instagram <span aria-hidden="true">↗</span></a>
                <a href="https://www.linkedin.com/in/amelia-puji-lestari?utm_source=share_via&utm_content=profile&utm_medium=member_android" target="_blank" rel="noopener noreferrer">LinkedIn <span aria-hidden="true">↗</span></a>
            </div>
            <p class="copyright">&copy; {{ date('Y') }} Portofolio Pribadi</p>
        </footer>
    </main>
</body>

</html>