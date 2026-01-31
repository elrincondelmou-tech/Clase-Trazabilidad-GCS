<?php
// Implementación de seguridad para REQ-SEC-01
// Usando las recomendaciones de Toñito para manejo de hashes
function registrarUsuario($password) {
$hash = password_hash($password, PASSWORD_BCRYPT);
// Aquí se guardaría en la base de datos
return $hash;
}
?>
