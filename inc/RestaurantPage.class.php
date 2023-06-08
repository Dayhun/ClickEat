<?php

class RestaurantPage {
    public static function restaurantTopSection($restaurant) {
        $restaurantTopSection = '
        <figure class="restaurantMainPic">
            <img src="'. $restaurant->getPicture() .'" alt="mcImg">
        </figure>
        <section class="restaurantDetail">
            <h2>'. $restaurant->getRestaurantName() .'</h2>
            <ul>
                <li>
                '. $restaurant->getPriceRange() .'
                </li>
                <li>
                </li>
                <li>
                    <img src="./img/star-gray.png" alt="star-img"/>
                    '. $restaurant->getScore() .'
                </li>
                <li>
                ('. $restaurant->getReview() .' Ratings)
                </li>
            </ul>
            <p>'. $restaurant->getCategory() .'</p>
        </section>
        ';
        return $restaurantTopSection;
    }
    public static function restaurantMenuSection(array $restaurantMenu) {
        $restaurantMenuSection = '
        <form class="restaurantMenu" method="POST" action="'.$_SERVER["PHP_SELF"].'">
            <article class="orderArticle orderNone">
                <button class="orderBtn" type="submit">Order Now</button>
            </article>
            <article class="menuArticle">';

        foreach($restaurantMenu as $menuInfo){
            $restaurantMenuSection .= self::menuInfo($menuInfo);
        }
            
        $restaurantMenuSection .= '
            </article>    
            <article class="orderArticle">
                <button class="orderBtn" type="submit">Order Now</button>
            </article>
        </form>
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
                        <input type=number name="'. $menuInfo->getMenuId() .'" value="0" placeholder="Write the amount"/>
                    </section>
                </figcaption>
                <img src="'. $menuInfo->getPicture() .'" alt="burger-img"/>
            </figure>
        ';
        
        return $menuString;
    }
}