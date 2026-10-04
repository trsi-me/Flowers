<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دلائل المشروع - متجر الورد</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .guides-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        .guide-tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }
        .guide-tab {
            padding: 15px 30px;
            background: white;
            border: 2px solid #ff6b9d;
            color: #ff6b9d;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s;
        }
        .guide-tab.active {
            background: #ff6b9d;
            color: white;
        }
        .guide-content {
            display: none;
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        .guide-content.active {
            display: block;
        }
        .guide-content h2 {
            color: #ff6b9d;
            font-size: 2em;
            margin-bottom: 20px;
            border-bottom: 3px solid #ff6b9d;
            padding-bottom: 10px;
        }
        .guide-content h3 {
            color: #c44569;
            font-size: 1.5em;
            margin-top: 30px;
            margin-bottom: 15px;
        }
        .guide-content h4 {
            color: #ff6b9d;
            font-size: 1.2em;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .guide-content ul, .guide-content ol {
            margin: 15px 0;
            padding-right: 30px;
        }
        .guide-content li {
            margin: 10px 0;
            line-height: 1.8;
        }
        .guide-content code {
            background: #f8f9fa;
            padding: 2px 8px;
            border-radius: 4px;
            font-family: monospace;
        }
        .highlight-box {
            background: #fff5f8;
            border-right: 4px solid #ff6b9d;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
        }
        .step-box {
            background: #f8f9fa;
            padding: 20px;
            margin: 15px 0;
            border-radius: 10px;
            border-right: 4px solid #ff6b9d;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <i class="fas fa-rose"></i>
                <span>متجر الورد</span>
            </div>
            <ul class="nav-menu">
                <li><a href="index.php">الرئيسية</a></li>
                <li><a href="index.php#products">المنتجات</a></li>
                <li><a href="guides.php">الدلائل</a></li>
            </ul>
        </div>
    </nav>

    <div class="guides-container">
        <h1 style="text-align: center; color: #ff6b9d; margin-bottom: 40px; font-size: 2.5em;">
            <i class="fas fa-book"></i> دلائل المشروع
        </h1>

        <div class="guide-tabs">
            <div class="guide-tab active" onclick="showGuide('start')">
                <i class="fas fa-rocket"></i> دليل البدء
            </div>
            <div class="guide-tab" onclick="showGuide('marketing')">
                <i class="fas fa-bullhorn"></i> دليل التسويق
            </div>
            <div class="guide-tab" onclick="showGuide('instagram')">
                <i class="fab fa-instagram"></i> دليل إنستغرام
            </div>
        </div>

        <!-- دليل البدء -->
        <div id="guide-start" class="guide-content active">
            <h2><i class="fas fa-rocket"></i> دليل البدء في مشروع متجر إلكتروني</h2>
            
            <h3>📋 الخطوات الأساسية</h3>
            
            <div class="step-box">
                <h4>1. اختيار المنتج/الخدمة</h4>
                <ul>
                    <li><strong>اختر منتجك:</strong> ورد، ملابس، إلكترونيات، إلخ</li>
                    <li><strong>حدد الجمهور المستهدف:</strong> من هم عملاؤك؟</li>
                    <li><strong>ابحث عن المنافسين:</strong> شوفي كيف يعملون</li>
                </ul>
            </div>

            <div class="step-box">
                <h4>2. إنشاء المتجر الإلكتروني</h4>
                <p><strong>الخيارات المتاحة:</strong></p>
                <p><strong>أ) منصات جاهزة (سهلة):</strong></p>
                <ul>
                    <li>Shopify - منصة احترافية (مدفوعة)</li>
                    <li>WooCommerce - إضافة على WordPress (مجانية)</li>
                    <li>Zid - منصة عربية (مدفوعة)</li>
                </ul>
                <p><strong>ب) برمجة خاصة:</strong></p>
                <ul>
                    <li>HTML + CSS + PHP + MySQL (مثل المشروع الحالي)</li>
                    <li>Laravel أو CodeIgniter (إطارات عمل PHP)</li>
                </ul>
            </div>

            <div class="step-box">
                <h4>3. إعداد قاعدة البيانات</h4>
                <ul>
                    <li>استخدمي MySQL أو MariaDB</li>
                    <li>أنشئي جداول للمنتجات، الطلبات، العملاء</li>
                    <li>استوردي ملف <code>database.sql</code> الموجود في المشروع</li>
                </ul>
            </div>

            <div class="step-box">
                <h4>4. تصميم المتجر</h4>
                <ul>
                    <li>استخدمي ألوان متناسقة</li>
                    <li>اجعلي التصميم بسيط وسهل الاستخدام</li>
                    <li>تأكدي من أن الموقع متجاوب (يعمل على الموبايل)</li>
                </ul>
            </div>

            <div class="step-box">
                <h4>5. إضافة المنتجات</h4>
                <ul>
                    <li>صور عالية الجودة</li>
                    <li>أوصاف واضحة</li>
                    <li>أسعار مناسبة</li>
                </ul>
            </div>

            <h3>💰 التكاليف المتوقعة</h3>
            <div class="highlight-box">
                <p><strong>مجانية تماماً:</strong></p>
                <ul>
                    <li>استخدام منصة WooCommerce (مجاني)</li>
                    <li>استضافة مجانية للبداية (مثل 000webhost)</li>
                    <li>نطاق مجاني (.tk أو .ml)</li>
                </ul>
                <p><strong>مدفوعة (احترافية):</strong></p>
                <ul>
                    <li>استضافة: 50-200 ريال/سنة</li>
                    <li>نطاق: 30-100 ريال/سنة</li>
                    <li>SSL: مجاني (Let's Encrypt)</li>
                    <li>Shopify: من 29$ شهرياً</li>
                </ul>
            </div>

            <h3>🛠️ الأدوات المطلوبة</h3>
            <div class="step-box">
                <p><strong>للمطورين:</strong></p>
                <ul>
                    <li>محرر نصوص (VS Code)</li>
                    <li>XAMPP أو WAMP (للتطوير المحلي)</li>
                    <li>متصفح ويب</li>
                </ul>
                <p><strong>للمبتدئين:</strong></p>
                <ul>
                    <li>منصة Shopify أو WooCommerce</li>
                    <li>استضافة جاهزة</li>
                    <li>قوالب جاهزة</li>
                </ul>
            </div>

            <h3>📝 قائمة المهام للبدء</h3>
            <div class="step-box">
                <ul>
                    <li>☐ اختيار المنتج</li>
                    <li>☐ اختيار المنصة</li>
                    <li>☐ شراء النطاق والاستضافة</li>
                    <li>☐ تصميم المتجر</li>
                    <li>☐ إضافة المنتجات</li>
                    <li>☐ إعداد طرق الدفع</li>
                    <li>☐ إعداد التوصيل</li>
                    <li>☐ اختبار المتجر</li>
                    <li>☐ إطلاق المتجر</li>
                </ul>
            </div>

            <h3>🎯 نصائح مهمة</h3>
            <div class="highlight-box">
                <ol>
                    <li><strong>ابدئي بسيط:</strong> لا تحاولي إضافة كل شيء من البداية</li>
                    <li><strong>ركز على الجودة:</strong> منتجات جيدة = عملاء سعداء</li>
                    <li><strong>صور احترافية:</strong> الصور أهم من الوصف</li>
                    <li><strong>سهولة الاستخدام:</strong> اجعلي المتجر سهل الاستخدام</li>
                    <li><strong>التواصل:</strong> ردّي على العملاء بسرعة</li>
                </ol>
            </div>
        </div>

        <!-- دليل التسويق -->
        <div id="guide-marketing" class="guide-content">
            <h2><i class="fas fa-bullhorn"></i> دليل التسويق والإعلان للمتجر الإلكتروني</h2>
            
            <h3>📱 التسويق على وسائل التواصل الاجتماعي</h3>
            
            <div class="step-box">
                <h4>1. إنستغرام (الأهم!)</h4>
                <p><strong>إنشاء الحساب:</strong></p>
                <ul>
                    <li>اختاري اسم واضح ومميز: <code>@flowerstore_ksa</code></li>
                    <li>استخدمي صورة بروفايل واضحة (شعار المتجر)</li>
                    <li>اكتبي وصف جذاب في البايو</li>
                </ul>
                <p><strong>المحتوى:</strong></p>
                <ul>
                    <li><strong>صور المنتجات:</strong> صور احترافية عالية الجودة</li>
                    <li><strong>Stories:</strong> يومياً، عروض، خلف الكواليس</li>
                    <li><strong>Reels:</strong> فيديوهات قصيرة (30 ثانية)</li>
                    <li><strong>IGTV:</strong> فيديوهات أطول (شرح المنتجات)</li>
                </ul>
                <p><strong>نصائح:</strong></p>
                <ul>
                    <li>انشري 1-2 منشور يومياً</li>
                    <li>استخدمي الهاشتاقات (#ورد #باقات_ورد)</li>
                    <li>تفاعلي مع المتابعين (ردي على التعليقات)</li>
                    <li>تعاوني مع Influencers (مؤثرين)</li>
                </ul>
            </div>

            <div class="step-box">
                <h4>2. فيسبوك</h4>
                <p><strong>إنشاء الصفحة:</strong></p>
                <ul>
                    <li>صفحة عمل (Business Page)</li>
                    <li>املئي كل المعلومات</li>
                    <li>أضيفي المنتجات في قسم "المتجر"</li>
                </ul>
                <p><strong>الإعلانات:</strong></p>
                <ul>
                    <li><strong>إعلانات مدفوعة:</strong> استهدفي فئة عمرية ومنطقة</li>
                    <li><strong>ميزانية:</strong> ابدئي بـ 50-100 ريال/يوم</li>
                    <li><strong>أنواع الإعلانات:</strong> إعلانات الصور، الفيديو، القصص</li>
                </ul>
            </div>

            <h3>🎯 استراتيجيات التسويق</h3>
            
            <div class="step-box">
                <h4>1. التسويق بالمحتوى</h4>
                <ul>
                    <li><strong>مدونة:</strong> اكتبي مقالات عن الورد والعناية به</li>
                    <li><strong>فيديوهات:</strong> دروس، نصائح، عروض</li>
                    <li><strong>إنفوجرافيك:</strong> معلومات بصريّة</li>
                </ul>
            </div>

            <div class="step-box">
                <h4>2. التسويق بالبريد الإلكتروني</h4>
                <ul>
                    <li>جمعي إيميلات العملاء</li>
                    <li>أرسلي عروض حصرية</li>
                    <li>أرسلي تذكيرات بالمنتجات الجديدة</li>
                </ul>
            </div>

            <div class="step-box">
                <h4>3. برامج الولاء</h4>
                <ul>
                    <li>نقاط لكل عملية شراء</li>
                    <li>خصومات للعملاء الدائمين</li>
                    <li>هدايا مجانية</li>
                </ul>
            </div>

            <h3>💰 الإعلانات المدفوعة</h3>
            
            <div class="highlight-box">
                <h4>1. إعلانات فيسبوك/إنستغرام</h4>
                <ul>
                    <li><strong>الميزانية:</strong> 50-500 ريال/يوم</li>
                    <li><strong>الاستهداف:</strong> العمر: 18-45، الجنس: نساء، الموقع: السعودية</li>
                    <li><strong>الاهتمامات:</strong> الورد، الهدايا، المناسبات</li>
                </ul>
                
                <h4>2. إعلانات جوجل</h4>
                <ul>
                    <li>إعلانات البحث (Google Ads)</li>
                    <li>إعلانات العرض (Display Ads)</li>
                    <li>الميزانية: 100-1000 ريال/شهر</li>
                </ul>
            </div>

            <h3>🎁 أفكار تسويقية</h3>
            <div class="step-box">
                <ol>
                    <li><strong>عروض محدودة:</strong> "خصم 30% لمدة 24 ساعة فقط"</li>
                    <li><strong>هدايا مجانية:</strong> "اشترِ باقة واحصل على باقة مجانية"</li>
                    <li><strong>التوصيل المجاني:</strong> "توصيل مجاني للطلبات فوق 200 ريال"</li>
                    <li><strong>برامج الإحالة:</strong> "أحضري صديقة واحصلي على خصم"</li>
                    <li><strong>مسابقات:</strong> "شاركي صورة واحصلي على باقة مجانية"</li>
                </ol>
            </div>

            <h3>💡 نصائح ذهبية</h3>
            <div class="highlight-box">
                <ol>
                    <li><strong>الصور أهم من الكلمات:</strong> استثمري في صور احترافية</li>
                    <li><strong>الاستمرارية:</strong> انشري بانتظام</li>
                    <li><strong>التفاعل:</strong> ردّي على كل تعليق ورسالة</li>
                    <li><strong>الصبر:</strong> النتائج تحتاج وقت (3-6 أشهر)</li>
                    <li><strong>التعلم المستمر:</strong> تابعي ما يفعله المنافسون</li>
                </ol>
            </div>
        </div>

        <!-- دليل إنستغرام -->
        <div id="guide-instagram" class="guide-content">
            <h2><i class="fab fa-instagram"></i> دليل إنشاء صفحة إنستغرام للمتجر</h2>
            
            <h3>📱 خطوات إنشاء الحساب</h3>
            
            <div class="step-box">
                <h4>1. إنشاء الحساب</h4>
                <ul>
                    <li>حمّلي تطبيق إنستغرام</li>
                    <li>سجّلي بحساب جديد أو استخدمي حساب موجود</li>
                    <li>اختاري اسم المستخدم: <code>@flowerstore_ksa</code> أو <code>@yourstore_name</code></li>
                    <li>أضيفي صورة بروفايل واضحة (شعار المتجر)</li>
                </ul>
            </div>

            <div class="step-box">
                <h4>2. تحويل الحساب إلى Business</h4>
                <ul>
                    <li>اذهبي إلى الإعدادات</li>
                    <li>اختر "Switch to Business Account"</li>
                    <li>أضيفي معلومات المتجر (الاسم، الفئة، الموقع)</li>
                </ul>
            </div>

            <h3>🎨 تصميم الحساب</h3>
            
            <div class="highlight-box">
                <h4>البايو (Bio):</h4>
                <pre style="background: #f8f9fa; padding: 15px; border-radius: 5px; direction: ltr; text-align: left;">
🌹 متجر الورد الأصلي
💐 باقات ورد طبيعية طازجة
🚚 توصيل سريع لجميع مناطق المملكة
📱 للطلب: 0501234567</pre>
            </div>

            <div class="step-box">
                <h4>Highlights (القصص المميزة):</h4>
                <ul>
                    <li><strong>المنتجات:</strong> صور المنتجات</li>
                    <li><strong>العروض:</strong> العروض الحالية</li>
                    <li><strong>الطلبات:</strong> كيفية الطلب</li>
                    <li><strong>الشهادات:</strong> آراء العملاء</li>
                </ul>
            </div>

            <h3>📸 أنواع المحتوى</h3>
            
            <div class="step-box">
                <h4>1. صور المنتجات</h4>
                <ul>
                    <li>صور عالية الجودة</li>
                    <li>خلفية نظيفة</li>
                    <li>إضاءة جيدة</li>
                    <li>زوايا متعددة</li>
                </ul>
            </div>

            <div class="step-box">
                <h4>2. Stories (القصص)</h4>
                <ul>
                    <li><strong>يومياً:</strong> صور المنتجات الجديدة</li>
                    <li><strong>خلف الكواليس:</strong> كيف تعدين الباقات</li>
                    <li><strong>عروض:</strong> خصومات محدودة</li>
                    <li><strong>تفاعل:</strong> استطلاعات، أسئلة</li>
                </ul>
            </div>

            <div class="step-box">
                <h4>3. Reels (الفيديوهات القصيرة)</h4>
                <ul>
                    <li>فيديوهات 15-30 ثانية</li>
                    <li>موسيقى مناسبة</li>
                    <li>نص توضيحي</li>
                    <li>هاشتاقات</li>
                </ul>
            </div>

            <h3>🏷️ الهاشتاقات (#)</h3>
            
            <div class="step-box">
                <h4>هاشتاقات عامة:</h4>
                <p>#ورد #باقات_ورد #ورد_طبيعي #هدايا #مناسبات</p>
                
                <h4>هاشتاقات محلية:</h4>
                <p>#ورد_السعودية #متجر_ورد_جدة #ورد_الرياض</p>
                
                <h4>هاشتاقات متخصصة:</h4>
                <p>#باقة_ورد_حمراء #ورد_للعروس #تنسيق_ورد</p>
                
                <p><strong>نصيحة:</strong> استخدمي 10-15 هاشتاق لكل منشور</p>
            </div>

            <h3>📅 جدول النشر</h3>
            
            <div class="highlight-box">
                <p><strong>الأفضل:</strong></p>
                <ul>
                    <li><strong>صباحاً:</strong> 8-10 صباحاً</li>
                    <li><strong>ظهراً:</strong> 12-2 ظهراً</li>
                    <li><strong>مساءً:</strong> 7-9 مساءً</li>
                </ul>
                <p><strong>التكرار:</strong></p>
                <ul>
                    <li><strong>المنشورات:</strong> 1-2 منشور يومياً</li>
                    <li><strong>Stories:</strong> 3-5 قصص يومياً</li>
                    <li><strong>Reels:</strong> 2-3 فيديوهات أسبوعياً</li>
                </ul>
            </div>

            <h3>💰 الإعلانات على إنستغرام</h3>
            
            <div class="step-box">
                <h4>1. إعلانات Stories</h4>
                <ul>
                    <li>صور أو فيديوهات قصيرة</li>
                    <li>زر "تسوقي الآن"</li>
                    <li>استهداف: نساء، 18-45، السعودية</li>
                </ul>
                
                <h4>2. إعلانات Feed</h4>
                <ul>
                    <li>منشورات عادية مع زر "تسوقي الآن"</li>
                    <li>استهداف دقيق حسب الاهتمامات</li>
                </ul>
                
                <h4>الميزانية:</h4>
                <p>ابدئي بـ 50-100 ريال/يوم، زيدي تدريجياً حسب النتائج</p>
            </div>

            <h3>🎯 استراتيجيات النمو</h3>
            
            <div class="step-box">
                <h4>1. التفاعل</h4>
                <ul>
                    <li>ردّي على كل تعليق</li>
                    <li>ردّي على الرسائل خلال ساعة</li>
                    <li>اتبعي العملاء المحتملين</li>
                    <li>اتركي تعليقات على حسابات مشابهة</li>
                </ul>
                
                <h4>2. التعاون</h4>
                <ul>
                    <li>تعاوني مع Influencers (مؤثرين)</li>
                    <li>تبادل إعادة النشر مع متاجر أخرى</li>
                    <li>مسابقات مع حسابات كبيرة</li>
                </ul>
            </div>

            <h3>💡 أفكار محتوى</h3>
            <div class="step-box">
                <ol>
                    <li><strong>قبل وبعد:</strong> باقة قبل وبعد التنسيق</li>
                    <li><strong>خلف الكواليس:</strong> كيف تعدين الباقات</li>
                    <li><strong>نصائح:</strong> نصائح عن العناية بالورد</li>
                    <li><strong>قصص العملاء:</strong> شهادات العملاء</li>
                    <li><strong>عروض خاصة:</strong> خصومات محدودة بالوقت</li>
                    <li><strong>مناسبات:</strong> باقات للمناسبات المختلفة</li>
                </ol>
            </div>

            <h3>🎁 أفكار لزيادة المبيعات</h3>
            <div class="highlight-box">
                <ol>
                    <li><strong>عروض حصرية:</strong> "خصم 20% لمتابعي إنستغرام فقط"</li>
                    <li><strong>كود خصم:</strong> "استخدمي كود INSTA20"</li>
                    <li><strong>مسابقات:</strong> "شاركي واحصلي على باقة مجانية"</li>
                    <li><strong>Stories محدودة:</strong> "عرض لمدة 24 ساعة فقط"</li>
                    <li><strong>إعادة النشر:</strong> "أعيدي النشر واحصلي على خصم"</li>
                </ol>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 متجر الورد - جميع الحقوق محفوظة</p>
        </div>
    </footer>

    <script>
        function showGuide(guideId) {
            // إخفاء كل المحتويات
            document.querySelectorAll('.guide-content').forEach(content => {
                content.classList.remove('active');
            });
            
            // إزالة active من كل التبويبات
            document.querySelectorAll('.guide-tab').forEach(tab => {
                tab.classList.remove('active');
            });
            
            // إظهار المحتوى المحدد
            document.getElementById('guide-' + guideId).classList.add('active');
            
            // إضافة active للتبويب المحدد
            event.target.classList.add('active');
        }
    </script>
</body>
</html>

