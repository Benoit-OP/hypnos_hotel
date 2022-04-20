<?php
    require "header.html";
?>

        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Inscription</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Réservation</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Inscription</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="container-xxl py-5">
            <div class="container">
                <div id="hotel" class="text-center wow fadeInUp mb-5" >
                    <h4 class="section-title text-center text-primary text-uppercase">Inscription</h4>

                </div>

                <div style="margin-bottom: 15%; padding-inline: 5%;"> 
                    <form class="mb-5" action="" method="post" >

                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="nom">Nom</label>
                                <input type="text" id="nom" name="nom" class="form-control" placeholder="Bonin" value="" required/>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <label class="form-label" for="prenom">Prénom</label>
                                <input type="text" id="prenom" name="prenom" class="form-control" placeholder="David" value="" required />                    
                            </div>
                        </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">E-mail</label>
                                    <input type="email" id="email" name="email" value="" placeholder="exemple@mail.com" class="form-control" required/>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="prenom">Mot de passe</label>
                                    <input type="password" id="password" name="password" placeholder="*****" value="" class="form-control" required />                    
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
