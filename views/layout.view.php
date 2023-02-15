<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500&display=swap" rel="stylesheet">
    <!---->

    <link href="../bootstrap_tutorial.min.css" rel="stylesheet" />
    <link href="../php-fundamentals.css" rel="stylesheet" />
  </head>
  <style>
    @font-face { 
      font-family: "League Spartan "; 
      src: url('../fonts/LeagueSpartan-Regular.ttf'); 
      src: url('../fonts/LeagueSpartan-Regular.ttf') format('truetype'),
      src: url('../fonts/LeagueSpartan-Thin.ttf') format('truetype'),
      src: url('../fonts/LeagueSpartan-Light.ttf') format('truetype'),
      src: url('../fonts/LeagueSpartan-ExtraLight.ttf') format('truetype'),
      src: url('../fonts/LeagueSpartan-Medium.ttf') format('truetype'),
      src: url('../fonts/LeagueSpartan-Black.ttf') format('truetype'),
      src: url('../fonts/LeagueSpartan-Bold.ttf') format('truetype'),
      src: url('../fonts/LeagueSpartan-SemiBold.ttf') format('truetype'),
      src: url('../fonts/LeagueSpartan-ExtraBold.ttf') format('truetype');
    
    }
    
    body {
      font-family: "League Spartan";
      min-width:375px;       
      width:1000px;            
      background-color:hsl(180, 52%, 96%);
      margin: auto;
    }

  </style>

  <body>
  
  <!-- Inserting the image header; bg-img class specifications are defined in the bootstrap_tutorial.min.css file -->
  <div class="bg-img"></div> 

  <!-- Defining the search bar and buttons -->
  <div class="container">
    <div class="row">
        <form class="search-bar" action="" method="POST">
            <input type="text" placeholder="Search..." name="q" required>
            <button type="submit" name="search"><img src="images/search.png"></button>
            <button type="submit" name="home" formnovalidate><img src="images/home.png"></button>
        </form>
    </div>

  <!-- require command to include code from another file -->
  <?php require("$name.view.php"); ?>
  
  </body>

</html>