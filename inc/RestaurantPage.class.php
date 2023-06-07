<?php

class RestaurantPage {
    public static function restaurantTopSection($restaurant) {
        $restaurantTopSection = '
        <figure class="restaurantMainPic">
            <img src="'. $restaurant->getPicture() .'" alt="mcImg">
        </figure>
        <section class="restaurantDetail">
            <h2>Mc Donald</h2>
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
                <li>
                (3700 Ratings)
                </li>
            </ul>
            <p>Burger</p>
        </section>
        ';
        return $restaurantTopSection;
    }
    public static function restaurantMenuSection() {
        $restaurantMenuSection = '
        <section class="restaurantMenu">
            <article class="orderArticle orderNone">
                <button class="orderBtn">Order Now</button>
            </article>
            <article class="menuArticle">
                <figure>
                    <figcaption>
                        <article class="menuTitle">
                            <h4>Big Mac</h4>
                            <p>$7.69</p>
                        </article>
                        <section class="menuBtn">
                            <button class="minusBtn">-</button>
                            <span>0</span>
                            <button class="plusBtn">+</button>
                        </section>
                    </figcaption>
                    <img src="./img/burger.png" alt="burger-img"/>
                </figure>
                <figure>
                    <figcaption>
                        <article class="menuTitle">
                            <h4>Big Mac</h4>
                            <p>$7.69</p>
                        </article>
                        <section class="menuBtn">
                            <button class="minusBtn">-</button>
                            <span>0</span>
                            <button class="plusBtn">+</button>
                        </section>
                    </figcaption>
                    <img src="./img/burger.png" alt="burger-img"/>
                </figure>
                <figure>
                    <figcaption>
                        <article class="menuTitle">
                            <h4>Big Mac</h4>
                            <p>$7.69</p>
                        </article>
                        <section class="menuBtn">
                            <button class="minusBtn">-</button>
                            <span>0</span>
                            <button class="plusBtn">+</button>
                        </section>
                    </figcaption>
                    <img src="./img/burger.png" alt="burger-img"/>
                </figure>
                <figure>
                    <figcaption>
                        <article class="menuTitle">
                            <h4>Big Mac</h4>
                            <p>$7.69</p>
                        </article>
                        <section class="menuBtn">
                            <button class="minusBtn">-</button>
                            <span>0</span>
                            <button class="plusBtn">+</button>
                        </section>
                    </figcaption>
                    <img src="./img/burger.png" alt="burger-img"/>
                </figure>
                <figure>
                    <figcaption>
                        <article class="menuTitle">
                            <h4>Big Mac</h4>
                            <p>$7.69</p>
                        </article>
                        <section class="menuBtn">
                            <button class="minusBtn">-</button>
                            <span>0</span>
                            <button class="plusBtn">+</button>
                        </section>
                    </figcaption>
                    <img src="./img/burger.png" alt="burger-img"/>
                </figure>
                <figure>
                    <figcaption>
                        <article class="menuTitle">
                            <h4>Big Mac</h4>
                            <p>$7.69</p>
                        </article>
                        <section class="menuBtn">
                            <button class="minusBtn">-</button>
                            <span>0</span>
                            <button class="plusBtn">+</button>
                        </section>
                    </figcaption>
                    <img src="./img/burger.png" alt="burger-img"/>
                </figure>
                <figure>
                    <figcaption>
                        <article class="menuTitle">
                            <h4>Big Mac</h4>
                            <p>$7.69</p>
                        </article>
                        <section class="menuBtn">
                            <button class="minusBtn">-</button>
                            <span>0</span>
                            <button class="plusBtn">+</button>
                        </section>
                    </figcaption>
                    <img src="./img/burger.png" alt="burger-img"/>
                </figure>
            </article>    
            <article class="orderArticle">
                <button class="orderBtn">Order Now</button>
            </article>
        </section>
        ';
        return $restaurantMenuSection;
    }
}