<?php require_once './data/personTab.php';?>



<?php require './layout/header.php' ?>
<nav class="breadcrumb pl-8 pt-4 " aria-label="breadcrumbs">
  <ul>
    <li><a href="./index.php" class="text-[#ffd43b]!">Home</a></li>
    <li class="is-active"><a href="./ourPeople.php" aria-current="page" class="text-[#ffe27a]!">Our people</a></li>
  </ul>
</nav>
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