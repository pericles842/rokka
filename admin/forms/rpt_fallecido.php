<?php
require('../conexion.php');
$sql =("SELECT * FROM fallecido ");
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

<body>
    <div class="content-wrapper">
        <!-- HEADER  -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Listado Fallecidos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Listado Fallecidos</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- BOTON AÑADIR -->
        <section class="btn-a-p">
            <div class="container-fluid">
                <div align="center">
                    <button class="btn-a"><a class="link-a" href="reg_fallecido.php">Añadir</a></button>
                </div>
            </div>
        </section>

        <!-- CAJA DE CARTA -->
        <div class="card">
            <div class="card-header">
                <h3 class="ht">Listado Fallecidos</h3>
            </div>
            <div class="card-body">
                <h4 class="card-title">Fallecidos</h4>
            </div>
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            ID
                        </th>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Edad
                        </th>
                        <th>
                            CI
                        </th>
                        <th>
                            Fecha Defunción
                        </th>
                        <th>
                            Causa de Muerte
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                  <tr>
                    <td><?php echo $row['iddfunto']; ?></td>
                    <td><?php echo $row['name1']." ".$row['ap1']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['ci']; ?></td>
                    <td><?php echo $row['fchdfun']; ?></td>
                    <td><?php echo $row['csomuerte']; ?></td>
                    <td class="project-actions text-right">
                        <!-- //!VINCULAR BOTONES -->
                      <a class="btn btn-info btn-sm" href="upd_espmed.php?idespm=<?php echo $row['iddfunto']; ?>"><i class="fas fa-pencil-alt"></i> Editar</a>
                      <a class="btn btn-danger btn-sm" href="src_del_espmed.php?idespm=<?php echo $row['iddfunto']; ?>"><i class="fas fa-trash"></i> Eliminar</a>
                    </td>
                  </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
        </div>
    </div> <!-- WRAPPER -->

    <!-- BOOSTSTRAP JS -->
    <script src="../script/main.js"></script>
    <script src="../styles/js/bootstrap.bundle.min.js"></script>
</body>

</html>