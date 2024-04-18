<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h2>Lista de Doctores</h2>
    <!-- Botón que redirige a otra página -->
    <a href="index.html">
        <button>Iniciar sesion</button>
    </a>
    <a href="sign.html">
        <button>Nuevas Sesiones</button>
    </a><br><br><br>
    <table id="usuariosTable" border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>LastName</td>
                <td>Email</td>
                <td>Password</td>
                <td>Especialidad</td>
                <td>Cedula</td>
                <td>Consultorio</td>
                <td>acciones</td>
            </tr>
        </thead>
        <tbody>
            <!-- aquí se carga no se que js del servidor al usuario -->
        </tbody>
        <script>
            // Usar jQuery para cargar los usuarios en la tabla desde PHP
            $(document).ready(function(){
                $.ajax({
                    url: 'cargardoc.php',
                    type: 'GET',
                    success: function(response){
                        $('#usuariosTable tbody').html(response);
                    }
                });
            });
        </script>
    </table>

    <!-- Formulario de edicion de usuarios -->
    <div id="modalEditar" style="display:none;">
        <h3>Editar usuarios</h3>
        <form id="mostrarEditarDoc" action="">
            ID: <span id="editID"> </span> <br>
            Username: <input type="text" id="editUsername"><br>
            Correo: <input type="text" id="editCorreo"><br>
            Password: <input type="text" id="editPassword"><br>
            <button type="button" onclick="guardarEdicion()">Guardar</button>
        </form>
    </div>

    <div id="modalEliminar" style="display:none;">
        <h3>Confirmar Eliminacion</h3>
        <p>Estas seguro que quieres eliminar al doctor</p>
        <button type="button" onclick="eliminarUsuario()">Eliminar</button>
    </div>

    <script>
        function mostrarEditarDoc(id, username, correo, password) {
            document.getElementById('editID').innerText = id; // validar ID
            document.getElementById('editUsername').value = username;
            document.getElementById('editCorreo').value = correo;
            document.getElementById('editPassword').value = password;

            // Mostrar la ventana modal edicion
            document.getElementById('modalEditar').style.display = 'block';
        }

        function guardarEdicion() {
            var id = document.getElementById('editID').innerText

            var username = document.getElementById('editUsername').value
            var correo = document.getElementById('editCorreo').value
            var password = document.getElementById('editPassword').value

            // Enviar los datos editados al server usando AJAX
            $.ajax({
                type: 'POST',
                url: 'guardar_edicion_usuarios.php',
                data: {
                    id,
                    name,
                    correo,
                    password,
                },
                success: function(response){
                    alert('Usuario editado correctamente, creo');
                    document.getElementById('modalEditar').style.display = 'none';
                    // actualiza la lista
                    actualizarListaUsuarios();
                }
            })
        }
        function actualizarListaUsuarios(){
            //recargar lista despues de actualizar
            $.ajax({
                url: 'cargardoc.php',
                type: 'GET',
                success: function(response){   
                    $('#usuariosTable tbody').html(response);
                }
            });
        }
        // Funcion Para Eliminar A Los Usuarios wow
        function mostrarEliminarDoc(id) {
            document.getElementById('editID').innerText = id; // validar ID
            // Mostrar la ventana modal edicion
            document.getElementById('modalEliminar').style.display = 'block';
        }
        function eliminarUsuario() {
            var id = document.getElementById('editID').innerText
            // Enviar los datos editados al server usando AJAX
            $.ajax({
                type: 'POST',
                url: 'eliminar_usuario.php',
                data: {
                    id,
                },
                success: function(response){
                    alert('Usuario elimindo correctamente');
                    document.getElementById('modalEliminar').style.display = 'none';
                    // actualiza la lista
                    actualizarListaUsuarios();
                }
            })
        }
    </script>
</body>
</html>
