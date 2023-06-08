<?php

class Userpage{

public static function Userpage($user) {
    $Userpage= '
      <section class="container">
        <figure>
          <img src="'. $user->getPicture() .'" alt="Profile">
        </figure>
      <h3>Profile</h3>
      <p>Name:'. $user->getUsername() .'</p>
      <p>Email: '. $user->getEmail(). '</p>
      </section>
';
return $Userpage;
}

}

























































