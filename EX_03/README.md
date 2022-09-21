## P2: PHP básico

### EX_03

En este ejercicio usaremos PHP y HTML crearemos una estructura como si fuera un HTML y dentro del head crearemos Style,
aquí es donde personalizaremos nuestro apartado gráfico y estructural de la tabla, esto es muy personal y estético por
ejemplo yo cambio el tipo de letra, el borde, el tamaño de la tabla total, el borde de las filas y columnas, dónde va el
texto en cada fila y columna y el espacio que hay entre en cada una.

En este ejercicio nos piden crear una array asociativo que clave tenga otro array la estructura es la siguiente el
código del país es la clave de la array que éste desencadena en otro array asociativo que tendrá como clave “nombre” y
como valor el nombre completo del país y en la posición 1 tendrá como clave “código” y como valor el código.

Una vez creado el array lo vamos a printer entonces haremos un foreach para recorrerlo que la estructura será la
siguiente el nombre del array ($language) y aquí crearemos una variable que tendrá asignada la clave del array padre
pondremos el símbolo de que está asociado”=>” y a continuación introduciremos el array asociado al array padre,
pondremos la clave literalmente como la hemos escrito en este caso nombre y crearemos una variable ($name) de valor y
lo mismo con la posición 1 del Array.
Todo esto nos lo imprimirá dentro de la tabla con filas y columnas transparentes