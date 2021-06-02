<?php 
/*include_once 'app/Models/Hijo.php';
include_once 'app/Models/Projects.php';

include_once "lib1/Projects.php";*/

use App\Models\{Hijo, Projects, Pro};

$jobs = Hijo::all();

/*$job1 = new Hijo();
$job1 -> setTitle('PHP DEVELOPERS');
$job1 -> description = 'PHP es un lenguaje muy fácil para trajar con SQL y HTML, ademas para hacer sufrir a los chicos de bacho';
$job1 -> visible = true;
$job1 -> experiencia = 13;

$job2 = new Hijo();
$job2 -> setTitle('JAVA DEVELOPERS');
$job2 -> description = 'PHP es un lenguaje muy fácil para trajar con SQL y HTML, ademas para hacer sufrir a los chicos de bacho';
$job2 -> visible = true;
$job2 -> experiencia = 25;

$job3 = new Hijo();
$job3 -> setTitle('HTML-CSS-JS DEVELOPERS');
$job3 -> description = 'PHP es un lenguaje muy fácil para trajar con SQL y HTML, ademas para hacer sufrir a los chicos de bacho';
$job3 -> visible = true;
$job3 -> experiencia = 22;

$job4 = new Hijo();
$job4 -> setTitle('SQL DEVELOPERS');
$job4 -> description = 'PHP es un lenguaje muy fácil para trajar con SQL y HTML, ademas para hacer sufrir a los chicos de bacho';
$job4 -> visible = true;
$job4 -> experiencia = 34;
/*
/*$project1 = new Projects ();
$project1 -> setTitle ('Mi proyecto 1');
$project1 -> description = 'Esta es una descripción muy corta de mi proyecto 1';
$project1 -> experiencia = 22;*/
$projects = Projects::all();
/*
$jobs = [
     [
       $job1
//       'total' => false
     ],
     [
       $job2
//       'total' => false
     ],
     [
        $job3
//        'total' => false
      ],
     [
          $job4
//        'total' => true
     ],

   ];

/*$projects = [
     [ 
         $project1
     ],
];*/

   //var_dump($jobs[0]['title']);

  function Myfunction($dato){
   echo '<ul>';
   echo '<li  style="font-size: 20px;">' . $dato->title. '</li>';
   echo '</ul>';
   echo '<p>' . $dato->description. '</p>';
   echo '<div>';
   echo '<h6>Conocimientos</h6>';
   echo '<li style="margin-left: 20px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </li>';
   echo '<li style="margin-left: 20px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </li>';
   echo '<li style="margin-left: 20px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </li>';
   echo '<li style="margin-left: 20px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </li>';
  // echo '<h6>' .'Experiencia: ' . $dato->conversion(). ' meses'. '</h6>';
   echo '</div>';
   //if($jobs[$valor]['total']==true){
   //  echo '<h6>'.'Experiencia total: ' . $totalMeses += $dato->experiencia. '</h6>';
   }
   

   $pro1 = new Pro();
   $pro1 -> encabezado = 'Proyecto PHP';
   $pro1 -> reseña = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis commodi assumenda quis! Non, voluptas, eum delectus modi error iste praesentium voluptatibus blanditiis facere eveniet fugit labore tempore quae, saepe earum.';
   $pro1 -> imagen = 'https://4.bp.blogspot.com/-xrVb9sSX4HQ/XDjWJvT6ehI/AAAAAAAAC_s/e_wpznZPcPcg4TQb40fcBSwxaVLfZNc5QCLcBGAs/s1600/php.png';

   $pro2 = new Pro();
   $pro2 ->  encabezado = 'Proyecto HTML';
   $pro2 -> reseña = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis commodi assumenda quis! Non, voluptas, eum delectus modi error iste praesentium voluptatibus blanditiis facere eveniet fugit labore tempore quae, saepe earum.';
   $pro2 -> imagen = 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/230px-HTML5_logo_and_wordmark.svg.png';

   $pro3 = new Pro();
   $pro3 -> encabezado = 'Proyecto C++';
   $pro3 -> reseña = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis commodi assumenda quis! Non, voluptas, eum delectus modi error iste praesentium voluptatibus blanditiis facere eveniet fugit labore tempore quae, saepe earum.';
   $pro3 -> imagen = 'https://upload.wikimedia.org/wikipedia/commons/1/18/ISO_C%2B%2B_Logo.svg';

   $proyectos = [
      $pro1,
      $pro2,
      $pro3
   ];

   function Proyecto($info){
     echo '<div class="row section">';
     echo '<h5>' . $info->encabezado. '</h5>';
     echo '<img class="col s3" style= "width: 10rem;" src='.$info->imagen.' >';
     echo '<p class="col s7" style="margin-top: 30px;">' .$info->reseña. '</p>';
     echo '</div>';
    /* <div class="row section">
      <h5>Proyecto HTML</h5>
         <img class="col s3" style= "width: 10rem;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/230px-HTML5_logo_and_wordmark.svg.png" > 
         <p class="col s7" style="margin-top: 30px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis commodi assumenda quis! Non, voluptas, eum delectus modi error iste praesentium voluptatibus blanditiis facere eveniet fugit labore tempore quae, saepe earum.</p>
      </div>
      <div class="row section">
        <h5>Proyecto C++</h5>
         <img class="col s3" style= "width: 10rem;" src="https://upload.wikimedia.org/wikipedia/commons/1/18/ISO_C%2B%2B_Logo.svg" > 
         <p class="col s7" style="margin-top: 30px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis commodi assumenda quis! Non, voluptas, eum delectus modi error iste praesentium voluptatibus blanditiis facere eveniet fugit labore tempore quae, saepe earum.</p>
      </div>*/   
   }
   