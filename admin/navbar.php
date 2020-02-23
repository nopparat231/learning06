
<nav class="navbar navbar-expand-md navbar-light">
  <div class="container"> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar6">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar6"> 
    <a class="navbar-brand text-primary d-none d-md-block" href="index.php">
    <img src="./img/logonew3.png" alt="" width="80%" >
      <!-- <img src="../img/icon.png" width="25%" height="25%"> --><!-- <img src="../img/13.png" width="50"> -->
      <!-- <b> COMPUTER ATC</b> -->
      <!-- <img src="./img/logo.gif" alt="" width="100%"> -->
    </a>
    <ul class="navbar-nav mx-auto"></ul>
    <ul class="navbar-nav">
    <li class="nav-item">
      <?php if(isset($_SESSION["Userlevel"]) == "A"): ?>
        
          
            <?php echo "ยินดีต้อนรับคุณ " . $_SESSION["User"]; ?>
         
        </li>
       
      <?php endif ?>

    </ul>
  </div>
</div>
</nav>