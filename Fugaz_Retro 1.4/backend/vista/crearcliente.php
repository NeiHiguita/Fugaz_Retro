<article>
    <div class="container" style="width: 700px; background-color:#e1e1e1;padding: 30px;">
        <h1 class="text-center">Añadir Proveedor</h1>

        <form method="POST" action="index.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="tipoProveedor">Tipo Persona:</label>
                <select class="form-control" id="tipoProveedor">
                    <option value="natural">Natural</option>
                    <option value="juridico">Jurídica</option>
                </select>
            </div>
            <div id="formularioNatural">
                <h2 class="mt-4">Persona Natural</h2>
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
                </div>
                <div class="form-group">
                    <label for="documento">Documento:</label>
                    <input type="text" class="form-control" name="documento" id="documento">
                </div>
                <div class="form-group">
                    <label for="comuna">Comuna:</label>
                    <select class="form-control" name="comuna" id="comuna">
                        <option value="">Seleccionar Comuna</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="barrio">Barrio:</label>
                    <select class="form-control" name="barrio" id="barrio">
                        <option value="">Seleccionar Barrio</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" class="form-control" name="direccion" id="direccion">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" class="form-control" name="telefono" id="telefono">
                </div>
                <div class="form-group">
                    <label for="correo">Correo:</label>
                    <input type="text" class="form-control" name="correo" id="correo">
                </div>
                <div class="form-group mt-4">
                    <label for="foto">Foto:</label>
                    <input type="file" class="form-control" name="foto" id="foto">
                </div>
            </div>

            <div id="formularioJuridico" style="display: none;">
                <h2 class="mt-4">Persona juridica</h2>
                <div class="form-group">
                    <label for="rut">RUT:</label>
                    <input type="text" class="form-control" id="rut">
                </div>
                <div class="form-group">
                    <label for="representanteLegal">Representante Legal:</label>
                    <input type="text" class="form-control" id="representanteLegal">
                </div>

                <div class="form-group">
                    <label for="comunaj">Comuna:</label>
                    <select class="form-control" name="comunaj" id="comunaj">
                        <option value="">Seleccionar Comuna</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="barrioj">Barrio:</label>
                    <select class="form-control" name="barrioj" id="barrioj">
                        <option value="">Seleccionar Barrio</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="direccionj">Dirección:</label>
                    <input type="text" class="form-control" name="direccionj" id="direccionj">
                </div>

                <div class="form-group">
                    <label for="telefonoJuridico">Teléfono:</label>
                    <input type="text" class="form-control" id="telefonoJuridico">
                </div>

                <div class="form-group">
                    <label for="correoJuridico">Correo:</label>
                    <input type="text" class="form-control" id="correoJuridico">
                </div>
                <div class="form-group mt-4">
                    <label for="fotoJuridico">Foto:</label>
                    <input type="file" class="form-control" name="fotoJuridico" id="fotoJuridico">
                </div>
            </div>

            <br>
            <input type="hidden" name="m" value="crear">
            <button type="submit" class="btn btn-dark" onclick="validarFormulario(event)">Guardar</button>
        </form>
        <form action="index.php" style="margin-top:-37.5px;margin-left:20%;">
            <button type="submit" class="btn btn-dark">Salir</button>
        </form>
    </div>
    <br>
    <?php
    include("cone.php");
    $con = getCone();
    $nom = $_POST['nombre'];
    $docu = $_REQUEST['documento'];
    $com = $_REQUEST['comuna'];
    $bar = $_REQUEST['barrio'];
    $dir = $_REQUEST['direccion'];
    $tel = $_REQUEST['telefono'];
    $cor = $_REQUEST['correo'];
    $ft = $_REQUEST['foto'];
    $query = "INSERT INTO personanat (nombre, documento, comuna, barrio, direccion, telefono, correo, foto) VALUES('$nom','$docu','$com','$bar','$dir','$tel','$cor','$ft')";
    $result = mysqli_query($con, $query);
    ?>
    <script>
        //--------------validaciones js------------------------
        const tipoProveedor = document.getElementById("tipoProveedor");
        const formularioNatural = document.getElementById("formularioNatural");
        const formularioJuridico = document.getElementById("formularioJuridico");

        tipoProveedor.addEventListener("change", function () {
            if (tipoProveedor.value === "natural") {
                formularioNatural.style.display = "block";
                formularioJuridico.style.display = "none";
            } else if (tipoProveedor.value === "juridico") {
                formularioNatural.style.display = "none";
                formularioJuridico.style.display = "block";
            }
        });
        //-------------------validacion de direccion---------------------
        // Obtener las listas desplegables y el campo de dirección
        const comunaSelect = document.getElementById("comuna");
        const barrioSelect = document.getElementById("barrio");
        const direccionInput = document.getElementById("direccion");

        // Opciones de comunas y barrios (simulación, debes cargar estas opciones desde tu base de datos)
        const comunas = ["Comuna 1", "Comuna 2", "Comuna 3"];
        const barrios = {
            "Comuna 1": ["Santo Domingo", "Popular", "Esperanza"],
            "Comuna 2": ["Santa cruz", "Andalucia", "La Francia"],
            "Comuna 3": ["Versalles", "La Cruz", "Carambolas"]
        };

        // Función para cargar las opciones de comuna
        function cargarComunas() {
            comunaSelect.innerHTML = "<option value=''>Seleccionar Comuna</option>";
            comunas.forEach((comuna) => {
                const option = document.createElement("option");
                option.value = comuna;
                option.text = comuna;
                comunaSelect.appendChild(option);
            });
        }

        // Función para cargar las opciones de barrio en función de la comuna seleccionada
        function cargarBarrios(comunaSeleccionada) {
            barrioSelect.innerHTML = "<option value=''>Seleccionar Barrio</option>";
            if (comunaSeleccionada in barrios) {
                barrios[comunaSeleccionada].forEach((barrio) => {
                    const option = document.createElement("option");
                    option.value = barrio;
                    option.text = barrio;
                    barrioSelect.appendChild(option);
                });
            }
        }

        // Cargar las opciones de comuna al cargar la página
        cargarComunas();

        // Evento para actualizar las opciones de barrio cuando se selecciona una comuna
        comunaSelect.addEventListener("change", function () {
            const comunaSeleccionada = comunaSelect.value;
            cargarBarrios(comunaSeleccionada);
        });

        // Evento para habilitar o deshabilitar el campo de dirección según las selecciones
        barrioSelect.addEventListener("change", function () {
            const barrioSeleccionado = barrioSelect.value;
            if (barrioSeleccionado) {
                direccionInput.disabled = false;
            } else {
                direccionInput.value = "";
                direccionInput.disabled = true;
            }
        });

        //------------------validar espacios en blanco-------------------
        /*function validarFormulario(event) {
            // natural
            var nombre = document.getElementById("nombre").value;
            var documento = document.getElementById("documento").value;
            var comuna = document.getElementById("comuna").value;
            var barrio = document.getElementById("barrio").value;
            var direccion = document.getElementById("direccion").value;
            var telefono = document.getElementById("telefono").value;
            var correo = document.getElementById("correo").value;
            //juridico
            var rut = document.getElementById("rut").value;
            var representanteLegal = document.getElementById("representanteLegal").value;
            var comunaj = document.getElementById("comunaj").value;
            var barrioj = document.getElementById("barrioj").value;
            var direccionj = document.getElementById("direccionj").value;
            var telefonoJuridico = document.getElementById("telefonoJuridico").value;
            var correoJuridico = document.getElementById("correoJuridico").value;

            // Verificar si alguno de los campos está en blanco
            if (nombre.trim() === "" || documento.trim() === "" || comuna === "" || barrio === "" || direccion.trim() === "" || telefono.trim() === "" || correo.trim() === "") {
                alert("Por favor, complete todos los campos.");
                event.preventDefault(); // Detener el envío del formulario
            } else if (rut === "" || representanteLegal === "" || comunaj === "" || barrioj === "" || direccionj === "" || telefonoJuridico === "" || correoJuridico === "") {
                alert("Por favor, complete todos los campos.")
            }
            // Puedes agregar más condiciones de validación aquí según tus necesidades
        }*/
    </script>
</article>
</section>