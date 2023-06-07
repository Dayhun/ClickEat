<?php
require_once("inc/LoginManager.class.php");

class MainPage{
    /**
     * @return string
     */
    public static function mainPageHeader() : string{
        if(LoginManager::verifyLogin()) {
            $mainPageHeader = '
            <header class="mainHeader">
                <figure>
                    <img src="./img/logo2.png" class="logo">
                </figure>
                <section class="headerSection">
                    <figure class="headerOrder">
                        <a href="./orderHistory.php">
                                <img src="./img/shopping-cart.svg" class="cart-img">
                                <figcaption>Order</figcaption>
                        </a>
                    </figure>
                    <figure class="headerMyPage">
                        <a href="">
                            <img src="./img/my-page.svg" class="mypage-img">
                            <figcaption>My Page</figcaption>
                        </a>
                    </figure>
                    <a href="logout.php">Log Out</a>
                </section>
            </header>
            ';
            return $mainPageHeader;
        } else {
            $mainPageHeader = '
            <header class="mainHeader">
                <figure>
                    <img src="./img/logo2.png" class="logo">
                </figure>
                <section class="headerSection">
                    <a href="./signInPage.php">Sign In</a>
                    <a href="./signUpPage.php">Sign Up</a>
                </section>
            </header>
            ';
            return $mainPageHeader;
        }
    }
    // public static function mainPageHeaderLogIn() : string {
    //     $mainPageHeader = '
    //     <header class="mainHeader">
    //         <figure>
    //             <img src="./img/logo2.png" class="logo">
    //         </figure>
    //         <section class="headerSection">
    //             <figure class="headerOrder">
    //                 <img src="./img/shopping-cart.svg" class="cart-img">
    //                 <figcaption>Order</figcaption>
    //             </figure>
    //             <figure class="headerMyPage">
    //                 <img src="./img/my-page.svg" class="mypage-img">
    //                 <figcaption>My Page</figcaption>
    //             </figure>
    //         </section>
    //     </header>
    //     ';
    //     return $mainPageHeader;
    // }

    // public static function mainPageHeaderLogOut() : string {
    //     $mainPageHeader = '
    //     <header class="mainHeader">
    //         <figure>
    //             <img src="./img/logo2.png" class="logo">
    //         </figure>
    //         <section class="headerSection">
    //             <a href="./signInPage.php">Sign In</a>
    //             <a href="./signUpPage.php">Sign Up</a>
    //         </section>
    //     </header>
    //     ';
    //     return $mainPageHeader;
    // }

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
        </section>
        ';
        return $mainPageAdv;
    }


    public static function mainPageFooter() : string {
        $mainPageFooter = '
        <footer class="mainFooter">
            <section>
                <h4>GET SOCIAL</h4>
                <ul>
                    <li><a href="https://www.facebook.com/" class="fa-brands fa-facebook-f"></a></li>
                    <li><a href="https://twitter.com/" class="fa-brands fa-twitter"></a></li>
                    <li><a href="#" class="fa-solid fa-envelope"></a></li>
                    <li><a href="#" class="fa-solid fa-phone"></a></li>
                </ul>
            </section>
            <article>
                <p>&copy; Copyright Click Eat</p>
                <p>Design by <span>Day Gabriel Jacques</span></p>
            </article>
        </footer>
        ';
        return $mainPageFooter;
    }
}
