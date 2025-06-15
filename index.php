<?php
 require './layout/header.php';
  require './data/3pointsHome.php'; 
?>
<section
class="h-[100vh] bg-[url(./assets/people.png)] bg-center flex! justify-center items-center relative">
<h2 class="text-white absolute z-10 uppercase text-5xl! font-bold!">Together, let's build the future !</h2>
<div class="bg-black/40 w-[100%] h-[100%] absolute top-0 z-0"></div>
</section>
<section class="section flex! flex-col items-center  gap-15 h-[100vh]">
    <p class="text-white text-center text-xl flex flex-col gap-3"> <span> <strong class="text-[#ffd43b]!">People inc. </strong>is the future of IT interim. We offer you the best IT freelancers ther is to offer !</span> <span> You have a project ? <strong class="text-[#ffd43b]!">People inc. </strong>has the right person for the job. </span> </p>
    <ul class="flex justify-between gap-20  mx-[10%]!">
<?php foreach ($pointTab as $point) : ?>
    <li>
    <div class="card h-full">
        <div class="card-header">
    <h3 class="card-header-title text-center flex! justify-center text-3xl!"><?= $point['title'] ?></h3>
      </div>
  <div class="card-content">
    <div class="content">
    <p class="text-center"><?= htmlspecialchars($point['content'])  ?></p> 
    </div>
  </div>
</div></li>
<?php endforeach; ?>
</ul>
<button  class="button bg-[#FFD43B]!  hover:bg-[#edc534]!  rounded-full!"> <a href="./ourPeople.php" class="text-black! w-[100%] h-[100%] ">Discover our people</a> </button>
</section>
<?php require './layout/footer.php' ?>


