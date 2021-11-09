<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        require("includes/Head.php");
    ?>
    <title>E-Shop</title>
</head>
<body>
<?php
require("includes/Header.php");
require("includes/Navigation.php");

?>



    <div class="row pulse animated register-form">
        <div class="col-md-8 offset-md-2" style="margin-left:20%">
            <form class="custom-form" action=  "<?php echo URLROOT ?>/users/inscrit"  method="POST" style="border: 3px solid orange;">
                <h1 style="margin-top:1em;">Inscription</h1>
               
                <div class="form-row form-group">
                    <div class="col-sm-4 text-left label-column" style="margin-bottom:25px;"><label class="col-form-label" for="first_name">Nom</label></div>
                    <div class="col-sm-6 input-column" style="margin-bottom:25px;"><input class="form-control" type="text" placeholder="Votre nom ici.." name="first_name"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 text-left label-column" style="margin-bottom:25px;"><label class="col-form-label" for="last_name">Prénom</label></div>
                    <div class="col-sm-6 input-column" style="margin-bottom:25px;"><input class="form-control" type="text" id="last_name"  placeholder="Votre prénom ici.." name="last_name"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 text-left label-column" style="margin-bottom:25px;"><label class="col-form-label" for="pseudo">Pseudo</label></div>
                    <div class="col-sm-6 input-column" style="margin-bottom:25px;"><input class="form-control" type="text" id="pseudo" required="" placeholder="Votre pseudo ici.." name="pseudo"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 text-left label-column" style="margin-bottom:25px;"><label class="col-form-label" for="email">Email</label></div>
                    <div class="col-sm-6 input-column" style="margin-bottom:25px;"><input class="form-control" type="email" name="email" placeholder="Votre email ici.."></div>
                    <span class="invalidFeedback">
                       
                       
                       
                    </span>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 text-left label-column" style="margin-bottom:25px;"><label class="col-form-label" for="addresse">Adresse</label></div>
                    <div class="col-sm-6 input-column" style="margin-bottom:25px;"><input class="form-control" type="text" name="addresse" placeholder="Votre addresse ici.."></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 text-left label-column" style="margin-bottom:25px;"><label class="col-form-label" for="sexe" style="margin-top:1.4em;">sexe<br></label></div>
                    <div class="col-sm-6 d-inline-block" style="padding-top: 0.4em;margin-bottom:25px;margin-left:-10rem;">
                        <input type="radio" id="mr" name="sexe" checked="" required="" value="Mr">
                        <label for="mr" style="margin-top:1em;">Mr</label>
                        <input type="radio" id="mme" name="sexe" required="" value="Mme">
                        <label for="mme">Mme</label>
                    </div>
                </div>  
                <div class="form-row form-group">
                    <div class="col-sm-4 text-left label-column" style="margin-bottom:25px;"><label class="col-form-label" for="telephone">Téléphone</label></div>
                    <div class="col-sm-6 input-column" style="margin-bottom:25px;"><input class="form-control" type="number" name="telephone" placeholder="Votre numéro de téléphone ici.." min="10000000" max="99999999"></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 text-left label-column" style="margin-bottom:25px;"><label class="col-form-label text-left" for="mdp">Mot de passe (8 characters minimum)</label>
                    </div>
                    <div class="col-sm-6 input-column" style="margin-bottom:25px;"><input class="form-control" type="password" placeholder="Votre mot de passe ici.." name="mdp"></div>
                    <span class="invalidFeedback">
                        
                    </span>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 text-left label-column" style="margin-bottom:25px;"><label class="col-form-label text-left" for="mdp2">Retapper votre mot de passe&nbsp;</label> </div>
                    <div class="col-sm-6 input-column" style="margin-bottom:25px;"><input class="form-control" type="password" placeholder="Votre mot de passe ici.." name="mdp2"></div>
                    <span class="invalidFeedback">
                        
                    </span>
                </div><button class="btn btn-light submit-button" type="submit">S'inscrire</button>
            </form>
        </div>
    </div>
    <div>
        
    </div>

    <?php $s=10;
    if(!empty($data['passwordError'])){
      
        
        echo('<div class="alert show showAlert" style="top:'.$s.'px;width:550px;" >
        <span  class="fa fa-exclamation-circle" aria-hidden="true"></span>
        <span class="msg">'.$data['passwordError'].'</span>
        <div class="close-btn">
          <span class="fa fa-times-circle-o" aria-hidden="true"></span>
        </div>
          </div>');
          $s+=80;
    }
    if(!empty($data['confirmPasswordError'])){
        
        
        echo('<div class="alert show showAlert" style="top:'.$s.'px;width:550px;" >
        <span  class="fa fa-exclamation-circle" aria-hidden="true"></span>
        <span class="msg">'.$data['confirmPasswordError'].'</span>
        <div class="close-btn">
          <span class="fa fa-times-circle-o" aria-hidden="true"></span>
        </div>
          </div>');
          $s+=80;
    }
    
    if(!empty($data['emailError'])){
        
        echo('<div class="alert show showAlert" style="top:'.$s.'px;width:550px"; >
        <span  class="fa fa-exclamation-circle" aria-hidden="true"></span>
        <span class="msg">'.$data['emailError'].'</span>
        <div class="close-btn">
          <span class="fa fa-times-circle-o" aria-hidden="true"></span>
        </div>
          </div>');
          $s+=80;
    }
  
    
        ?>



    <?php
require("includes/Footer.php");
?>
<script type="text/javascript">
        setTimeout(function(){
          $('.alert').removeClass("show");
          $('.alert').addClass("hide");
        },5000);
      
      $('.close-btn').on("click",function(){
        $('.alert').removeClass("show");
        $('.alert').addClass("hide");
      });
    </script>
</body>
</html>

    