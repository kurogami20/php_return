<?php require_once './data/personTab.php';?>



<?php require './layout/header.php' ?>
<section
class="section">
    <ul class="flex flex-wrap gap-5 p-4 justify-center">
   <?php foreach($personArray as $person): ?>
<li><div class="card w-96 ">
 
  <div class="card-content">
    <div class="media">
      
      <div class="media-content">
        <p class="title is-4"><?= htmlspecialchars($person['id'])  ?></p>
       
      </div>
    </div>

    <div class="content">
      <ul>
        <li><?= htmlspecialchars($person['city_name'])  ?></li>
        <li><?= htmlspecialchars($person['zip_code'])  ?></li>
      </ul>
    </div>
  </div>
</div></li>
    <?php endforeach; ?>
</ul>
</section>
<?php require './layout/footer.php' ?>