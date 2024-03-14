<?php 
include('usernav.php');

// if (isset($_SESSION['idusuario'])){
    // $id = $_SESSION['idusuario'];
    // $nome = $_SESSION['nomeusuario'];
    // $sobrenome = $_SESSION['sobrenomeusuario'];
    // $email = $_SESSION['emailusuario'];
    // $funcao = $_SESSION['funcaousuario'];

    // $sql = "SELECT * FROM usuarios WHERE usu_id = '$id';";
    // $return = mysqli_query($link, $sql);
    // while($tbl = mysqli_fetch_array($return)){
    //     $nome = $tbl[1];    
    //     $sobrenome = $tbl[2];
    //     $email = $tbl[3];
    //     $funcao = $tbl[5];
    // } 

    // if ($funcao == 'a'){
    //     $funcao2 = 'Aluno';
    // }
    // elseif ($funcao == 'i'){
    //     $funcao2 = 'Instrutor';
    // }
// }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/png" href="../img/logo.png">
    <script src="https://kit.fontawesome.com/fc1c840fda.js" crossorigin="anonymous"></script>
    <title>FlexFit</title>
</head>
<body>
    <main class="main-user">
        <!-- <h1 class="page-title">Meu Painel</h1> -->
        <div class="dashboard">
            <header class="page-header">
                <span class="page-title">Meu Painel</span>
            </header>
            <div class="profile-card">
                <div class="top">
                    <div class="user-pic"></div>
                    <div class="user-info">
                        <span class="name">
                            <?=$nome?> <br>
                            <?=$sobrenome?>
                        </span>
                        <span class="function">
                            <?=$funcao2?>
                        </span>
                    </div>
                    <hr>
                </div>
                <div class="achievements">
                    <span class="category"></span>
                </div>
            </div>
            <?php 
            if($funcao == "a"){
            ?>
            <div class="workout-card">
                <?php 

                //! FAZER COM QUE MOSTRE APENAS OS TREINOS DO DIA CORRESPONDENTE AO DIA ATUAL
                $diasemana = date('l');
                // echo $diasemana;

                if($diasemana == 'Thursday'){
                    // echo $al_id;
                    $sql = "SELECT tr_id FROM  treinos WHERE tr_dia = 'Quinta-feira' AND fk_al_id = $al_id";
                    $return = mysqli_query($link, $sql);
                    while($tbl = mysqli_fetch_array($return)){
                        $tr_id = $tbl[0];
                    }
                    // echo $tr_id;
                    $sql = "SELECT * FROM exercicios_treino WHERE fk_tr_id = $tr_id";
                    $return = mysqli_query($link, $sql);
                    while($tbl = mysqli_fetch_array($return)){
                        
                    }
                }

                ?>
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
            <!-- <div class="progress-card"></div> -->
            <?php }?>
        </div>
    </main>
</body>
</html>
