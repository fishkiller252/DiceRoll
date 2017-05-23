

 <html lang="ja">
 <head>
   <meta charset="utf-8">
     <title>dice</title>
 </head>
 <body>
  <h1>ダイスロール</h1>
  <?php
  $x = 0;
  if (isset($_POST["max"])) {
  $x = $_POST["max"];
}
  if($x==null){
    $dice=0;
  }else{
      $dice = mt_rand(1,$x);
  }


   ?>
  <form action="dice.php" method="post">
		<label>最大値</label>
		<input type="text" name="max">
		<button type="submit">ダイスロール</button>
	</form>

   <p>サイコロの目は「 <?php echo $dice; ?>」でした！</p>
   <p><a href="<?php echo $_SERVER["SCRIPT_NAME"]; ?>">もう一回</a></p>
 </body>

 </html>
