<?php 
include('usernav.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/fc1c840fda.js" crossorigin="anonymous"></script>
    <title>FlexFit</title>
</head>
<body>
    <main class="main-user">
        <div class="dashboard">
            <div class="profile-card">
                <div class="top">
                    <div class="user-pic"></div>
                    <div class="user-info">
                        <span class="name">
                            Ramon Dino
                        </span>
                        <span class="function">
                            Aluno
                        </span>
                    </div>
                    <hr>
                </div>
                <div class="achievements">
                    <span class="category"></span>
                </div>
            </div>
            <div class="workout-card">
                <h1 class="title">Segunda-Feira</h1>
                <hr>
                <div class="exercise-card">
                    <div class="left">
                        <div class="img"></div>
                        <span class="exe-name">Supino Reto</span>
                    </div>
                    <div class="right">
                        <p><span class="exe-reps">8-10 Repetições 4x</span></p>
                    </div>
                </div>
                <hr>
                <div class="exercise-card">
                    <div class="left">
                        <div class="img"></div>
                        <span class="exe-name">Supino inclinado com halteres</span>
                    </div>
                    <div class="right">
                        <p><span class="exe-reps">10-12 Repetições 3x</span></p>
                    </div>
                </div>
                <hr>
                <div class="exercise-card">
                    <div class="left">
                        <div class="img"></div>
                        <span class="exe-name">Crucifixo na máquina</span>
                    </div>
                    <div class="right">
                        <p><span class="exe-reps">12-15 Repetições 3x</span></p>
                    </div>
                </div>
                <hr>
                <div class="exercise-card">
                    <div class="left">
                        <div class="img"></div>
                        <span class="exe-name">Pulley tríceps</span>
                    </div>
                    <div class="right">
                        <p><span class="exe-reps">8-10 Repetições 4x</span></p>
                    </div>
                </div>
                <hr>
            </div>
            <div class="progress-card"></div>
        </div>
    </main>
</body>
</html>