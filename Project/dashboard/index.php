<?php
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
        header("location: ../login/");
        exit();
     }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tournament Discount</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="Logout">
    <a href="../logout/">Logout</a>
    </div>
    <div id="container">
    <h1>Tournament Discount</h1>
    <div id="calculator">
  
  
      <form>
        <p>How much was your entry amount ?
          <p>
            Rs <input id="billamt" type="text" placeholder="Entry Amount">
  
            <p>How much experience your team is ?
              <p>
                <select id="serviceQual">
              <option disabled selected value="0">-- Choose an Option --</option>
              <option value="0.3">30&#37; &#45; Invitational</option>
              <option value="0.2">20&#37; &#45; International level Champions</option>
              <option value="0.15">15&#37; &#45; Local Tournament Champions</option>
              <option value="0.1">10&#37; &#45; Previously played for at least once</option>
              <option value="0.05">5&#37; &#45; New entry</option>
          </select>
  
      </form>
      <p>How many players are sharing the amount?</p>
      <input id="peopleamt" type="text" placeholder="Number of Players"> players
      <button type="button" id="calculate">Calculate!</button>
  
    </div>
    <!--calculator end-->
    <div id="totalDiscount">
      Rs <span id="Discount">0.00</span>
      <small id="each">each</small>
    </div>
    <!--totalDiscount end-->
  
  </div>
  <!--container end-->
 
  
  <script type="text/javascript" src="index.js"></script>
</body>
</html>