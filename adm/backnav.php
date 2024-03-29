<?php 
include('../conectaDB.php');
session_start();

$id = $_SESSION['idadmin'];
$nome = $_SESSION['nomeadmin'];
$sobrenome = $_SESSION['sobrenomeadmin'];
$email = $_SESSION['emailadmin'];
?>
<link rel="icon" type="image/png" href="../img/logo.png">
<header class="user-header">
    <a href="" class="logo">
        <img src="../img/logo.png" width="50">
        <span class="logo-text">
            FlexFit
        </span>
    </a>
    <ul class="user-header-list">
        <li class="dropdown" id="dropdown">
            <div class="top" onclick="openDropdown()">
                <div class="img"></div>
                <?=$nome?><i class="bi bi-chevron-compact-down" id="arrow"></i>
            </div>
            <div class="dropdown-content" id="dropdown-content">
                <ul>
                    <li><a href="">Adicionar Conta</a></li>
                </ul>
            </div>
        </li>
        <li class="close-btn" id="closebtn" onclick="closeWorkoutList()"><button><i class="bi bi-x-lg"></i></button></li>
    </ul>
</header>
<nav class="user-nav">
    <div class="nav-options">
        <h3 class="title">Gerenciar</h3>
        <ul class="nav-list">
            <li><a href="listaadm.php"><i class="bi bi-person-lines-fill"></i>Administradores</a></li>
            <li><a href="listaaluno.php"><i class="bi bi-person-lines-fill"></i>Alunos</a></li>
            <li><a href="listainstrutor.php"><i class="bi bi-person-lines-fill"></i>Instrutores</a></li>
            <li><a href="listaaparelhos.php"><i class="bi bi-person-lines-fill"></i>Aparelhos</a></li>
            <li><a href="listaexercicio.php"><i class="bi bi-person-lines-fill"></i>Exercícios</a></li>
        </ul>
    </div>
    <div class="nav-bottom">
        <hr>
        <a class="exit-btn" href="logout.php"><i class="bi bi-box-arrow-right"></i>Sair</a>
    </div>
</nav>
<script src="../script.js"></script>