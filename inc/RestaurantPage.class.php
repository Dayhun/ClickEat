<?php

class RestaurantPage {
    public static function restaurantSection() {
        $restaurantSection = '
        <article class="restaurantMainPic>
            <img src="../img/mcdonald.jpg" alt="mc"/>
        </article>
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
        return $restaurantSection;
    }
}