<h2>Welcome to </h2>

# BoilerplateP4ws

<p><strong><a href="https://www.youtube.com/watch?v=d1gVaYxyoWE">INSTALLATION</a></strong></p>

<p><em><a href="https://ramigglez.com/">DOWNLOAD</a></em></p>

<h1>Steps to add a new block to the chain</h1>

<ol>
    <li>Se agrega el proyecto (bloque) como submodulo en la carpeta Components del proyecto principal (no es necesario descargar los archivos 
    de los submodulos del componente.</li>
    <li>Abrir el archivo Genesis.php del nuevo bloque</li>
    <li>Comentar las lineas 3 y 4 (los require_ones)</li>
    <li>Cambiar la ruta del require_ones del componente perse</li>
    <li>renombrar la variable $genesis</li>
    <li>agregar el nuevo bloque al index del proyecto principal con require_ones</li>
    <li>agregar la variable del bloque genesis del nuevo proyecto y agregarla a la lista de bloques para minar</li>
</ol>
