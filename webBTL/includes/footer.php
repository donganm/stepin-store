<footer class="footer">
    <div class="footer__container">
        <div class="footer__section">
            <h2 class="footer__logo">TRADEMARK</h2>
            <p class="footer__description">Mang đến sản phẩm chất lượng và <br>dịch vụ tận tâm đến từng khách hàng.</p>
        </div>

        <div class="footer__section">
            <h3 class="footer__title">Danh mục</h3>
            <ul class="footer__links">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
        </div>

        <div class="footer__section">
            <h3 class="footer__title">Đăng ký nhận tin</h3>
            <form class="footer__form">
                <input type="email" placeholder="Nhập email của bạn" class="footer__input" required>
                <button type="submit" class="footer__button">Gửi</button>
            </form>
        </div>
    </div>

    <div class="footer__bottom">
        <p>&copy; 2025 TRADEMARK. Bản quyền đã được bảo hộ.</p>
    </div>
</footer>



</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const signinElement = document.getElementById('signin');
        if (signinElement) {
            signinElement.addEventListener('click', function() {
                window.location.href = 'pages/login.php';
            });
        }
    });
</script>
</body>

</html>