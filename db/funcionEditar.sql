funcion de editar para usuarios

DELIMITER //
CREATE PROCEDURE editarUsuarios(IN idP INT, IN nombreP VARCHAR(25), IN apellidoP VARCHAR(25), IN edadP INT, IN npasaporteP int, IN paisP VARCHAR(20), IN direccionP VARCHAR(30), IN telefonoP VARCHAR(15), IN correoP VARCHAR(25), IN claveP VARCHAR(15))
BEGIN
UPDATE usuarios SET nombre=nombreP, apellido=apellidoP, edad=edadP, npasaporte=npasaporteP, pais=paisP, direccion=direccionP, telefono=telefonoP, correo=correoP, clave=claveP WHERE id=idP;
END;
//

FUncion de editar aeropuerto

DELIMITER //
CREATE PROCEDURE editarAeropuerto(IN idP INT, IN nombreP VARCHAR(20) , IN direccionP VARCHAR(20) , IN paisP VARCHAR(20))
BEGIN
UPDATE aeropuerto SET nombre=nombreP, direccion=direccionP, pais=paisP WHERE id=idP;
END;
//

FUncion de editar aviones

DELIMITER //
CREATE PROCEDURE editarAvion(IN idP INT, IN no_avionP VARCHAR(10), IN nombreP VARCHAR(10), IN id_aeropuertoP INT)
BEGIN
UPDATE aviones SET no_avion=no_asientosP, nombre=nombreP, id_aeropuerto=id_aeropuertoP WHERE id=id_vueloP;
END;
//

FUncion de editar asientos

DELIMITER //
CREATE PROCEDURE editarAsiento(IN idP INT, IN no_asientosP VARCHAR(10), IN posicionP VARCHAR(30), IN id_avionP INT)
BEGIN
UPDATE asientos SET no_asientos=no_asientosP, posicion=posicionP, id_avion=id_avionP WHERE id=idP;
END;
//

FUncion de editar vuelos

DELIMITER //
CREATE PROCEDURE editarVuelo(IN id INT, IN origenP VARCHAR(25), IN destinoP VARCHAR(25), IN escalasP VARCHAR(25), IN id_avionP INT)
BEGIN
UPDATE vuelos SET origen=origenP, destino=destinoP, escalas=escalasP, id_avion=id_avionP WHERE id=idP;
END;
//

funcion de editar boleta

DELIMITER //
CREATE PROCEDURE editarBoleta(IN id INT, IN horaP VARCHAR(25), IN id_vueloP INT)
BEGIN
UPDATE boleta SET hora=horaP, id_vuelo=id_vueloP WHERE id=idP;
END;
//