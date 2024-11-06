<header class="container py-3">
    <div class="row align-items-center">
        <!-- Logo Section -->
        <div class="col-md-2 text-center">
            <div id="logo">
                <a href="index.php">
                    <img src="./images/logo.png" alt="logo" class="img-fluid" style="max-height: 80px;">
                </a>
            </div>
        </div>

        <!-- Centered Search Section -->
        <div class="col-md-8 d-flex justify-content-center">
            <!-- <form class="form-search d-flex w-75" method="GET" action="timkiem.php">
                <input type="text" class="form-control me-2" name="txttimkiem" placeholder="Nhập sách cần tìm kiếm..." required>
                <button type="submit" name="tk" class="btn btn-outline-secondary">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </form> -->
            <form class="search-bar d-flex w-75" method="GET" action="timkiem.php">
                <input placeholder="Nhập sách cần tìm kiếm..." name="txttimkiem" type="text" required />
                <button type="submit" name="tk">
                    <i class="fas fa-search">
                    </i>
                </button>
            </form>
        </div>

        <!-- Cart Button Aligned to Right -->
        <div class="col-md-2 d-flex justify-content-end">
            <a class="btn btn-cart" href="cart.php">
                <i class="glyphicon glyphicon-shopping-cart"></i>
                <span class="cart-count"> <!-- Số lượng sản phẩm -->
                    <?php
                    $ok = 1;
                    if (isset($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $key => $value) {
                            if (isset($key)) {
                                $ok = 2;
                            }
                        }
                    }
                    echo $ok == 2 ? count($_SESSION['cart']) : "0";
                    ?>
                </span>
            </a>
        </div>
    </div>
</header>