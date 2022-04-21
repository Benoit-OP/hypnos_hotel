
<?php
    require_once "php/functions.php";
    session_start();
?>

<?php
/*require_once "php/functions.php";*/

    if(!empty($_POST)){

        $errors = array();
        require_once 'php/db.php';

        if(empty($_POST['name'])){
            $errors['name'] = "Vous n'avez pas entré de Nom";
        }

        if(empty($_POST['firstname'])){
            $errors['firstname'] = "Vous n'avez pas entré de prénom";
        }

        if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $errors['email'] = "Votre email n'est pas valide";
        }
        else{
            $req = $pdo->prepare('SELECT id FROM users WHERE email = ?');
            $req->execute([$_POST['email']]);
            $user = $req->fetch();
           if($user){
               $errors['email'] = 'Cet email est déjà enregistré!';
           }

        }

        if(empty($_POST['password'])){
            $errors['password'] = "Votre mot de passe n'est pas valide";
        }

        if(empty($errors)){

            $req = $pdo->prepare("INSERT INTO users(name, firstname, email, password) VALUES (?, ?, ?, ?)");
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $req->execute([$_POST['name'], $_POST['firstname'], $_POST['email'], $password]);

            header('Location: dashboard.php');
            /*die('votre compte a été crée');*/
        }

        /*debug($errors);*/

    }

?>
<?php require "header.php"; ?>


        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Inscription</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Réservation</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Inscription</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <?php if(!empty($errors)): ?>

        <div class="alert alert-danger mx-5">
            <p>Votre formulaire n'a pas été enregistré correctement!</p>
            <ul>
            <?php  foreach($errors as $error): ?>
                <li><?php echo $error; ?></li>
            <?php endforeach ?>
            </ul>
        </div>
        <?php endif ?>

        <div class="container-xxl py-5">
            <div class="container">
                <div id="hotel" class="text-center wow fadeInUp mb-5" >
                    <h4 class="section-title text-center text-primary text-uppercase">Inscription</h4>

                </div>

                <div style="margin-bottom: 15%; padding-inline: 5%;"> 
                    <form class="mb-5" action="" method="POST" >

                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="name">Nom</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Bonin" value="" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="firstname">Prénom</label>
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="David" value=""  />                    
                            </div>
                        </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">E-mail</label>
                                    <input type="email" id="email" name="email" value="" placeholder="exemple@mail.com" class="form-control" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="prenom">Mot de passe</label>
                                    <input type="password" id="password" name="password" placeholder="*****" value="" class="form-control" />                    
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-warning" type="submit">M'inscrire</button>
                    </form>
                
                </div>
            </div>
        </div>

        <?php
    require "footer.html";
?>
