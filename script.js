// عربة التسوق
let cart = [];

function addToCart(productId) {
    cart.push(productId);
    updateCartCount();
    alert('تم إضافة المنتج للسلة بنجاح!');
}

function updateCartCount() {
    const cartCount = document.querySelector('.cart-count');
    cartCount.textContent = cart.length;
}

// تحديث عدد السلة عند تحميل الصفحة
document.addEventListener('DOMContentLoaded', function() {
    updateCartCount();
});

