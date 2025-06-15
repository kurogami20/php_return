<?php
 require './layout/header.php';
  require './data/3pointsHome.php'; 
?>
<section
class="h-[100vh] bg-[url(./assets/people.png)] bg-center flex! justify-center items-center relative">
<h2 class="text-white absolute z-10 uppercase text-5xl! font-bold!">Together, let's build the future !</h2>
<div class="bg-black/40 w-[100%] h-[100%] absolute top-0 z-0"></div>
</section>
<section class="section flex! flex-col items-center  gap-15 my-10 ">
    <p class="text-white text-center text-xl flex flex-col gap-3"> <span> <strong class="text-[#ffd43b]!">People inc. </strong>is the future of IT interim. We offer you the best IT freelancers there is to offer !</span> <span> You have a project ? <strong class="text-[#ffd43b]!">People inc. </strong>has the right person for the job. </span> </p>
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
<button  class="button bg-[#FFD43B]!  hover:bg-[#edc534]!  rounded-full! p-4!"> <a href="./ourPeople.php" class="text-black! w-[100%] h-[100%] text-lg">Discover our people</a> </button>
</section>
<div style="overflow: hidden;">
  <svg
    preserveAspectRatio="none"
    viewBox="0 0 1200 120"
    xmlns="http://www.w3.org/2000/svg"
    style="fill: #ffd43b; width: 124%; height: 345px; transform: rotate(180deg);"
  >
    <path
    d="M0 0v46.29c47.79 22.2 103.59 32.17 158 28 70.36-5.37 136.33-33.31 206.8-37.5 73.84-4.36 147.54 16.88 218.2 35.26 69.27 18 138.3 24.88 209.4 13.08 36.15-6 69.85-17.84 104.45-29.34C989.49 25 1113-14.29 1200 52.47V0z"
    opacity=".25"
  />
    <path
      d="M0 0v15.81c13 21.11 27.64 41.05 47.69 56.24C99.41 111.27 165 111 224.58 91.58c31.15-10.15 60.09-26.07 89.67-39.8 40.92-19 84.73-46 130.83-49.67 36.26-2.85 70.9 9.42 98.6 31.56 31.77 25.39 62.32 62 103.63 73 40.44 10.79 81.35-6.69 119.13-24.28s75.16-39 116.92-43.05c59.73-5.85 113.28 22.88 168.9 38.84 30.2 8.66 59 6.17 87.09-7.5 22.43-10.89 48-26.93 60.65-49.24V0z"
      opacity=".5"
    />
    <path d="M0 0v5.63C149.93 59 314.09 71.32 475.83 42.57c43-7.64 84.23-20.12 127.61-26.46 59-8.63 112.48 12.24 165.56 35.4C827.93 77.22 886 95.24 951.2 90c86.53-7 172.46-45.71 248.8-84.81V0z" />
  </svg>
</div>
<?php require './layout/footer.php' ?>


