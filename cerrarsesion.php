<?php
session_start();
session_unset();
session_destroy();
?>

<script>
    sessionStorage.removeItem('usuario');
    window.location.href = 'index.php';
</script>

