DELIMITER // 
CREATE TRIGGER DEL_BITACORA
AFTER DELETE ON usuarios
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se elimino el usuario: ',OLD.nombre,' que tenia el ID: ',OLD.ID),NOW());
 //