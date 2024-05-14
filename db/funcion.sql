funcion de guardar usuarios

DELIMITER //
CREATE PROCEDURE insertarUsuario(IN nombreP VARCHAR(25), IN apellidoP VARCHAR(25), IN edadP INT, IN npasaporteP int, IN paisP VARCHAR(20), IN direccionP VARCHAR(30), IN telefonoP VARCHAR(15), IN correoP VARCHAR(25), IN claveP VARCHAR(15))
BEGIN
INSERT INTO usuarios(nombre, apellido, edad, npasaporte, pais, direccion, telefono, correo, clave) VALUES (nombreP,apellidoP,edadP,npasaporteP,paisP,direccionP,telefonoP,correoP,claveP);
END;
//


funcion de guardar aeropuertos

DELIMITER //
CREATE PROCEDURE insertarAeropuerto(IN nombreP VARCHAR(20) , IN direccionP VARCHAR(20) , IN paisP VARCHAR(20))
BEGIN
INSERT INTO aeropuerto(nombre, direccion, pais) VALUES (nombreP,direccionP,paisP);
END;
//

funcion de guardar aviones

DELIMITER //
CREATE PROCEDURE insertarAvion(IN no_avionP VARCHAR(10), IN nombreP VARCHAR(10), IN id_aeropuertoP INT)
BEGIN
INSERT INTO aviones(no_avion, nombre, id_aeropuerto) VALUES (no_avionP,nombreP,id_aeropuertoP);
END;
//

funcion de guardar asientos

DELIMITER //
CREATE PROCEDURE insertarAsiento(IN no_asientosP VARCHAR(10), IN posicionP VARCHAR(30), IN id_avionP INT)
BEGIN
INSERT INTO asientos(no_asientos, posicion, id_avion) VALUES (no_avionP,posicionP,id_avionP);
END;
//

funcion de guardar vuelos

DELIMITER //
CREATE PROCEDURE insertarVuelo(IN origenP VARCHAR(25), IN destinoP VARCHAR(25), IN escalasP VARCHAR(25), IN id_avionP INT)
BEGIN
INSERT INTO vuelos(origen, destino, escalas, id_avion) VALUES (origenP,destinoP,escalasP,id_avionP);
END;
//

funcion de guardar boleta

DELIMITER //
CREATE PROCEDURE insertarBoleta(IN horaP VARCHAR(25), IN id_vueloP INT)
BEGIN
INSERT INTO boleta(hora, id_vuelo) VALUES (horaP,id_vueloP);
END;
//