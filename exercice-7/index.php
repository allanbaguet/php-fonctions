<?php
$age = 25;
$gender = true;
// gender true -> Homme / false -> Femme
// .= sert à la concaténation / $message sert à afficher quelques chose, même si c'est faux
function exercice7($age, $gender) {
    $message = '';
    if ($age < 0 || $age > 100) {
        $message .= 'Entrez un âge valide';
    } else {
        if ($gender === true) {
            if ($age >= 18) {
                $message .= 'Vous êtes un homme et vous êtes majeur';
            } else {
                $message .= 'Vous êtes un homme et vous êtes mineur';
            }
        } elseif ($gender === false) {
            if ($age >= 18) {
                $message .= 'Vous êtes une femme et vous êtes majeure';
            } else {
                $message .= 'Vous êtes une femme et vous êtes mineure';
            }
        }
        return $message;
    }
}
$result = exercice7($age, $gender);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/exercice-2/public/assets/css/style.css">
    <title>Exercice 7</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-secondary d-flex">
        <div class="container-fluid">
            <a class="navbar-brand fs-2" href="#">Les fonctions</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav fs-4">
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-1/exercice1.php">Exercice 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-2/exercice2.php">Exercice 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-3/index.php">Exercice 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-4/index.php">Exercice 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-5/index.php">Exercice 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-6/index.php">Exercice 6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/exercice-7/index.php">Exercice 7</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-8/index.php">Exercice 8</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="text-center p-5">Exercice 7</h1>
                <p class="text-center fs-4">Faire une fonction qui prend deux paramètres : <strong>l'âge et le genre</strong> d'une personne. Le genre peut être : <br>
                    Homme <br> 
                    Femme   <br>
                    <br>
                    La fonction doit renvoyer en fonction des paramètres : <br>
                    <br>
                    Vous êtes un homme et vous êtes majeur <br>
                    Vous êtes un homme et vous êtes mineur <br> 
                    Vous êtes une femme et vous êtes majeure <br>
                    Vous êtes une femme et vous êtes mineure <br>
                    <br>
                    Gérer tous les cas.
                </p>
            </div>
        </div>
    </div>
    <hr class="border border-4 border-dark">
    <main>
        <div>
            <p> <?php echo $result ?> </p>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>