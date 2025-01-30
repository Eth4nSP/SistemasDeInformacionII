<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB TIS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f9f9f9;
        }

        header {
            background-color: #3367d6;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            position: relative;
        }

        .menu-container, .user-container {
            position: relative;
            display: inline-block;
        }

        .menu, .user-icon {
            font-size: 18px;
            cursor: pointer;
            padding: 10px;
            position: relative;
        }

        .dropdown {
            position: absolute;
            top: 40px;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            display: none;
            width: 200px;
            z-index: 1000;
            text-align: left;
        }

        .dropdown.active {
            display: block;
        }

        .dropdown a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
            border-bottom: 1px solid #eee;
            font-size: 16px;
        }

        .dropdown a:last-child {
            border-bottom: none;
        }

        .dropdown a:hover {
            background-color: #f2f2f2;
        }

        #menu-dropdown {
            left: 0;
        }

        #user-dropdown {
            right: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin: 10px;
            width: 300px;
            text-align: center;
        }

        .card button {
            background-color: #003399;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            margin: 5px;
        }

        .card button:hover {
            background-color: #002080;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuButton = document.querySelector('.menu');
            const userIcon = document.querySelector('.user-icon');
            const menuDropdown = document.getElementById('menu-dropdown');
            const userDropdown = document.getElementById('user-dropdown');

            function toggleDropdown(dropdown) {
                dropdown.classList.toggle('active');
            }

            menuButton.addEventListener('click', (event) => {
                event.stopPropagation();
                toggleDropdown(menuDropdown);
                userDropdown.classList.remove('active');
            });

            userIcon.addEventListener('click', (event) => {
                event.stopPropagation();
                toggleDropdown(userDropdown);
                menuDropdown.classList.remove('active');
            });

            document.addEventListener('click', () => {
                menuDropdown.classList.remove('active');
                userDropdown.classList.remove('active');
            });
        });
    </script>
</head>
<body>
    <header>
        <div class="menu-container">
            <div class="menu">&#9776; WEB TIS</div>
            <div id="menu-dropdown" class="dropdown">
                <a href="#">Visualizar Planificaciones</a>
                <a href="#">Lista de tareas Semanal</a>
                <a href="#">Grupo-Empresas</a>
                <a href="#">Calificaciones</a>
            </div>
        </div>
        <div class="user-container">
            <div class="user-icon">&#128100;</div>
            <div id="user-dropdown" class="dropdown">
                <a href="#">Profile</a>
                <a href="#">Cerrar sesión</a>
            </div>
        </div>
    </header>
    
    <div class="container">
        <div class="card">
            <h3>Grupo Empresa</h3>
            <p>Fecha límite de entrega: 2024-12-12</p>
            <button>Registrar Grupo o Empresa</button>
        </div>
        <div class="card">
            <h3>Evaluación</h3>
            <button>Realizar Evaluación</button>
            <button disabled>Visualizar Evaluaciones</button>
        </div>
        <div class="card">
            <h3>Lista y Nota</h3>
            <button>Lista de Estudiantes</button>
            <button>Lista de Grupo de Empresas</button>
        </div>
    </div>
</body>
</html>
