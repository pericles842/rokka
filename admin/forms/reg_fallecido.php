<?php
require('../conexion.php');
if (isset($_POST['submit'])) {

    $nm1 = $_POST['nm1'];
    $nm2 = $_POST['nm2'];
    $ap1 = $_POST['ap1'];
    $ap2 = $_POST['ap2'];

    $ci = $_POST['tpdoc'] . $_POST['nrodoc'];
    $fhcito = $_POST['fhcito'];
    $edad = $_POST['edad'];
    $lgnc = $_POST['parroquian'] ."/". $_POST['municipion']; //*Lugar de nacimiento
    $cvil = $_POST['cvil'];
    $drccion = $_POST['drccion'];

    $hjos = $_POST['hjos'];
    $numhjos = $_POST['numhjos'];

    $fhllinto = $_POST['fhllinto'];
    $lgfll = $_POST['parroquiam'] ."/". $_POST['municipiom']; //*Lugar de fallecimiento
    $fhdefuncion = $_POST['fhdefuncion'];
    $actdef = $_POST['actdef'];

    $tmuerte = $_POST['tmuerte'];
    $cmuerte1 = $_POST['cmuerte1'];
    $protesis = $_POST['protesis'];
    $obs = $_POST['obs'];


    $sql = "INSERT INTO fallecido (name1,name2,ap1,ap2,fchnc,age,ci,estdcivil,drccion,lgrnc,lgrfll,fchdfun,numfun,
    hijos,numhijos,tpmuerte,csomuerte,protesis,observaciones) values ('" . ucfirst($nm1) . "','" . ucfirst($nm2) . "','" . ucfirst($ap1) . "','" . ucfirst($ap2) . "','" . $fhcito . "',
    '" . $edad . "','" . $ci . "','" . $cvil . "','" . $drccion . "','" . $lgnc . "','" . $lgfll . "','" . $fhdefuncion . "','" . $actdef . "','" . $hjos . "','" . $numhjos . "',
    '" . $tmuerte . "','" . $cmuerte1 . "','" . $protesis . "','" . $obs . "' ) ";
    $conexion = $mysqli->query($sql);
    //echo $sql; exit();
    echo '<script language="javascript">alert(" Registro Exitoso !!!");window.location.href="rpt_fallecido.php"; </script>';
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roka</title>
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
                        <h1>Registro del Fallecido</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Registro del Fallecido</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <!-- //*FORMULARIO-->
        <section class="contend">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title ht">Registro del Fallecido</h3>
                </div>
                <!-- card body -->
                <div class="card-body">
                    <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                        <h4 class="mb-5">Datos Personales </h4>
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
                                    <label for="fhcito">Fec. Nacimiento</label>
                                    <input type="date" name="fhcito" id="fechaNacimiento" class="form-control  ">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <label for="edad">Edad</label>
                                    <input type="text" name="edad" id="edad" class="form-control  " readonly>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Lugar de Nacimiento</label>
                                    <select name="parroquian" require class="form-control custom-select">
                                        <option value="" selected>Parroquia</option>
                                        <?php
                                        $sqlrroquia= ("SELECT * FROM parroquias ");
                                        $resrroquia = $mysqli->query($sqlrroquia);
                                        while ($row = mysqli_fetch_array($resrroquia)) {
                                            $id = $row['idparroquia'];
                                            $rroquia = $row['parroquia'];
                                        ?>
                                            <option value="<?php echo $id; ?>"><?php echo $rroquia; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label style="visibility:hidden ;">.</label>
                                    <select name="municipion" require class="form-control custom-select">
                                        <option value="" selected>Municipio</option>
                                        <?php
                                        $sqlmun = ("SELECT * FROM municipios ");
                                        $resmun = $mysqli->query($sqlmun);
                                        while ($row = mysqli_fetch_array($resmun)) {
                                            $id = $row['idmunicipio'];
                                            $mun = $row['municipio'];
                                        ?>
                                            <option value="<?php echo $id; ?>"><?php echo $mun; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <!-- 3ra -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label> Estado Civil</label>
                                    <select name="cvil" require class="form-control custom-select">

                                        <?php
                                        $sqlcvil = ("SELECT * FROM estadocivil ");
                                        $rescvil = $mysqli->query($sqlcvil);
                                        while ($row = mysqli_fetch_array($rescvil)) {
                                            $id = $row['idestcivil'];
                                            $cvil = $row['estcivil'];
                                        ?>
                                            <option value="<?php echo $id; ?>"><?php echo $cvil; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="edad">Direccion</label>
                                    <input type="text" name="drccion" class="form-control ">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Hijos</label>
                                    <select class="form-control custom-select"  name="hjos" onchange="numHijos(this.value)">
                                        <option value="no">no</option>
                                        <option value="si">si</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" style="display: none;" id="hj">
                                    <label for="edad">Numero de Hijos</label>
                                    <input type="number" name="numhjos" class="form-control ">
                                </div>
                            </div>
                        </div> <!-- ROW1 -->

                        <h4 class="pt-5 pb-5">Datos del Fallecimiento</h4>

                        <div class="row">
                            <!-- 4ta -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="fhllinto">Fec.Fallecimiento</label>
                                    <input type="date" name="fhllinto" id="fechaNacimiento" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Lugar de Fallecimiento</label>
                                    <select name="parroquiam" require class="form-control custom-select">
                                        <option value="" selected>Parroquia</option>
                                        <?php
                                        $sqlrroquia= ("SELECT * FROM parroquias ");
                                        $resrroquia = $mysqli->query($sqlrroquia);
                                        while ($row = mysqli_fetch_array($resrroquia)) {
                                            $id = $row['idparroquia'];
                                            $rroquia = $row['parroquia'];
                                        ?>
                                            <option value="<?php echo $id; ?>"><?php echo $rroquia; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label style="visibility:hidden ;">.</label>
                                    <select name="municipiom" require class="form-control custom-select">
                                        <option value="" selected>Municipio</option>
                                        <?php
                                        $sqlmun = ("SELECT * FROM municipios ");
                                        $resmun = $mysqli->query($sqlmun);
                                        while ($row = mysqli_fetch_array($resmun)) {
                                            $id = $row['idmunicipio'];
                                            $mun = $row['municipio'];
                                        ?>
                                            <option value="<?php echo $id; ?>"><?php echo $mun; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="fhdefuncion">Fec.Defunción</label>
                                    <input type="date" name="fhdefuncion" id="fechaNacimiento" class="form-control">
                                </div>
                            </div>
                            <!-- 5ta -->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Acta de Defunciòn</label>
                                    <input type="number" name="actdef" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tipo de Muerte</label>
                                    <select class="form-control custom-select" name="tmuerte" onchange="tipoMuerte(this.value);">
                                        <option value="Natural"> Natural</option>
                                        <option value="Enfermedad">Enfermedad</option>
                                        <option value="Provocada">Provocada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Causa de Muerte</label>
                                    <select  style="display:block;" class="form-control custom-select"  name="cmuerte1" id="cmuerte1">
                                        <option value="Vejez">vejez</option>
                                    </select>

                                    <select  style="display:none;" class="form-control custom-select" name="cmuerte2" id="cmuerte2">
                                        <option value="Cardiovascular">Cardiovascular</option>
                                        <option value="Enfermedad pulmonal">Enfermedad Pulmonal</option>
                                        <option value="Otro">otro</option>
                                    </select>

                                    <select  style="display:none;" class="form-control custom-select" name="cmuerte3" id="cmuerte3">
                                        <option value="Accidente">Accidente</option>
                                        <option value="Trafico">Trafico</option>
                                        <option value="Otro">otro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Protesis</label>
                                    <select class="form-control custom-select" name="protesis" onchange="protesiss(this.value);">
                                        <option value="no">no</option>
                                        <option value="si">si</option>
                                    </select>
                                </div>
                            </div>
                            <!-- 6ta -->
                            <div class="col-md-6">
                                <div class="form-group" id="obs" style="display:none;">
                                    <label >Observaciones</label>
                                    <textarea class="form-control" name="obs" cols="10" rows="5">
                                    
                                    </textarea>
                                </div>
                            </div>
                        </div> <!-- ROW2 -->

                        <!-- //*REGISTRO -->
                        <div align="right" class="col-md-12">
                            <input class="btn-r" type="submit" name="submit" value="Registrar">
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