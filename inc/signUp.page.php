<?php
class SignUp {
  public static function signUp() {
      $signUp= '
        <h2>Signup Form</h2>
        <form method="POST" action="register.php">
          <label for="Name">name:</label>
          <input type="text" id="name" name="name" required><br><br>
          
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required><br><br>
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required><br><br>
          
          <label for="confirm_password">Confirm Password:</label>
          <input type="password" id="confirm_password" name="confirm_password" required><br><br>
          
          <label for="phone_number">Phone Number:</label>
          <input type="tel" id="phone_number" name="phone_number" required><br><br>
          
          <input type="submit" value="Signup">
        </form>
      ';
      return $signUp;
  }
}