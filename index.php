<?php
//Verifico se il valore dell'input email é o no stringa vuota

$email = $_POST['email'] ?? '';

//Funzione di controllo dei caratteri inseriti 

function isRightChar($email){
    if(strpos($email, '@') && strpos($email, '.')){
        return true;
    }else {
        return false;
    }
}
 
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
        <section class="py-3 bg-dark">
            <div class="container text-light">
                <h1>NewsLetter</h1>
            </div>
        </section>
    </header>
    <main>
    <section>
        <!-- Controllo se la e-mail é corretta  -->
            <div class="container bg-dark">
                <!-- Se é corretta  -->
                <?php if(isRightChar($email)){ ?>
                    <div class="alert alert-primary">Email inserita con successo! Ora fai parte della nostra community!</div>
                <!-- Seno' controllo che l'array associativo ($_POST) abbia la chiave 'e-mail' -->
                <?php }else if(array_key_exists('email', $_POST)){  ?>  
                 <div class="alert alert-primary">Inserire una mail con questi due caratteri "@" oppure "."</div>
                <?php }?>
            </div>
        </section>
        <!-- Form -->
        <section class="py-3 bg-dark">
            <div class="container" >
                <form action="" method="POST" class="d-flex gap-3" >
                    <input class="form-control w-50" name="email" type="text" placehlder="inserisci qui la tua mail ">
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