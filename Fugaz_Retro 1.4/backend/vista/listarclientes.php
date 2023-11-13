<section></section>
<article></article>
<div style="background-color: #e1e1e1;padding: 30px; width:1140px; margin-left:70px;height:100px;">
    <div>
        <center>
            <h2>Proveedores</h2>
        </center>
    </div>
    <form action="index.php" method="get">
        <input type="hidden" name="m" value="nuevo">
        <input type="submit" class="btn btn-dark" value="Registrar proveedor" style="margin-top:-75px;">
    </form>
</div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "prov";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
<?php
$sql1 = "SELECT nombre, documento, comuna, barrio ,direccion, telefono, correo, foto  FROM personanat";
$result1 = $conn->query($sql1);

$sql2 = "SELECT rut, represLegal, comunaj, barrioj, direccionj, telefonoj, correoj, fotoj FROM personajur";
$result2 = $conn->query($sql2);
?>

<div class="container" style="background-color:#e1e1e1;">
    <h3 class="mt-1">Persona Natural</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Documento</th>
                            <th>Comuna</th>
                            <th>Barrio</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Foto</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $result1->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row['nombre'] . "</td>";
                            echo "<td>" . $row['documento'] . "</td>";
                            echo "<td>" . $row['comuna'] . "</td>";
                            echo "<td>" . $row['barrio'] . "</td>";
                            echo "<td>" . $row['direccion'] . "</td>";
                            echo "<td>" . $row['telefono'] . "</td>";
                            echo "<td>" . $row['correo'] . "</td>";
                            echo "<td>" . $row['foto'] . "</td>";
                            echo "<td><button class='btn btn-primary'>Actualizar</button></td>";
                            echo "<td><button class='btn btn-danger'>Eliminar</button></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-6" style="margin-top:-65px;">
            <h3 class="mt-4">Persona Juridica</h3>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>RUT</th>
                            <th>Representante</th>
                            <th>Comuna</th>
                            <th>Barrio</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Foto</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($rows = $result2->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $rows['rut'] . "</td>";
                            echo "<td>" . $rows['represLegal'] . "</td>";
                            echo "<td>" . $rows['comunaj'] . "</td>";
                            echo "<td>" . $rows['barrioj'] . "</td>";
                            echo "<td>" . $rows['direccionj'] . "</td>";
                            echo "<td>" . $rows['telefonoj'] . "</td>";
                            echo "<td>" . $rows['correoj'] . "</td>";
                            echo "<td>" . $rows['fotoj'] . "</td>";
                            echo "<td><button class='btn btn-primary'>Actualizar</button></td>";
                            echo "<td><button class='btn btn-danger'>Eliminar</button></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<br>