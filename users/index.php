<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenedor Usuarios</title>
    <style>
        body {
            background-color: black;
            color: greenyellow;
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>

<body>
    <h1>Usuario</h1>
    <hr>
    <button onclick="nuevoUsuario()">Nuevo Usuario</button>
    <div id="formulario" style="display: none;">
        <input type="text" id="inUsername" placeholder="Ingrese username" value="abecerra"><br>
        <input type="text" id="inNombre" placeholder="Ingrese Nombre" value="Andrea Becerra"><br>
        <select id="selRol"><br>
            <option value="1">Owner</option>
            <option value="2">Operator</option>
        </select>
        <button onclick="nuevo()">Guardar Nuevo</button>

    </div>
    <hr>
    <table id="tDatos" style="width: 100%; border: 1px solid greenyellow">
    </table>
    <hr>
    <div id="showInfoUsuario">

    </div>
    <hr>
</body>
<script>
    const listaUsuario = [
        {
            id: 1,
            username: 'scabezas',
            nombre: 'Sebastian Cabezas',
            rol: {
                id: 1,
                nombre: 'Owner'
            },
            estado: true
        },
        {
            id: 2,
            username: 'cduque',
            nombre: 'Carlos Duque',
            rol: {
                id: 1,
                nombre: 'Operator'
            },
            estado: false
        }
    ];

    listar();

    function listar(){
        const tabla = document.getElementById('tDatos');
        tabla.innerHTML = '';
        const thead = document.createElement('thead');
        thead.innerHTML = `
        <tr>
            <td>#</td>
            <td>Username</td>
            <td>Estado</td>
            <td>Acciones listar</td>
        </tr>
        `;

        const tbody = document.createElement('tbody');
        listaUsuario.forEach(user => {
            const tr = document.createElement('tr');
            const identificador = document.createElement('td');
            identificador.innerText = user.id;

            const username = document.createElement('td');
            username.innerText = user.username;

            const estado = document.createElement('td');
            estado.innerText = user.estado == true ? 'Activado' : 'Desactivado';

            const acciones = document.createElement('td');
            acciones.innerHTML = `
            <button onclick="ver(${user.id})">Ver</button>
            `;

            tr.appendChild(identificador);
            tr.appendChild(username);
            tr.appendChild(estado);
            tr.appendChild(acciones);
            tbody.appendChild(tr);
        });

        tabla.appendChild(thead);
        tabla.appendChild(tbody);
    }

    function nuevoUsuario() {
        const formulario = document.getElementById('formulario');
        formulario.style.display = 'block'
    }

    function ver(_id){
        const user = listaUsuario.find(u => u.id == _id);
        console.log(user);
    }
</script>

</html>