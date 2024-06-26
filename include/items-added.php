<section class="recent-added-items__container">

<div class="recent-added-items__maintitle">
   <h2>Explorer les ajouts récents</h2>
</div>

<div class="recent-added-items__last-items-container">
   <?php
   try {
   
      $connexion = new PDO('mysql:host=localhost;dbname=BD_GAMEGOGS', 'zisquier', 'pass');
  
   } catch (PDOException $getError) {
      echo 'erreur :' . $getError->getMessage();
   }
   $req = 'SELECT * FROM video_games';
   $req_results = $connexion->query($req);
   
   
   
   foreach ($req_results as $result) {

      // version miniature
      $resultNoSpace3 = str_replace(' ','',$result[3]);
      echo  '<div id="item'.$result[0].'" class="recent-added-items__last-items item__'.$resultNoSpace3.' js-item">';
      echo  '<div class="recent-added-items__coverimage">';
      echo  '<img src="./assets/' . $result[5] . '" alt=""></div>';
      echo  '<div class="recent-added-items__title"><h3>' . $result[1] . '</h3></div>';
      echo  '<div class="recent-added-items__subtitle"><h4>' . $result[2] . '</h4></div>';
      echo  '<div class="recent-added-items__plateform"><p>' . $result[3] . '</p></div>';
      echo  ' </div>';

      // version clakable agrandit            
      echo  '<div class="hidden__field">';
      echo  '<div class="recent-added-maxitem__title"><h3>' . $result[1] . '</h3></div>';
      echo  '<div class="recent-added-maxitem__subtitle"><h4>' . $result[2] . '</h4></div>';
      echo  '<div class="recent-added-maxitem__plateform"><p>' . $result[3] . '</p></div>';
      echo  '<div class="recent-added-maxitem__year"><p>' . $result[6] . '</p></div>';
      echo  '<div class="recent-added-maxitem__coverimage">';
      echo  '<img src="./assets/' . $result[5] . '" alt=""></div>';

      echo  '<div class="recent-added-maxitem__editor">' . $result[7] . '</p></div>'; 
      echo  '<div class="recent-added-maxitem__genre">' . $result[4] . '</p></div>'; 
      echo  '<div class="recent-added-maxitem__subcontainer">';
      echo  '<div class="recent-added-maxitem__country">' . $result[8] . '</p></div>'; 
      echo  '<div class="recent-added-maxitem__ref">' . $result[9] . '</p></div>'; 
      echo  '<div class="recent-added-maxitem__support">' . $result[10] . '</p></div>'; 
      echo  ' </div>';

      echo  '<div class="recent-added-maxitem__price">' . "111 articles à partir de 15€50" . '</p></div>'; 

      echo  '<div class="buttons__item ">';
      echo  '<span class="btn__item btn__item--color-empty">Ajouter au caddie</span>';
      echo  '<span class="btn__item btn__item--color-orange">Ajouter aux Favoris</span>';

      echo  ' </div>';
      echo  ' </div>';
   } 
   $connexion = null; 
   ?>
</div>
<div class="recent-added-items__footer-list">
   <p>
      voir plus d'ajout récents >
   </p>
</div>

</section>