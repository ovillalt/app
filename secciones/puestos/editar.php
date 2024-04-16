<?php include ("../../bd.php"); 
if(isset($_GET['txtID'])){
    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
    $sentencia = $conexion->prepare("SELECT * FROM tbl_puestos WHERE id=:id");
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);
    $nombredelpuesto=$registro["nombredelpuesto"];
    //header("location:index.php");
}
if ($_POST) {
    print_r($_POST);
    //Recolectamos los datos del metodo POST
    $txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
    $nombredelpuesto = (isset($_POST["nombredelpuesto"]) ? $_POST["nombredelpuesto"]:"");
    //Prepara la inserccion de los datos tbl_puestos
    $sentencia = $conexion->prepare("UPDATE tbl_puestos SET nombredelpuesto=:nombredelpuesto WHERE id=:id");
    //Asignado los valores que tiene el metodo POST(Los que vienen del formulario)
    $sentencia->bindParam(":nombredelpuesto", $nombredelpuesto);
    $sentencia->bindParam(":id", $txtID);
    $sentencia->execute();
    header("location:index.php");

}
?>
<?php include ("../../templates/header.php"); ?>


<h1>Editar puestos</h1>
<div class="card">
    <div class="card-header">Puestos</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="txtID" class="form-label">ID:</label>
                <input type="text" value="<?php echo $txtID; ?>" class="form-control" readonly name="txtID" id="txtID" aria-describedby="helpId"
                    placeholder="ID" />
            </div>

            <div class="mb-3">
                <label for="nombredelpuesto" class="form-label">Nombre del puesto:</label>
                <input type="text" value="<?php echo $nombredelpuesto; ?>"class="form-control" name="nombredelpuesto" id="nombredelpuesto"
                    aria-describedby="helpId" placeholder="Nombre del puesto" />

            </div>
            <button type="submit" class="btn btn-success">
                Actualizar
            </button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">cancelar</a>
        </form>
    </div>
    <div class="card-footer text-muted">Footer</div>
</div>




<?php include ("../../templates/footer.php"); ?>