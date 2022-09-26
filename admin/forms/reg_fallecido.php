<?php
require('../conexion.php');
$sql = ("SELECT * FROM fallecido ");
$result = $mysqli->query($sql);;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rokka</title>
    <!--  Bootstrap  CSS -->
    <link rel="stylesheet" href="../styles/css/bootstrap.min.css">
    <!-- ESTILOS CSS  -->
    <link rel="stylesheet" href="../styles/index.css">
    <!-- FUENTES -->
    <!-- roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- HEADER  -->
        <section class="content-header mb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Registro para Fallecidos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Registro para Fallecidos</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- //*FORMULARIO-->
        <section class="contend">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title ht">Registro para Fallecidos</h3>
                </div>
                <!-- card body -->
                <div class="card-body">
                    <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                        <h4 class="mb-5">Datos Personales</h4>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="inputName">Primer Nombre</label>
                                    <input type="text" value="" name="nm1" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="inputName">Segundo Nombre</label>
                                    <input type="text" value="" name="nm2" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="inputName">Primer Apellido</label>
                                    <input type="text" value="" name="ap1" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="inputName">Segundo Apellido</label>
                                    <input type="text" value="" name="ap2" class="form-control">
                                </div>
                            </div>
                            <!-- 2da -->
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label for="tpdoc" style="visibility:hidden ;">.</label>
                                    <select class="form-control" id="tpdoc" name="tpdoc">
                                        <option value="V">V</option>
                                        <option value="E">E</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="nrodoc">Nro. Documento</label>
                                    <input type="text" name="nrodoc" id="nrodoc" minlength="6" maxlength="8" class="form-control  " required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="fhcito">Fec.Nacimiento</label>
                                    <input type="date" name="fhcito" id="fechaNacimiento" class="form-control  ">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label for="edad">Edad:</label>
                                    <input type="text" name="edad" id="edad" class="form-control  " readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="nrodoc">Lugar de Nacimiento</label>
                                    <select name="estado" require class="form-control custom-select">
                                        <?php
                                        $sqlestado = ("SELECT * FROM estado ");
                                        $resestado = $mysqli->query($sqlestado);
                                        while ($row = mysqli_fetch_array($resestado)) {
                                            $id = $row['idestado'];
                                            $estado = $row['estado'];
                                        ?>
                                            <option value="" selected>Estado</option>
                                            <option value="<?php echo $id; ?>"><?php echo $estado; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label style="visibility:hidden ;">.</label>
                                    <select  name="municipio" require class="form-control custom-select">
                                        <?php
                                        $sqlmun = ("SELECT * FROM municipios ");
                                        $resmun = $mysqli->query($sqlmun);
                                        while ($row = mysqli_fetch_array($resmun)) {
                                            $id = $row['idmunicipio'];
                                            $mun = $row['municipio'];
                                        ?>
                                            <option value="" selected>Municipio</option>
                                            <option value="<?php echo $id; ?>"><?php echo $mun; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div> <!-- ROW -->

                        <!-- //*REGISTRO -->
                        <div align="right" class="col-md-12">
                            <input class="btn-r" type="submit" value="Registrar">
                        </div>
                    </form>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div align="center" class="mt-5">
                <button class="btn-at "><a class="link-at" href="rpt_fallecido.php">Atras</a></button>
            </div>
        </section>
    </div>


    <!-- BOOSTSTRAP JS -->
    <script src="../script/main.js"></script>
    <script src="../styles/js/bootstrap.bundle.min.js"></script>
</body>

</html>