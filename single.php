<?php 
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require_once 'parts/header.php';

    if (!empty($_GET['id'])){
      $id = $_GET['id'];
    } else {
      header('Location:localhost/blog_php?page=home');
    }

    $fileContent = file_get_contents('./db.json');

    $posts = json_decode($fileContent, true);

    for($i = 0; $i < count($posts); $i++){
      $array = $posts[$i];
      if ($array['id'] == $id){
            $content = <<<POST
    <div class="card mb-3" style="margin-top: 1rem; display:flex; flex-direction:column; justify-content:center;align-items: center; text-align:center; margin-left:1rem; margin-right:2rem;">
    
    <h3 class="card-header">{$array['postTitle']}</h3>
    <img src="//unsplash.it/400" style="border-radius:5px;"/>

  
    <div class="card-body">
      <p class="card-text">{$array['postDescription']}</p>
    </div>
    <br>
    </div>

POST;
      } 

    }
      echo $content;



    require_once 'parts/footer.php';