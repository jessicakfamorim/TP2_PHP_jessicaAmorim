<?php

session_start();

// Remove todos os dados da sessão
session_destroy();

// Volta para o login
header('Location: login.php');
exit;