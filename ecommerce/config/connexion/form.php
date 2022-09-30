<!DOCTYPE html>

<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/bootstrap.css">
    <link rel="stylesheet" href="/style.css">

    <title>Form</title>
</head>
<body>
    <form action="/action.php" method="GET">  <!-- Formulaire-->
        <div class="mb-3">
          <label for="email" method="GET" class="form-label">Adresse email</label>
          <input type="email" class="form-control" id="mail" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Nous ne partagerons pas votre email avec un tiers</div>
        </div>

        <div class="mb-3">
          <label for="password" method="GET" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" id="password">
        </div>

        <div class="mb-3">
          <label for="password" method="GET" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" id="password">
        </div>

          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form> <!-- Fin du formulaire-->

    
    
</body>
</html>





