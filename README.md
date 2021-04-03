# TastyKIT

1-Contenido

2-Temática	

3-Título	

4-Descripción del proyecto	

5-Como se va hacer	

6-Objetivos	

7-Tecnologías	

8-ERD	

9-Mockup Inicial	


Todo lo que se va a proponer a continuación es susceptible a modificaciones, por necesidades de la implementación del proyecto, optimización en el proceso de desarrollo, o adaptación de nuevas funcionalidades.

Temática

La temática que se ha escogido para este proyecto va a ser la restauración, hostelería, siendo de esta manera se va a crear una aplicación para la gestión de un restaurante.

Título

TastyKIT

Descripción del proyecto

TastyKIT es una app para la gestión integral de tu Restaurante, contará con un sistema de control de stock, de caja, de personal, de clientes, de reservas, y de comandas, esta parte pertenecería a los empleados y administradores del negocio. Mientras que, por otro lado, también contará con un sistema de pedidos para los clientes, en este podrán loguearse, mediante alguna red social o correo, y pedir desde casa o desde la propia mesa.

Como se va hacer

Como se ha podido apreciar en el apartado anterior, podemos dividir nuestra aplicación, en dos partes:
Por un lado, nos encontramos con la parte más orientada a la gestión que debe realizar el personal, siendo que se van a permitir crear una serie de roles, los cuales van a tener una serie de permisos. En un principio se van a crear los roles de: 

-	Modo dios, este será el administrador principal y tendrá acceso y control sobre toda la aplicación, pudiendo dar de alta, baja, crear y modificar los distintos apartados.

-	Modo administrador, este podrá hacer ciertas modificaciones, creaciones, bajas, pero no tendrá poder total. Un ejemplo sería que este tendría permiso para modificar el stock, crear nuevos productos… Pero no tendrá acceso a modificar, dar de alta o baja las otras cuentas de usuarios, perteneciendo estas a los demás empleados.

-	Modo camarero, este será un usuario que tendrá permiso para ver y modificar el stock de bebidas, podrá lanzar una comanda, modificarla, o borrar algún plato erróneo de la comanda. Es decir, podrá realizar las acciones comunes vinculadas al uso de la PDA. Pero no tendrá acceso ni al stock de productos, ni a perfiles superiores.

-	Modo chef, esta sección esta más destinada a la cocina siendo esta la que puede manejar el stock de productos, ver si falta algo o si es necesario realizar algún pedido o alguna modificación.

En un principio se piensan implementar estos 4 roles, más adelante se observará si se van a realizar más o se van a poder hacer algún tipo de modificación más sobre ellos, siempre que sea para su mejora.

En segundo lugar, nos encontramos con la parte mas orientada al cliente, siendo esta parte de la aplicación la que va a poder controlar, se podrá registrar, y podrá realizar, reservas, pedidos, tanto en mesa como online, y modificar algún dato de su perfil.

Objetivos

-Implementar los distintos roles para la gestión del personal.

-Gestionar el stock del restaurante, pudiéndose dar de alta, baja, y realizar modificaciones de cualquiera de los productos, darle una categoría o incluso agregarle los distinto tipos de alergenos. 

-Facilitar la administración del personal añadiendo ciertas funcionalidades para la creación del horario, turnos y rotaciones, o control de horas extras. 

-Administrar la gestión de facturación y caja.

-Realizar un servicio de comandas intuitivo y de fácil uso.

-Desarrollar un sistema de pedido tanto online cómo in situ, cómodo y sencillo.

Tecnologías

Las tecnologías que se han decidido usar para la correcta implementación del proyecto van a ser:

-	PHP para el Back-End con el framework Laravel.

-	JavaScript para el Front-End con el framework Vue.

-	Por último, también se va a usar algún framework de diseño para animaciones (anime.js, snap.svg, …) y algún estilo.

-	En relación a la base de datos se va a usar MySQL y Firebase para la parte de logueo del cliente.

ERD
![image](https://user-images.githubusercontent.com/55058648/113489858-f3d21900-94c6-11eb-993e-587f9e2f3267.png)

Mockup Inicial
![image](https://user-images.githubusercontent.com/55058648/113489874-0c423380-94c7-11eb-82a2-f1215f1efd57.png)


