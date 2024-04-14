
DELIMITER //
CREATE PROCEDURE insertarUsuario(IN nombreP VARCHAR(25), IN apellidoP VARCHAR(25), IN edadP INT, IN npasaporteP int, IN paisP VARCHAR(20), IN direccionP VARCHAR(30), IN telefonoP VARCHAR(15), IN correoP VARCHAR(25), IN claveP VARCHAR(15))
BEGIN
INSERT INTO usuarios(nombre, apellido, edad, npasaporte, pais, direccion, telefono, correo, clave) VALUES (nombreP,apellidoP,edadP,npasaporteP,paisP,direccionP,telefonoP,correoP,claveP);
END;
//