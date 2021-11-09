
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
            <form class="custom-form" action=  "<?php echo URLROOT ?>/users/login"  method="POST" style="border: 3px solid orange;">
                <h1 style="margin-top:1em;">Connection</h1>
                <div class="form-row form-group">
                    <div class="col-sm-4 text-left label-column" style="margin-bottom:25px;"><label class="col-form-label" for="pseudo">Pseudo</label></div>
                    <div class="col-sm-6 input-column" style="margin-bottom:25px;"><input class="form-control" type="text" id="price" required="" placeholder="Votre pseudo ici.." name="pseudo">
                    <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </span></div>
                    
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 text-left label-column" style="margin-bottom:25px;"><label class="col-form-label text-left" for="password">Mot de passe</label>
                    </div>
                    <div class="col-sm-6 input-column" style="margin-bottom:25px;"><input class="form-control" type="password" placeholder="Votre mot de passe ici.." name="mdp">
                    <span class="invalidFeedback">
                
            </span></div>
                </div>
                <button class="btn btn-light submit-button" type="submit">Se connecter</button>
                <p class="options">Not registered yet? <a href="<?php echo URLROOT; ?>/users/inscrit">Create an account!</a></p>
            </form>
       
    </div>
    
    </div>
    <?php if(!empty($data['passwordError'])) { ?>
        <div class="alert show showAlert">
        <span  class="fa fa-exclamation-circle" aria-hidden="true"></span>
        <span class="msg"><?php echo $data['passwordError']; ?></span>
        <div class="close-btn">
          <span class="fa fa-times-circle-o" aria-hidden="true"></span>
        </div>
    </div>
    
 
    <?php } ?>

   
    <div>
        


    </div>
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