<?php
class MainPage{
    /**
     * @return string
     */
    public static function mainPageHeaderLogIn() : string {
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

    public static function mainPageHeaderLogOut() : string {
        $mainPageHeader = '
        <header class="mainHeader">
            <figure>
                <img src="./img/logo2.png" class="logo">
            </figure>
            <section class="headerSection">
                <button>Sign In</button>
                <button>Sign Up</button>
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

    public static function mainPageRestaurant() : string {
        $mainPageRestaurant = '
        <section class="mainRestaurant">
            <h3>Offers for you</h3>
            <article class="mainRestaurantArticle">
                <figure>
                    <img src="./img/mcdonald.jpg" alt="rest-img"/>
                    <figcaption>
                        <h4>Mc Donalds</h4>
                        <ul>
                            <li>
                                $
                            </li>
                            <li>
                            </li>
                            <li>
                                <img src="./img/star-gray.png" alt="star-img"/>
                                4.5
                            </li>
                        </ul>
                    </figcaption>
                </figure>  
                <figure>
                    <img src="./img/mcdonald.jpg" alt="rest-img"/>
                    <figcaption>
                        <h4>Mc Donalds</h4>
                        <ul>
                            <li>
                                $
                            </li>
                            <li>
                            </li>
                            <li>
                                <img src="./img/star-gray.png" alt="star-img"/>
                                4.5
                            </li>
                        </ul>
                    </figcaption>
                </figure>  
                <figure>
                    <img src="./img/mcdonald.jpg" alt="rest-img"/>
                    <figcaption>
                        <h4>Mc Donalds</h4>
                        <ul>
                            <li>
                                $
                            </li>
                            <li>
                            </li>
                            <li>
                                <img src="./img/star-gray.png" alt="star-img"/>
                                4.5
                            </li>
                        </ul>
                    </figcaption>
                </figure>  
                <figure>
                    <img src="./img/mcdonald.jpg" alt="rest-img"/>
                    <figcaption>
                        <h4>Mc Donalds</h4>
                        <ul>
                            <li>
                                $
                            </li>
                            <li>
                            </li>
                            <li>
                                <img src="./img/star-gray.png" alt="star-img"/>
                                4.5
                            </li>
                        </ul>
                    </figcaption>
                </figure>  
                <figure>
                    <img src="./img/mcdonald.jpg" alt="rest-img"/>
                    <figcaption>
                        <h4>Mc Donalds</h4>
                        <ul>
                            <li>
                                $
                            </li>
                            <li>
                            </li>
                            <li>
                                <img src="./img/star-gray.png" alt="star-img"/>
                                4.5
                            </li>
                        </ul>
                    </figcaption>
                </figure>  
                <figure>
                    <img src="./img/mcdonald.jpg" alt="rest-img"/>
                    <figcaption>
                        <h4>Mc Donalds</h4>
                        <ul>
                            <li>
                                $
                            </li>
                            <li>
                            </li>
                            <li>
                                <img src="./img/star-gray.png" alt="star-img"/>
                                4.5
                            </li>
                        </ul>
                    </figcaption>
                </figure>  
            </article>
        </section>    
        ';
        return $mainPageRestaurant;
    }

    // public static function mainPageRestaurant() : string {
    //     $mainPageRestaurant = '
    //     <section class="mainRestaurant">
    //         <h3>Offers for you</h3>
    //         <article class="mainRestaurantArticle">
    //     ';
    //     foreach ($restaurantList as $restaurant) {
    //         $mainPageRestaurant.= self::mainRestFigure($restaurant);
    //     }
    //     $mainPageRestaurant.='
    //         </article>
    //     </section>    
    //     ';
    //     return $mainPageRestaurant;
    // }

    // public static function mainRestFigure($res){
    //     $mainRestFigure = '
        //         <figure>
        //             <img src="'.$res->getPicture().'" alt="'.$res->getRestName().'"/>
        //             <figcaption>
        //                 <h3>'.$res->getRestName().'</h3>
        //                 <ul>
                                // <li>
                                //     '.$res->getpriceRange().'
                                // </li>
                                // <li>
                                //     <img src="./img/star-gray.png" alt="star-img"/>
                                //     '.$res->getScore().'
                                // </li>
        //                 </ul>
        //             </figcaption>
        //         </figure>    
        //</section>
    //     ';
    //     return $mainRestFigure;
    // }

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
