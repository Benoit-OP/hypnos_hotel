<?php

require "header.php";
?>

<body>
    <div class="container-xxl bg-white p-0">

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp">
                    <h1 class="mb-5"> <span class="text-primary text-uppercase">Connexion</span></h1>
                    <h6 class="section-title text-center text-primary text-uppercase">Vous êtes :</h6>
                </div>
                <div class="row g-4">                    
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">      
                            <button style="border:0px" type="button" data-bs-toggle="modal" data-bs-target="#clientModal">          
                                <div class="p-4 mt-2">                              
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0">Client</h5>
                                        <img src="img/client.png" height="300px" width="300px" alt="icône client">
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <button style="border:0px" type="button" data-bs-toggle="modal" data-bs-target="#adminModal">
                                <div class="p-4 mt-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0">Administrateur</h5>
                                        <img src="img/admin.png" height="300px" width="200px" alt="icône administrateur">
                                    </div>            
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="room-item shadow rounded overflow-hidden">
                            <button style="border:0px" type="button" data-bs-toggle="modal" data-bs-target="#gerantModal">
                                <div class="p-4 mt-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0">Gérant</h5>
                                        <img src="img/gerant.png" height="300px" width="300px" alt="icône gérant">
                                    </div>                              
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div style="margin-left: 40%;">
            <b>Pas pas encore client? <a href="inscription.php">Inscrivez-vous</a>!</b>
        </div>    

        


        <!-- Modal connexion client-->

        <div class="modal fade" id="clientModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Se connecter (client)</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                              <input type="email" id="mailClient" name="mailClient" class="form-control" />
                              <label class="form-label" for="mailClient">Votre e-mail</label>
                            </div>
                          
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                              <input type="password" id="passwordClient" name="passwordClient" class="form-control" />
                              <label class="form-label" for="passwordClient">Mot de passe</label>
                            </div>                       
                          
                            <!-- Submit button -->
                            
                            <button type="submit" class="btn btn-primary btn-block mb-4">Se connecter</button>                     
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
              </div>
            </div>
          </div>




        <!-- /Modal connexion client-->


        <!-- Modal administrateur -->
      <div class="modal fade" id="adminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Se connecter (administrateur)</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="">
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                              <input type="number" id="adminBadge" name="adminBadge" class="form-control" />
                              <label class="form-label" for="adminBadge">numéro badge</label>
                            </div>
                          
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                              <input type="password" id="passwordAdmin" name="passwordAdmin" class="form-control" />
                              <label class="form-label" for="passwordAdmin">Mot de passe</label>
                            </div>                       
                          
                            <!-- Submit button -->

                            <button type="submit" class="btn btn-primary btn-block mb-4">Se connecter</button>                    
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>

                </div>
              </div>
            </div>
          </div>
        <!-- /Modal administrateur -->

        <!-- Modal Gérant -->
        <div class="modal fade" id="gerantModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Se connecter (gérant)</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="">
                            <div class="form-outline mb-4">
                              <input type="number" id="gerantBagde" name="gerantBagde" class="form-control" />
                              <label class="form-label" for="gerantBagde">numéro badge</label>
                            </div>
                            <div class="form-outline mb-4">
                              <input type="password" id="passwordGerant" name="passwordGerant" class="form-control" />
                              <label class="form-label" for="passwordGerant">Mot de passe</label>
                            </div>                       
                          

                            <button type="submit" class="btn btn-primary btn-block mb-4">Se connecter</button>                     
                    </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
              </div>
            </div>
          </div>

        <!-- /Modal Gérant -->

<?php
 require "footer.html";
?>