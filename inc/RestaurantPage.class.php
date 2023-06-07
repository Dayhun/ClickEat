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
    public static function restaurantMenuSection(array $restaurantMenu) {
        $restaurantMenuSection = '
        <section class="restaurantMenu">
            <article class="orderArticle orderNone">
                <button class="orderBtn">Order Now</button>
            </article>
            <article class="menuArticle">';
        
        foreach($restaurantMenu as $menuInfo){
            $restaurantMenuSection .= self::menuInfo($menuInfo);
        }
            
        $restaurantMenuSection .= '
            </article>    
            <article class="orderArticle">
                <button class="orderBtn">Order Now</button>
            </article>
        </section>
        ';
        return $restaurantMenuSection;
    }

    private static function menuInfo($menuInfo){
        $menuString = '
            <figure>
                <figcaption>
                    <article class="menuTitle">
                        <h4>'. $menuInfo->getName() .'</h4>
                        <p>$'. $menuInfo->getPrice() .'</p>
                    </article>
                    <section class="menuBtn">
                        <button class="minusBtn">-</button>
                        <span>0</span>
                        <button class="plusBtn">+</button>
                    </section>
                </figcaption>
                <img src="'. $menuInfo->getPicture() .'" alt="burger-img"/>
            </figure>
        ';
        
        return $menuString;
    }
}