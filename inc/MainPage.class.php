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

    public static function mainPageNav() : string {
        $mainPageNav = '
        <nav class="mainNav">
            <ul>
                <li>
                    <a href="./">
                        <img src="./img/pizza.png" alt="pizza"/>
                        <p>Pizza</p>
                    </a>
                </li>
                <li>
                    <a href="./">
                        <img src="./img/burger.png" alt="burger"/>
                        <p>Burger</p>
                    </a>
                </li>
                <li>
                    <a href="./">
                        <img src="./img/sushi.png" alt="japanese"/>
                        <p>Japanese</p>
                    </a>
                </li>
                <li>
                    <a href="./">
                        <img src="./img/buns.png" alt="chinese"/>
                        <p>Chinese</p>
                    </a>
                </li>
                <li>
                    <a href="./">
                        <img src="./img/thai-food.png" alt="thai"/>
                        <p>Thai</p>
                    </a>
                </li>
                <li>
                    <a href="./">
                        <img src="./img/bibimbap.png" alt="korean"/>
                        <p>Korean</p>
                    </a>
                </li>
                <li>
                    <a href="./">
                        <img src="./img/taco.png" alt="mexican"/>
                        <p>Mexican</p>
                    </a>
                </li>
                <li>
                    <a href="./">
                        <img src="./img/spaguetti.png" alt="italian"/>
                        <p>Italian</p>
                    </a>
                </li>
                <li>
                    <a href="./">
                        <img src="./img/ice-cream.png" alt="dessert"/>
                        <p>Dessert</p>
                    </a>
                </li>
                <li>
                    <a href="./">
                        <img src="./img/coffee.png" alt="cafe"/>
                        <p>Cafe</p>
                    </a>
                </li>
            </ul>
        </nav>
        ';
        return $mainPageNav;
    }

    public static function mainPageAdv() : string {
        $mainPageAdv = '
        <section class="mainAdv">
            <article>
                <h3>$0 Delivery Fee</h3>
                <p>Try our membership for free</p>
            </article>
            <img src="./img/free-delivery.png" alt="adv-img" />
        </section>
        ';
        return $mainPageAdv;
    }
}
// <section class="mainAdv">
//                 <article>
//                     <h3>$0 Delivery Fee</h3>
//                     <p>Try our membership for free</p>
//                 </article>
//                 <img src="./img/adv.jpg" alt="adv-img" />
//             </section>