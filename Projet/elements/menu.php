<div id="menuArea">
  <input type="checkbox" id="menuToggle" ></input>

<label for="menuToggle" class="menuOpen">
  <div class="open"></div>
</label>

<div class="menu menuEffects">
  <label for="menuToggle"></label>
  <div class="menuContent">
    <ul>
      <li><a href="../main/index.php">ACCUEIL</a></li>
      <li><a href="../contact/contact.php">CONTACT</a></li>
      <?php
      if(isset($_SESSION['utilisateur']) == TRUE){
      echo '<li><a href="../contribution/contribution.php">CONTRIBUTION</a></li>';
      echo '<li><a href="../sessions/deconnexion.php">DECONNEXION</a></li>';
    }
    ?>

  </div>
</div>
</div>
