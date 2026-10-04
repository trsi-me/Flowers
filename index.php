<?php
require_once 'config.php';

// جلب المنتجات من قاعدة البيانات
$stmt = $pdo->query("SELECT * FROM products ORDER BY id");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>متجر الورد - بيع الورد أونلاين</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- شريط التنقل -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <i class="fas fa-rose"></i>
                <span>متجر الورد</span>
            </div>
            <ul class="nav-menu">
                <li><a href="index.php#home">الرئيسية</a></li>
                <li><a href="index.php#products">المنتجات</a></li>
                <li><a href="index.php#about">من نحن</a></li>
                <li><a href="guides.php">الدلائل</a></li>
                <li><a href="index.php#contact">اتصل بنا</a></li>
            </ul>
            <div class="cart-icon">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count">0</span>
            </div>
        </div>
    </nav>

    <!-- القسم الرئيسي -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>أجمل الورد بأفضل الأسعار</h1>
            <p>اكتشفي تشكيلة واسعة من الورد الطبيعي الطازج</p>
            <a href="#products" class="btn-primary">تسوقي الآن</a>
        </div>
    </section>

    <!-- المنتجات -->
    <section id="products" class="products-section">
        <div class="container">
            <h2 class="section-title">منتجاتنا</h2>
            <div class="products-grid">
                <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <div class="product-image">
                        <img src="<?php echo $product['image_url']; ?>" alt="<?php echo $product['name']; ?>">
                        <div class="product-badge">جديد</div>
                    </div>
                    <div class="product-info">
                        <h3><?php echo $product['name']; ?></h3>
                        <p class="product-description"><?php echo $product['description']; ?></p>
                        <div class="product-footer">
                            <span class="price"><?php echo $product['price']; ?> ريال</span>
                            <button class="btn-add-cart" onclick="addToCart(<?php echo $product['id']; ?>)">
                                <i class="fas fa-cart-plus"></i> أضيفي للسلة
                            </button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- من نحن -->
    <section id="about" class="about-section">
        <div class="container">
            <h2 class="section-title">من نحن</h2>
            <div class="about-content">
                <p>متجر الورد هو متجر إلكتروني متخصص في بيع أجمل أنواع الورد الطبيعي. نقدم لكم تشكيلة واسعة من الورد الطازج بأفضل الأسعار وأجود الأنواع.</p>
                <div class="features">
                    <div class="feature">
                        <i class="fas fa-truck"></i>
                        <h4>توصيل سريع</h4>
                        <p>توصيل خلال 24 ساعة</p>
                    </div>
                    <div class="feature">
                        <i class="fas fa-leaf"></i>
                        <h4>ورد طازج</h4>
                        <p>ورد طبيعي 100%</p>
                    </div>
                    <div class="feature">
                        <i class="fas fa-shield-alt"></i>
                        <h4>ضمان الجودة</h4>
                        <p>ضمان على جميع المنتجات</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- اتصل بنا -->
    <section id="contact" class="contact-section">
        <div class="container">
            <h2 class="section-title">اتصل بنا</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>0501234567</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>info@flowerstore.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fab fa-instagram"></i>
                        <span>@flowerstore</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- التذييل -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 متجر الورد - جميع الحقوق محفوظة</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>

