<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECommerce Form ❤️</title>
    <link rel="stylesheet" href="styled.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


    <div class="container">
        <div class="row justify-content-center">
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                    <img src="img/bootstrap.png" alt="bootstrap-logo" width="30" height="24" class="d-inline-block align-text-top">
                     Online Shop
                    </a>
                </div>
            </nav>
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-header">
                        <center><h1 class="text-primary">ETUDIANT</h1></center>
                    </div>
                    <div class="card-body">
                
                        <form action="traitement.php" method="post">
                            <center><h3>Identité</h3></center>
                            <label for="">Matricule</label>
                            <input type="text" name="txtMat" class="form-control">
                            <label for="">Nom</label>
                            <input type="text" name="txtNom" class="form-control">
                            <label for="">Adresse</label>
                            <input type="text" name="txtAdresse" class="form-control" >
                            <label for="">Email</label>
                            <input type="text" name="txtEmail" class="form-control">
                            <label for="">Img</label>
                            <input type="text" name="txtImg" class="form-control">
                            <label for="">Newsletter</label>
                            <input type="text" name="txtNewsletter" class="form-control">
                            <label for="">Password</label>
                            <input type="password" name="txtPassword" class="form-control">
                            <label for="">Region</label>
                            <input type="text" name="txtRegion" class="form-control">
                            <label for="">Role</label>
                            <input type="text" name="txtRole" class="form-control">
                            <label for="">Sex</label>
                            <input type="text" name="txtSex" class="form-control">
                            <label for="">Tde</label>
                            <input type="text" name="txtTde" class="form-control">
                            <label for="">Ville</label>
                            <input type="text" name="txtVille" class="form-control">
                            <center><h3>Operation</h3></center>
                            <center>
                                <input type="submit" name="save" value="Save"  class="btn btn-primary">
                                <input type="submit" name="update" value="Update" class="btn btn-primary" disabled data-bs-toggle="button">
                                <input type="submit" name="delete" value="Delete"  class="btn btn-primary" disabled data-bs-toggle="button">
                                <input type="submit" name="cancel" value="Cancel" class="btn btn-primary" disabled data-bs-toggle="button" >
                            </center>
                            
                        </form>

                    </div>
                </div>
            </div>
        </div>
   
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>