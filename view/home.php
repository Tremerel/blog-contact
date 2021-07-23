<div class="container" style="display:flex; flex-direction:column; justify-content:center;align-items: center; text-align:center;">
<h2>Home Page</h2>

    <div class="list-group">
    <?php
        $fileContent = file_get_contents('./db.json');

        $posts = array_reverse(json_decode($fileContent, true));

        if(count($posts) > 0){
                foreach($posts as $array) {
                    $id = $array['id'];
            $content = <<<POST
            <a href="$actual_link/single.php?id=$id" class="list-group-item list-group-item-action">{$array['postTitle']}</a>
POST;
echo $content;    
        }} else {
            $content = <<<POST
            <div>
                <p>Aucun Arcticle publié pour l'instant. Ecrivez le premier...</p>
            </div>
POST;
echo $content;   
        }

    ?>
    </div>


<h3>Créer un article</h3>

<?php 

if(isset($_GET['status'])){
    $status = $_GET['status'];

    if($status === "success") {
        $output = <<<'OUTPUT'
        <div class="alert alert-dismissible alert-success">
        <p style="text-align:center;">Votre post a été sauvegarder</p>
        </div>
OUTPUT;
        echo $output;
    } else {
        $output = <<<'OUTPUT'
        <div class="alert alert-dismissible alert-danger">
        <p style="text-align:center;">Erreur de sauvegarde</p>
        </div>
OUTPUT;
        echo $output;
    }
}


  ?>

    <form action="process.php" method="post" style="display: flex; flex-direction:column; align-items:center; gap: 1rem;">
    <input type="text" class="form-control" id="exampleTextarea" name="title" placeholder="Entrez le titre" required>
    <textarea class="form-control" id="exampleTextarea"  name="description" rows="5" placeholder="Entrez la description" required></textarea>
    <input type="submit" name="submit" value="Sauvegarder" class="btn btn-primary">
    </form>




</div>
 