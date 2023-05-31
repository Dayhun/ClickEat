<?php
class MainPage{
    /**
     * @return string
     */
    public static function mainPageHeader() : string {
        $mainPageHeader = '
        <header class="mainHeader">
            <figure>
                <img src="./img/logo2.png" class="logo">
            </figure>
            <section class="headerSection">
                <figure class="headerOrder">
                    <img src="./img/shopping-cart.svg" class="cart-img">
                    <figcaption>Order</figcaption>
                </figure>
                <figure class="headerMyPage">
                    <img src="./img/my-page.svg" class="mypage-img">
                    <figcaption>My Page</figcaption>
                </figure>
            </section>
        </header>
        ';
        return $mainPageHeader;
    }
}