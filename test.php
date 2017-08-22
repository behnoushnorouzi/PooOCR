<?php
include 'header.php';include 'nav.php';  ?>

<div class="section no-pad-bot" id="index-banner">
  <div class="container">
    <br><br>
    <h1 class="header center orange-text">Mini Chat</h1>
    <div class="row center">
      <h5 class="header col s12 light">Allez</h5>
    </div>

    <br><br>

  </div>
  <!-- tag fini de page nav-->
  </div>

<div class="container">
<div class="row">
    <!-- Form-->
      <form class="col s12" method="post" action="minichat_post.php">
            <div class="row">
          <div class="input-field col s12">
            <input type="text" class="validate" name="pseudo" >
            <label for="pseudo">pseudo</label>
          </div>
          <div class="input-field col s12">
            <input type="text" class="validate" name="content">
            <label for="content">content</label>
          </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Go
            <i class="material-icons right">send</i>
       </button>
      </form>
</div>
      <br><br>
</div>
<?php include 'footer.html'; ?>
