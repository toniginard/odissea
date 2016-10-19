<?php

$string['pluginname'] = 'Ocupación de disco';
$string['coursequotas'] = 'Ocupación de disco';
$string['total_noquota_description'] = 'Ocupación de disco';
$string['coursequotas:view'] = 'Ver el consumo de cuota de los cursos';
$string['total_data'] = 'Total';
$string['disk_used'] = 'Espacio ocupado';
$string['disk_free'] = 'Espacio libre';
$string['disk_used_other'] = 'Espacio ocupado en otros';
$string['disk_used_course'] = 'Espacio ocupado en cursos';
$string['disk_used_backup'] = 'Espacio ocupado en backups';
$string['disk_used_temp'] = 'Espacio ocupado en archivos temporales';
$string['disk_used_trash'] = 'Espacio ocupado en archivos trash';
$string['disk_used_repository'] = 'Espacio ocupado en el repositorio';
$string['disk_used_user'] = 'Espacio ocupado en archivos de usuario';
$string['category_data'] = 'Categorías';
$string['larger_courses'] = 'Cursos';
$string['backups'] = 'Copias de seguridad';
$string['course_name'] = 'Nombre del curso';
$string['category_name'] = 'Nombre de la categoría';
$string['front_page'] = 'Página inicial';
$string['disk_consume_explain'] = 'Actualmente se están utilitzando <strong>{$a->consumed} MB</strong> de los <strong>{$a->space} MB</strong> disponibles, de los cuales, aproximadamente:';
$string['disk_consume_repofiles'] = '<strong>{$a->number} {$a->unit}</strong> utilizados en repositorios del sistema de ficheros';
$string['disk_consume_courses'] = '<strong>{$a->number} {$a->unit}</strong> utilizados en los cursos (sin contar las copias de seguridad)';
$string['disk_consume_backups'] = '<strong>{$a->number} {$a->unit}</strong> utilizados en las copias de seguridad, incluídas las de los cursos y las de los usuarios';
$string['disk_consume_user'] = '<strong>{$a->number} {$a->unit}</strong> utilizados en archivos de usuario';
$string['disk_consume_temp'] = '<strong>{$a->number} {$a->unit}</strong> utilizados en la carpeta <em>temp</em> (ficheros temporales pendientes de ser borrados por el cron)';
$string['disk_consume_trash'] = '<strong>{$a->number} {$a->unit}</strong> utilizados en la carpeta <em>trashdir</em> (ficheros marcados como borrados y pendientes de ser borrados por el cron)';
$string['total_description'] = 'A continuación se muestra el porcentaje de cuota de disco ocupado en relación con al total';
$string['category_description'] = 'A continuación se muestran los cursos de las diferentes categorias junto con el tamaño total de los ficheros que lo componen';
$string['courses_description'] = 'A continuación se muestran todos los cursos junto con su categoría y el tamaño de sus ficheros ordenados de mayor a menor según este último dato';

$string['filemanager'] = 'Gestión de archivos';
$string['manage'] = 'Gestionar los archivos';
$string['filearea'] = 'Área de archivos';
$string['component'] = 'Componente';
$string['owner'] = 'Propietario';
$string['context'] = 'Contexto';
$string['totalfilesize'] = 'Ocupación de todos los archivos: {$a}';
$string['realfilesize'] = 'Uso real de disco: {$a}';
$string['nofilesfound'] = 'No se ha encontrado ningún archivo';
$string['showingfiles'] = 'Mostrando {$a->files} de {$a->total}';
$string['addchildren'] = 'Añade los contextos hijo';
$string['allusers'] = 'Todos los usuarios';
$string['allfileareas'] = 'Todas las áreas de archivo';
$string['allcomponents'] = 'Todos los componentes';
$string['more_than'] = 'Más de';
$string['less_than'] = 'Menos de';
$string['showonlybackups'] = 'Mostrar solo los archivos de cópia de seguridad';
$string['hidesamehash'] = 'No mostrar los archivos con el mismo <i>contenthash</i> (Modo experto)';
$string['viewsimilarfiles'] = 'Ver archivos similares';
$string['manage_backup_files'] = 'Para liberar espacio, se pueden eliminar las copias de seguridad de los cursos desde <a href="{$a}">este apartado</a>';