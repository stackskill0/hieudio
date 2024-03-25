<header id="header" class="header">
    <div class="navigation">
      <div class="container">
        <nav class="nav">
          <div class="nav__hamburger">
            <svg>
              <use xlink:href="./images/sprite.svg#icon-menu"></use>
            </svg>
          </div>

          <div class="nav__logo">
            <a href="/" class="scroll-link">
              PHONE
            </a>
          </div>

          <div class="nav__menu">
            <div class="menu__top">
              <span class="nav__category">PHONE</span>
              <a href="#" class="close__toggle">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-cross"></use>
                </svg>
              </a>
            </div>
            <ul class="nav__list">
              <li class="nav__item">
                <a href="index.php" class="nav__link scroll-link">Home</a>
              </li>
              <li class="nav__item">
                <a href="index.php?page=all" class="nav__link scroll-link">Tất cả</a>
              </li>
              <li class="nav__item">
                <a href="#category" class="nav__link scroll-link">Điện thoại</a>
              </li>
              <li class="nav__item">
                <a href="#category" class="nav__link scroll-link">Phụ kiện</a>
              </li>
              <li class="nav__item">
                <a href="#news" class="nav__link scroll-link">Tin tức</a>
              </li>
              <li class="nav__item">
                <a href="#contact" class="nav__link scroll-link">Contact</a>
              </li>
            </ul>
          </div>

          <div class="nav__icons">
          <div class="account-links pd-28">
                <?php
    if(isset($_SESSION['dangky'])){
?>
    <a href="./index.php?page=thongtintaikhoann&id=<?php echo $_SESSION['id_khachhang'] ?>" id="login"><?php  echo $_SESSION['dangky']; ?></a>
    /
    <a href="#" id="logout">Đăng xuất</a>

    <script>
        document.getElementById('logout').addEventListener('click', function() {
            var confirmLogout = confirm('Bạn muốn đăng xuất không?');
            if (confirmLogout) {
                window.location.href = "index.php?dangxuat=1";
            }
        });
    </script>
<?php
    } else {
?>
    <a href="./index.php?page=dangnhap" id="login">Đăng nhập</a>
    /
    <a href="./index.php?page=dangki" id="regist">Đăng ký</a>
<?php
    }
?>

                </div>



            <div class="icon__item">
            <label for="check-timkiem">
            <svg class="icon__user">
                <use xlink:href="./assets/images/sprite.svg#icon-search"></use>
              </svg>
</label>
</div>

            <a href="#" class="icon__item" id="cart-btn">
              <svg class="icon__cart">
                <use xlink:href="./assets/images/sprite.svg#icon-shopping-basket"></use>
              </svg>
              <span id="cart__total">3</span>
            </a>
          </div>
        </nav>
      </div>
    </div>
    
    <!-- Hero -->

    <div class="auth">
      <form action="" class="login-form">
        <h3>Login Now</h3>
        <input type="email" placeholder="your email" class="box">
        <input type="password" placeholder="your password" class="box">
        <p>forget your password <a href="#">Click Here</a></p>
        <p>don't have an account <a href="#">Create now</a></p>
        <input type="submit" value="Login now" class="btn">
      </form>
      </div>


    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="images/products/iPhone/iphone1.jpeg">
            <div class="content">
                <h3>iPhone</h3>
                <span class="price">$800.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="images/products/sumsung/samsung3.jpeg">
            <div class="content">
                <h3>Samsung A22</h3>
                <span class="price">$350.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="images/products/headphone/headphone3.jpeg">
            <div class="content">
                <h3>Boat</h3>
                <span class="price">$54.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="total">Total : $1354.69/-</div>
        <a href="#" class="btn">Check out</a>
    </div>

  </header>