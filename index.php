<!DOCTYPE html>
<html>
<body>

<h2>Blog</h2>

<?php
// Aquí iría el código para obtener las publicaciones del blog de una base de datos

// Imprime cada publicación
foreach ($publicaciones as $publicacion) {
   echo "<h3>" . $publicacion['titulo'] . "</h3>";
   echo "<p>" . $publicacion['contenido'] . "</p>";
}
?>

</body>
</html>
