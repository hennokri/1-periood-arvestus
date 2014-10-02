<!DOCTYPE html>
<html>
<head>
  <?php include "../components/html-head.php"; ?>
</head>

<body>
  <div id="site-container">
    <?php include "../components/site-header.php"; ?>

    <main id="site-body">
      <section id="site-content">
        <h2>Tingimuslause</h2>
       <?php $nr = rand(100 , 200); ?>
			<?php 
			if (150 < $nr){
			echo "Juhuslik number {$nr} on suurem kui 150";} 
			elseif  (150 > $nr){
			echo "Juhuslik number {$nr} on väiksem kui 150";}
			?>

        <h2>Juhuslik pilt</h2>
         <?php
            echo '<img src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/'.rand(1,12).'.jpg">'
          ?>


        <h2>Kõikide piltide väljastamine</h2>
    <?php
            $i=1;
          while ($i <= 13):
            echo '<img src="http://users.khk.ee/kaspar.naaber/svp/periood-1/arvestus/images/' . $i . '.jpg">';
              $i++;
          endwhile;
          ?>
      </section>
    </main>

    <?php include "../components/site-footer.php"; ?>
  </div>
</body>
</html>
