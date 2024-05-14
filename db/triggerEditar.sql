trigger usuario

DELIMITER // 
CREATE TRIGGER UPD_BITACORA
AFTER UPDATE ON usuarios
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se actualizo el usuario: ',NEW.nombre),NOW());
 //

 trigger aeropuerto

DELIMITER // 
CREATE TRIGGER UPD_BITACORA1
AFTER UPDATE ON aeropuerto
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se actualizo el aeropuerto: ',NEW.nombre),NOW());
 //

 trigger avion

 DELIMITER // 
CREATE TRIGGER UPD_BITACORA2
AFTER UPDATE ON aviones
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se actualizo el avion: ',NEW.nombre),NOW());
 //

 trigger asiento

 DELIMITER // 
CREATE TRIGGER UPD_BITACORA3
AFTER UPDATE ON asientos
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se actualizo el asiento: ',NEW.no_asientos),NOW());
 //

 trigger vuelo

 DELIMITER // 
CREATE TRIGGER UPD_BITACORA4
AFTER UPDATE ON vuelos
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se actualizo el vuelo: ',NEW.destino),NOW());
 //
 
 trigger boleta

 DELIMITER // 
CREATE TRIGGER UPD_BITACORA5
AFTER UPDATE ON boleta
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se actualizo el boleto: ',NEW.hora),NOW());
 //