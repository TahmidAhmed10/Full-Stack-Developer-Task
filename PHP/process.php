<?php
require 'conn.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title> Jokes </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href= "../css/layout.css?<?php echo time(); ?>">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
</head>
<body>
  <ul class="len">
    <div class="space1">
      <p class="p1">DASHBOARD</p>
      <h1 class="h1">Random Jokes</h1>
    </div>
    <div class="page1">
      <div class="space2"></div>
      <p1 class="type">Type of joke</p1>
      <form class="page1box" method="POST" action="process.php">
      <li class="select1">
        <label class="container">
          <input type="checkbox" value="id" name='All' class="f1" checked>
          <span class="checkmark"></span>All
        </label>
        <label class="container">
          <input type="checkbox" value="general" name='general' class="f1">
          <span class="checkmark"></span>General
        </label>
        <label class="container">
          <input type="checkbox" value="food" name='food' class="f1">
          <span class="checkmark"></span>Food
        </label>
        <label class="container">
          <input type="checkbox" value="knock-knock" name='knock' class="f1">
          <span class="checkmark"></span>Knock-knock
        </label>
        <label class="container">
          <input type="checkbox" value="programming" name='programming' class="f1">
          <span class="checkmark"></span>Programming
        </label>
        <label class="container">
          <input type="checkbox" value="dad" name='dad' class="f1">
          <span class="checkmark"></span>Dad
        </label>
      </li>
      <div class="space3"></div>
      <button name="button" type="submit" class="submit1">Submit Again</button>
    </form>
    <?php
    // All Selected
    if (isset($_POST['All']) && !isset($_POST['general']) && !isset($_POST['food']) && !isset($_POST['knock']) && !isset($_POST['programming'])  && !isset($_POST['dad'])) {
      $Query = $pdo->prepare("SELECT * FROM mytable WHERE :id = :id ORDER BY RAND() LIMIT 1");
      $Query->bindParam(':id', $_POST["All"]);
      $Query->execute();
      while($row = $Query->fetch(PDO::FETCH_ASSOC)){
        ?>
        <a class="setup"> <?=$row['setup'];?> </a>
        <script>
        function myFunction() {
          document.getElementById("do").innerHTML = "<?=$row['punchline'];?>";
        }
      </script>
        <?php
      }
    }
    // General Selected
    if (!isset($_POST['All']) && isset($_POST['general']) && !isset($_POST['food']) && !isset($_POST['knock']) && !isset($_POST['programming']) && !isset($_POST['dad'])) {
      $Query = $pdo->prepare("SELECT * FROM mytable WHERE type = :general ORDER BY RAND() Limit 1");
      $Query->bindParam(':general', $_POST["general"]);
      $Query->execute();
      while($row = $Query->fetch(PDO::FETCH_ASSOC)){//loops the infomation until the data reachs 9
        ?>
        <a class="setup"> <?=$row['setup'];?> </a>
        <script>
        function myFunction() {
          document.getElementById("do").innerHTML = "<?=$row['punchline'];?>";
        }
      </script>
        <?php
      }
    }
    // Food Selected
    if (!isset($_POST['All']) && !isset($_POST['general']) && isset($_POST['food']) && !isset($_POST['knock']) && !isset($_POST['programming'])  && !isset($_POST['dad'])) {
      $Query = $pdo->prepare("SELECT * FROM mytable WHERE type = :food ORDER BY RAND() Limit 1");
      $Query->bindParam(':food', $_POST["food"]);
      $Query->execute();
      while($row = $Query->fetch(PDO::FETCH_ASSOC)){
        ?>
        <a class="setup"> <?=$row['setup'];?> </a>
        <script>
        function myFunction() {
          document.getElementById("do").innerHTML = "<?=$row['punchline'];?>";
        }
      </script>
        <?php
      }
    }
    // Knock-knock Selected
    if (!isset($_POST['All']) && !isset($_POST['general']) && !isset($_POST['food']) && isset($_POST['knock']) && !isset($_POST['programming'])  && !isset($_POST['dad'])) {
      $Query = $pdo->prepare("SELECT * FROM mytable WHERE type = :knock ORDER BY RAND() Limit 1");
      $Query->bindParam(':knock', $_POST["knock"]);
      $Query->execute();
      while($row = $Query->fetch(PDO::FETCH_ASSOC)){
        ?>
        <a class="setup"> <?=$row['setup'];?> </a>
        <script>
        function myFunction() {
          document.getElementById("do").innerHTML = "<?=$row['punchline'];?>";
        }
      </script>
        <?php
      }
    }
    // Programming Selected
    if (!isset($_POST['All']) && !isset($_POST['general']) && !isset($_POST['food']) && !isset($_POST['knock']) && isset($_POST['programming'])  && !isset($_POST['dad'])) {
      $Query = $pdo->prepare("SELECT * FROM mytable WHERE type = :programming ORDER BY RAND() Limit 1");
      $Query->bindParam(':programming', $_POST["programming"]);
      $Query->execute();
      while($row = $Query->fetch(PDO::FETCH_ASSOC)){
        ?>
        <a class="setup"> <?=$row['setup'];?> </a>
        <script>
        function myFunction() {
          document.getElementById("do").innerHTML = "<?=$row['punchline'];?>";
        }
      </script>
        <?php
      }
    }
    // Dad Selected
    if (!isset($_POST['All']) && !isset($_POST['general']) && !isset($_POST['food']) && !isset($_POST['knock']) && !isset($_POST['programming'])  && isset($_POST['dad'])) {
      $Query = $pdo->prepare("SELECT * FROM mytable WHERE type = :dad ORDER BY RAND() Limit 1");
      $Query->bindParam(':dad', $_POST["dad"]);
      $Query->execute();
      while($row = $Query->fetch(PDO::FETCH_ASSOC)){
        ?>
        <a class="setup"> <?=$row['setup'];?> </a>
        <script>
        function myFunction() {
          document.getElementById("do").innerHTML = "<?=$row['punchline'];?>";
        }
      </script>
        <?php
      }
    }
    ?>
    <p id="do"></p>
    <button class="submit2" onclick="myFunction()">Reveal Punchline</button>
  </div>
  </ul>
  <script type="text/javascript">
      $('.f1').on('change', function() {
          $('.f1').not(this).prop('checked', false);
      });
  </script>

</body>

</html>
