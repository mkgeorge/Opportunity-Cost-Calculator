<?php
// create short variable names
  $item = $_POST['item'];
  $item= ucwords($item); 
  $price = $_POST['price'];
  $sq = 0;
  $mtq = 0;
  $ctq = 0;
  $ps = 1.29;
  $pmt = 8.38;
  $pct = 15;
  $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
  $date = date('H:i, jS F Y');
?>
<head>
  <title>Opportunity Cost Calculator</title>
  <style>
    body {
      text-align: center;
      background: url("http://downloads.dvq.co.nz/assets/img/downloads/hand-crafted-wood-v2/2560x1440.png");
      background-size: cover;
      background-position: center;
      color: white;
      font-family: helvetica;
    }
    p {
      font-size: 22px;
    }
    h1 {
      font-size: 60px;
      font-family: helvetica;
      color: black;
    }
    h2 {
      font-size: 50px;
      font-family: helvetica;
    }
    input {
      border: 0;
      padding: 10px;
      font-size: 18px;
    }
    input[type="submit"] {
      background: red;
      color: white;
    }
  </style>
</head>
<body><br><br><br>
<h1> Trade-Offs </h1>
<?php
echo "<h2> Your Opportunity Cost For Buying A / An ".$item." </h2>";
?>
<?php

    echo "<p>Opportunity cost calculated at ".date('H:i jS F Y')."</p>";
    
    $item= strtolower($item); 

    echo "<p>Your opportunity cost for getting a / an ".$item." is as follows:</p>";

    $sq = $price/$ps;
    
    $sq = floor($sq);

    $mtq = $price/$pmt;
    
    $mtq = floor($mtq);

    $ctq = $price/$pct;
    
    $ctq = floor($ctq);

    echo "<p>".$sq." cup(s) of Starbucks*</p>";
    
    echo "<p>or</p>";

    echo "<p>".$mtq." movie ticket(s)**</p>";
    
    echo "<p>or</p>";

    echo "<p>".$ctq." Celtics' ticket(s)***</p>";

?>
* According to Forbes, an average cup of Starbucks Coffee costs $1.29.<br>
** According to Journal Star, the average price of a movie ticket is $8.38.<br>
*** According to Stubhub, the average price of a Celtic ticket is $15.<br>
<br><br>
<A HREF="javascript:history.back()">Back</A>

</body>