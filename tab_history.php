<div class="header">
    <h1>MY PREVIOUS ORDER</h1>
  </div>
  <div class="tab">
    <button class="active">Previous Order</button>
    <a href="driver_history.php" target="_parent">
      <button>Driver History</button>
    </a>
  </div>
  <?php
  	/*CONNECT DB*/
	  sql_connect('gojek_db');

	  // tahap 1
	    $query_driver="SELECT pengguna.profpic, pemesanan.tanggal, pengguna.nama, pemesanan.pick_point, pemesanan.dest_point, pemesanan.rating, pemesanan.comment FROM pemesanan INNER JOIN pengguna WHERE pengguna.id = pemesanan.id_driver";
	    $result_driver = $con->query($query_driver);

    if ($row_driver = $result_driver->fetch(PDO::FETCH_NUM)) {
        do {
          $profpic = $row_driver[0];
          $tanggal = $row_driver[1];
          $nama = $row_driver[2];
          $pick_point = $row_driver[3];
          $dest_point = $row_driver[4];
          $rating = $row_driver[5];
          $comment = $row_driver[6];

          ?>
  <div id="content" class="content">
    <div class="picture">
      <img src="img/<?php echo $profpic; ?>">
    </div>
    <div class="text">
      <div class="up">
        <div class="contentup">
          <div class="tanggal"><?php echo $tanggal; ?></div>
          <div class="driver"><?php echo $nama; ?></div>
          <div class="tempat"><?php echo $pick_point; ?> &#8594; <?php echo $dest_point; ?></div>
        </div>
        <div class="hide">
          <button onclick="hide()">Hide</button>
        </div>
      </div>
      <div class="down">
        <div class="you-rated"> 
          <div> You Rated : </div>
          <div id="rating"><?php for($i=0;$i<$rating;$i++){
          ?> &star; <?php
          }?></div>
        </div>
        <div class="you-commented">
          <div>You Commented :</div>
          <div id="comment"><?php echo $comment; ?></div>
        </div>
      </div>
      <div></div>
    </div>
  </div>
  <?php
        } while ($row_driver = $result_driver->fetch(PDO::FETCH_NUM));
    } else {
      echo "<div id='nothing'><p>Nothing to display :(</p></div>";  
    }
    // tahap 1_END

    $query_driver = null;
    $result_driver = null;
    $con = null;
    /*END_CONNECT DB*/
   ?>