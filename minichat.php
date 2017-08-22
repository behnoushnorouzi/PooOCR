<?php
include 'header.php';
include 'nav.php';    include __DIR__.'/core/connection.php'; ?>

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
            <input type="text" class="validate" name="pseudo" value="<?php if(isset($_COOKIE['name'])){ echo  $_COOKIE['name']; }else{echo "false";} ?>">
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

  <!-- Display the chats-->
  <?php   $select = $db->query('SELECT pseudo, message, DATE_FORMAT(`date`, "%d/%m/%Y %Hh %i min %s s") AS date FROM chat ORDER BY `date` DESC'); ?>

      <ul class="collection">
        <?php while($chat = $select->fetch()){ ?>
        <li class="collection-item avatar">
          <img src="images/yuna.jpg" alt="" class="circle">
          <span class="date">  <?php echo $chat['date']; ?> </span></br>
          <span class="title">  <?php echo $chat['pseudo']; ?> </span>
          <p><?php echo $chat['message']; ?> </p>
        </li>
      <?php } ?>
      </ul>
</div>
<?php include 'footer.html'; ?>
