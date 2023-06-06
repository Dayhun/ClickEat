<?php
public static function userPage(){
$userPage= '

<!DOCTYPE html>
<html>
<head>
  <title>User Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
    }
    h1 {
      color: #333;
    }
    p {
      color: #666;
    }
  </style>
</head>
<body>
  <header>
    <h1>Welcome to My User Page</h1>
  </header>
  
  <section>
    <h2>About Me</h2>
    <?php
    $username = "John Doe";
    $bio = "Hello, my name is John Doe. I'm a web developer passionate about creating beautiful and functional websites.";
    echo "<p>$bio</p>";
    ?>
  </section>
  
  <section>
    <h2>Skills</h2>
    <ul>
      <?php
      $skills = array("HTML", "CSS", "JavaScript");
      foreach ($skills as $skill) {
        echo "<li>$skill</li>";
      }
      ?>
    </ul>
  </section>
  
  <footer>
    <p>Contact me at john@example.com</p>
  </footer>
</body>
</html>
























';



}

