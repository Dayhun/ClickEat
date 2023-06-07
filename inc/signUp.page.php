<?php

class SingUpPage{

  public static function signUp() {
      $signUp= '

      <section class="signup">
      <figure>
      <img src="./img/logo.png" alt="logo" >
      </figure>
        <form method="POST" action="register.php">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required><br><br>
          
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required><br><br>
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required><br><br>
          
          <label for="confirm_password">Confirm Password:</label>
          <input type="password" id="confirm_password" name="confirm_password" required><br><br>
  
          <label for="phone">Phone Number:</label>
          <input type="tel" id="phone" name="phone" required><br><br>
          
          <input type="submit" value="Signup">
        </form>
        </section>
      ';

  }


}

