Tarea 1

Javier pop: diseño de login, registro, eliminaar, actualizar, mostrar datos


Justin sanchez: conexion a base de datos, api usuarios, landing page, ingreso de datos


Marco Merida: normalizacion, base de datos, tabla de usuarios, vitacora de usuarios

/*Nomenclatura de la tabla usuarios*/

id                     ->idus
nombre                 ->nombre
edad                   -eda
npasaporte             ->npas
pais                   ->pais
direccion              ->dir
telefono               -tel
correo                 -cor
clave                  -cla


Marco: como llamar y guaradar en el procedure usuarios: CALL insertarUsuario('marco',19,1,'guatemala','5ta calle','8042-5784','marcoandres','marco');

Marco: como llamar y guaradar en el procedure aeropuerto: CALL insertarAeropuerto('nombre', 'direccion', 'pais');

Marco: como llamar y guardar en el procedure avion: CALL insertarAvion('no_avion', 'nombre', id_aeropuerto);

Marco: como llamar y guaradar en el procedure asientos:  CALL insertarAsiento('no_asiento', 'posicion', id_avion);

Marco: como llamar y guaradar en el procedure vuelo: CALL insertarVuelo('origen', 'destino', 'escala', id_avion);

Marco: como llamar y guardar en el procedure boleto: CALL insertarBoleta('hora', id_vuelo);