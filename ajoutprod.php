<?php
var_dump($_POST);
 if(isset($_POST["submit"])){
    $lib=$_POST["libelle"];
    $qt=$_POST["qt"];
    $pu=$_POST["pu"];
    $sql="INSERT INTO produits (Libelle,Quantite,Prix) values ('$lib',$qt,$pu)";
    mysqli_query($connexion,$sql);
    header('location:index.php');
 }
?>
<div class="card col-md-8 offset-2 mt-5">

    <div class="card-header bg-warning">Ajout produit</div>
    <div class="card-body">
        <form action="" method="post">
            <label for="">Libelle</label>
            <input type="text" class="form-control" name="libelle">
            <br>
            <label for="">Quantite</label>
            <input type="text" class="form-control" name="qt">
            <br>
            <label for="">Prix Unitaire</label>
            <input type="text" class="form-control" name="pu">
            <br>
            <button class="btn btn-danger" name="reset">Retour</button>
            <button class="btn btn-success" name="submit">Ajouter</button>

        </form>

    </div>
</div>