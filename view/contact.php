
<h2 style="text-align:center;">Contact</h2>

<?php 

if(isset($_GET['status'])){
    $status = $_GET['status'];

    if($status === "success") {
        $output = <<<'OUTPUT'
        <div class="alert alert-dismissible alert-success">
        <p style="text-align:center;">Votre email à bien étais envoyer</p>
        </div>
OUTPUT;
        echo $output;
    } else {
        $output = <<<'OUTPUT'
        <div class="alert alert-dismissible alert-danger">
        <p style="text-align:center;">Erreur : votre email n'a pas été envoyer</p>
        </div>
OUTPUT;
        echo $output;
    }
}


  ?>

<div class="container">
        <form action="contact-process.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Name :</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Entrez votre nom..." tabindex="1" required>
        </div>
            <div class="form-group">
                <label for="email" class="form-label">Email :</label>
                <input  type="email" class="form-control" name="email" id="email" placeholder="Entrez votre email..." tabindex="2" required>
        </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject :</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Définisser votre sujet..." tabindex="3" required>
        </div>
            <div class="form-group">
                <label for="" class="form-label">Message :</label>
                <textarea class="form-control" name="message" id="message" placeholder="Entrez votre message..." tabindex="4" rows="5"></textarea>
        </div>
        <div>
            <button type="submit" class="btn">Send Message!</button>
        </div>
        </form>
    </div>