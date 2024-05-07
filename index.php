<?php
//  array_key_exists('email', $_POST);
$email = $_POST['email'] ?? '';
 

function isRightChar($email){
    if(strpos($email, '@') && strpos($email, '.')){
        return true;
    }else {
        return false;
    }
};
 function isFirstTime($post){
     if(array_key_exists('email', $_POST)){
         return true;
     }else{
         return false;
     }
 }
 isRightChar($email);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <title>Document</title>
</head>
<body>
    <header> 
    header
    </header>
    <main>
    <section>
            <div class="container">
                <?php if(isRightChar($email)){ ?>
                    <div class="alert alert-primary">Email inserita con successo! </div>
                <?php }else if(isFirstTime($email)){  ?>  
                 <div class="alert alert-primary">Inserire una mail con questi due caratteri "@" oppure "."</div>
                <?php }?>
            </div>
        </section>
        <section class="py-3">
            <div class="container">
                <form action="" method="POST">
                    <input class="form-control" name="email" type="text" placehlder="inserisci qui la tua mail ">
                    <input class="btn btn-primary " type="submit" value="Iscriviti">
                </form>
            </div>
        </section>
       
    </main>
    <footer>
        footer
    </footer>
    
</body>
</html>