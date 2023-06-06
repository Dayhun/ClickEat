<?php

class Order{
   public static function orderBody(){
      $orderBody = '
         <h2>Past Order</h2>
         <main>
            <section>
               <figure>
                  <img src="./img/logo2.png" alt="">
               </figure>
               <article>
                  <h3>Restaurant Name</h3>
                  <p class="desktop"># items for ##,## | Month ## at ##:##pm</p>
                  <p class="mobile"># items for ##,##</p>
                  <ul>
                     <li>
                        <p>#</p>
                        <p>Dish Name</p>
                     </li>
                     <li>
                        <p>#</p>
                        <p>Dish Name</p>
                     </li>
                     <li>
                        <p>#</p>
                        <p>Dish Name</p>
                     </li>
                  </ul>
                  <p class="mobile">Month ## at ##:##pm</p>
               </article>
               <aside>
                  <a href="">Reorder</a>
                  <a href="">Rate your order</a>
               </aside>
            </section>
         </main>
      ';
      return $orderBody;
   }
}