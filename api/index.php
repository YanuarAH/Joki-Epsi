<?php
require_once dirname(__DIR__) . '/config/games.php';
$page_title = 'Beranda - ' . $site_config['site_name'];
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $site_config['site_description']; ?>">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include dirname(__DIR__) . '/includes/header.php'; ?>

    <main class="main-content">

        <!-- Carousel Section -->
        <section class="carousel-section">
            <div class="container">
                <div class="carousel-container">
                    <div class="carousel-wrapper">
                        <!-- Carousel Slides -->
                        <div class="carousel-slide active">
                            <div class="carousel-content">
                                <h2 class="carousel-title">Selamat Datang di Joki Epsi</h2>
                                <p class="carousel-subtitle">Platform joki game terpercaya untuk semua kebutuhan gaming Anda</p>
                            </div>
                        </div>
                        <div class="carousel-slide">
                            <div class="carousel-content">
                                <h2 class="carousel-title">Joki Murah Terpercaya</h2>
                                <p class="carousel-subtitle">Harga terjangkau dengan kualitas layanan terbaik dan hasil memuaskan</p>
                            </div>
                        </div>
                        <div class="carousel-slide">
                            <div class="carousel-content">
                                <h2 class="carousel-title">Support lewat Saweria/Epsi</h2>
                                <p class="carousel-subtitle">Dukung kami melalui donasi untuk layanan yang lebih baik</p>
                            </div>
                        </div>
                        <div class="carousel-slide">
                            <div class="carousel-content">
                                <h2 class="carousel-title">Joki Lain Contact WA/TikTok</h2>
                                <p class="carousel-subtitle">Hubungi kami untuk layanan joki game lainnya yang tidak tersedia</p>
                            </div>
                        </div>
                    </div>

                    <!-- Carousel Navigation -->
                    <div class="carousel-nav">
                        <button class="carousel-btn prev" onclick="prevSlide()" aria-label="Previous slide">‹</button>
                        <button class="carousel-btn next" onclick="nextSlide()" aria-label="Next slide">›</button>
                    </div>

                    <!-- Carousel Indicators -->
                    <div class="carousel-indicators">
                        <button class="indicator active" onclick="goToSlide(0)" aria-label="Go to slide 1"></button>
                        <button class="indicator" onclick="goToSlide(1)" aria-label="Go to slide 2"></button>
                        <button class="indicator" onclick="goToSlide(2)" aria-label="Go to slide 3"></button>
                        <button class="indicator" onclick="goToSlide(3)" aria-label="Go to slide 4"></button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Saweria Support Section -->
        <section class="saweria-section">
            <div class="container">
                <div class="saweria-banner">
                    <div class="saweria-content">
                        <div class="saweria-icon">💰</div>
                        <div class="saweria-text">
                            <h3 class="saweria-title">Dukung Kami via Saweria</h3>
                            <p class="saweria-subtitle">Bantu kami memberikan layanan yang lebih baik</p>
                        </div>
                    </div>
                    <div class="saweria-action">
                        <a href="<?php echo $site_config['contact']['saweria']; ?>"
                            target="_blank" class="btn-saweria">
                            <span class="btn-icon">💝</span>
                            <span class="btn-text">Support Saweria</span>
                            <span class="btn-arrow">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Giveaway Support Section -->
        <section class="giveaway-section">
            <div class="container">
                <div class="giveaway-banner">
                    <div class="giveaway-content">
                        <!-- Tombol buka popup -->
                        <button class="btn-detail" onclick="openModal()">Lihat Detail</button>

                        <!-- Popup modal -->
                        <div id="imageModal" class="modal">
                            <div class="modal-content">
                                <span class="close" onclick="closeModal()">&times;</span>
                                <img src="/assets/images/Detail-GA.png" alt="Giveaway Detail" class="modal-image">
                            </div>
                        </div>
                    </div>
                    <div class="giveaway-action">
                        <a href="https://bit.ly/gachallengegame" target="_blank" class="btn-giveaway">
                            <span class="btn-text">Join Giveaway</span>
                            <span class="btn-icon">
                                <img src="/assets/images/giveaway-icon.png" alt="Giveaway Icon" class="giveaway-img-icon">
                            </span>
                            <span class="btn-arrow">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Games Grid -->
        <section class="games-section">
            <div class="container">
                <h2 class="section-title">All Games</h2>
                <div class="games-grid">
                    <?php foreach ($games as $game_id => $game): ?>
                        <a href="games/<?php echo $game_id; ?>-categories.php" class="game-card">
                            <div class="game-image">
                                <img src="<?php echo $game['image']; ?>" alt="<?php echo $game['title']; ?>"
                                    onerror="this.src='assets/images/placeholder.jpg'">
                            </div>
                            <div class="game-title"><?php echo $game['title']; ?></div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

    </main>

    <?php include dirname(__DIR__) . '/includes/footer.php'; ?>
    <script>
        function openModal() {
            document.getElementById("imageModal").classList.add("show");
        }

        function closeModal() {
            document.getElementById("imageModal").classList.remove("show");
        }

        window.onclick = function(event) {
            const modal = document.getElementById("imageModal");
            if (event.target === modal) {
                closeModal();
            }
        }
    </script>

</body>

</html>