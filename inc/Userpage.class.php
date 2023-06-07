<?php

class Userpage{

public static function Userpage() {
    $Userpage= '
  <section class="container">
    <h1>My Profile</h1>git 
    <form>
      <label for="firstName">First Name:</label>
      <input type="text" id="firstName" name="firstName" required>
      
      <label for="lastName">Last Name:</label>
      <input type="text" id="lastName" name="lastName" required>
      
      <label for="email">Email:</label>
      <input type="text" id="email" name="email" required>
      
      <label for="country">Country:</label>
      <select id="country" name="country" required>
        <option value="">Select Country</option>
        <option value="USA">USA</option>
        <option value="Canada">Canada</option>
        <option value="UK">UK</option>
      </select>
      
      <label for="phoneNumber">Phone Number:</label>
      <input type="text" id="phoneNumber" name="phoneNumber" required>
      
      <input type="submit" value="Save">
    </form>
</section>
';
return $Userpage;
}

}

























































