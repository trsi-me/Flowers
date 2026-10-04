-- إنشاء قاعدة البيانات
CREATE DATABASE IF NOT EXISTS flower_store;
USE flower_store;

-- جدول المنتجات
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    image_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- إدخال منتجات
INSERT INTO products (name, description, price, image_url) VALUES
('الورد الأحمر', 'الورد الأحمر هو رمز الحب والعاطفة، يستخدم للتعبير عن المشاعر العميقة والحب الأبدي.', 150.00, 'https://images.unsplash.com/photo-1518621012428-7018d6827c40?w=300'),
('الورد الوردي', 'الورد الوردي يعبر عن الرقة والأنوثة والجمال، مناسب للهدايا الرومانسية.', 120.00, 'https://images.unsplash.com/photo-1462275646964-a0e3386b89fa?w=300'),
('الورد الأبيض', 'الورد الأبيض يرمز للنقاء والبراءة والسلام، يستخدم في المناسبات الرسمية.', 130.00, 'https://images.unsplash.com/photo-1508610048659-a06b669e3321?w=300'),
('الورد الأصفر', 'الورد الأصفر يعبر عن الصداقة والفرح والتفاؤل، يضفي البهجة على المكان.', 110.00, 'https://images.unsplash.com/photo-1563241527-3004b7be0ffd?w=300'),
('الورد البرتقالي', 'الورد البرتقالي يرمز للحماس والطاقة والإبداع، يجلب الحيوية للمكان.', 140.00, 'https://images.unsplash.com/photo-1582794543139-8ac9cb0f7b11?w=300'),
('الورد البنفسجي', 'الورد البنفسجي يعبر عن الفخامة والأناقة والغموض، يضفي لمسة راقية.', 160.00, 'https://images.unsplash.com/photo-1594736797933-d0c2c0e0e7c2?w=300');

