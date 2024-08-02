<?php $title = "Se connecter"; ?>
<?php ob_start();
?>

<!-- breadcrumb -->
<section class="section-breadcrumb container-fluid p-5">
  <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
    <ol class="breadcrumb pt-lg-3 mb-0">
      <li class="breadcrumb-item">
        <a class="breadcrumb-links" href="index.php?action=home"><i class="bi bi-house-door fs-lg me-1"></i>Accueil</a>
      </li>
      <li class="breadcrumb-item active" aria-current="page">Se connecter</li>
    </ol>
  </nav>
  <div class="container pb-4 mt-n1 mt-lg-0">
    <h1>Se connecter</h1>
  </div>
</section>

<section class="container py-5 my-1 my-md-4 my-lg-5">

<div class="row gx-5">
    <div class="col-6">
        <!--begin::bloc-->
        <div class="col-left-content">
                <h2 class="pb-3 pb-md-4 mb-lg-5">Du contenu exclusif 
                rien que pour vous !</h2>
                <img src="images/bloggerj-img-01.svg" class="img-fluid featured-image-post" alt="image">
        </div>
        <!--end::Title-->
    </div>
    <div class="col-6">
        <div class="card-shadow py-3 p-sm-4 p-md-5">
        <div class="card-header">
         <h3 class="fw-bold text-gray-900 display-6">Bienvenue sur mon blog</h3>
                        <p class="text-muted fw-semibold fs-5">
                            Pas encore abonné(e)?
                            <a href="index.php?action=register" class="color-link-primary fw-bold">Créer un compte</a>
                        </p>
                     
                </div>
            <div class="card-body">
            <form  method="post" class="needs-validation" novalidate>
            <div class="row g-4">
                
                 <!--begin::Form group-->
                <div class="col-sm-12 form-group-style">
                  <label class="form-label fs-base" for="email">Email</label>
                  <input type="email" placeholder="" id="email" name="login[email]" value="<?= isset($login) ? $login->getEmail() : '' ?>">
                  <?= isset($controle["email"]) ? '<p><i class="bi bi-arrow-right-short"></i>' . $controle["email"] . "</p>" : '' ?>
                </div>
                 <!--begin::Form group-->
                <div class="col-sm-12 form-group-style">                     
                        <label for="password" class="form-label fs-base">Password</label>
                        <input type="password" id="password" name="login[password]" value="<?= isset($login) ? $login->getPassword() : '' ?>">
                        <?= isset($controle["password"]) ? '<p><i class="bi bi-arrow-right-short"></i>' . $controle["password"] . "</p>" : '' ?>
                    
                </div>
               
                <div class="col-sm-12 pt-4">
                <div class="d-flex flex-wrap">
                <a href="index.php?action=home"><button type="button" class="btn btn-secondary me-3">Annuler</button></a> 
                <button type="submit" class="btn btn-primary">Envoyer</button>
                    
                </div>
                </div>
              </div>
              </form>
  

         




            
        </div>
    </div>
    </div>
  </div>

      </section>



<?php $content = ob_get_clean(); ?>
<?php require('templates/gabarit.php') ?>