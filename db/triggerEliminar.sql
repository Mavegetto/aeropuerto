trigger usuarios

DELIMITER // 
CREATE TRIGGER DEL_BITACORA
AFTER DELETE ON usuarios
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se elimino el usuario: ',OLD.nombre,' que tenia el ID: ',OLD.ID),NOW());
 //

 trigger aeropuerto

 DELIMITER // 
CREATE TRIGGER DEL_BITACORA1
AFTER DELETE ON aeropuerto
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se elimino el aeropuerto: ',OLD.nombre,' que tenia el ID: ',OLD.ID),NOW());
 //

 trigger avion

 DELIMITER // 
CREATE TRIGGER DEL_BITACORA2
AFTER DELETE ON aviones
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se elimino el avion: ',OLD.nombre,' que tenia el ID: ',OLD.ID),NOW());
 //

 trigger asiento

 DELIMITER // 
CREATE TRIGGER DEL_BITACORA3
AFTER DELETE ON asientos
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se elimino el asiento: ',OLD.no_asientos,' que tenia el ID: ',OLD.ID),NOW());
 //

 trigger vuelo

 DELIMITER // 
CREATE TRIGGER DEL_BITACORA4
AFTER DELETE ON vuelos
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se elimino el vuelo: ',OLD.destino,' que tenia el ID: ',OLD.ID),NOW());
 //

 trigger boleta

 DELIMITER // 
CREATE TRIGGER DEL_BITACORA5
AFTER DELETE ON boleta
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se elimino el usuario: ',OLD.hora,' que tenia el ID: ',OLD.ID),NOW());
 //