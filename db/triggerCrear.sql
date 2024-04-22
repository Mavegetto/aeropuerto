DELIMITER // 
CREATE TRIGGER INS_BITACORA
AFTER INSERT ON usuarios
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se creó un nuevo usuario: ',NEW.nombre),NOW());
 //