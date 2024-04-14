
DELIMITER //
CREATE PROCEDURE insertarUsuario(IN nombreP VARCHAR, 
IN apellidoP VARCHAR, 
IN edadP INT, 
IN npasaporteP int, 
IN paisP VARCHAR, IN direccionP VARCHAR, IN telefonoP VARCHAR, IN correoP VARCHAR, IN claveP VARCHAR)

BEGIN

INSERT INTO usuarios(nombre, apellido, edad, npasaporte, pais, direccion, telefono, correo, clave) VALUES (nombreP,apellidoP,edadP,npasaporteP,paisP,direccionP,telefonoP,correoP,claveP);

END;
//