<?php
// Ruta a la carpeta de imágenes en tu servidor externo
$imagen_ruta = 'https://lotoluck.es/img';

// Obtener la lista de archivos en la carpeta de imágenes
$archivos = scandir($imagen_ruta);

// Filtrar los archivos para eliminar . y ..
$archivos = array_diff($archivos, array('.', '..'));

// Crear una matriz de imágenes con sus URL completas
$imagenes = [];
foreach ($archivos as $archivo) {
    $imagenes[] = $imagen_ruta . '/' . $archivo;
}

// Codificar la matriz de imágenes en formato JSON para enviarla a JavaScript
$imagenes_json = json_encode($imagenes);

// Configurar encabezados para permitir solicitudes CORS desde tu sitio web
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Devolver la lista de imágenes como respuesta JSON
echo $imagenes_json;
?>
