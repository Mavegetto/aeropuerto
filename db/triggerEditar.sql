DELIMITER // 
CREATE TRIGGER UPD_BITACORA
AFTER UPDATE ON usuarios
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se actualizo el usuario: ',NEW.nombre),NOW());
 //