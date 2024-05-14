trigger usuarios

DELIMITER // 
CREATE TRIGGER INS_BITACORA
AFTER INSERT ON usuarios
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se creó un nuevo usuario: ',NEW.nombre),NOW());
 //

 trigger aeropuerto

 DELIMITER // 
CREATE TRIGGER INS_BITACORA1
AFTER INSERT ON aeropuerto
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se creó un nuevo aeropuerto: ',NEW.nombre),NOW());
 //

 trigger aviones

 DELIMITER // 
CREATE TRIGGER INS_BITACORA2
AFTER INSERT ON aviones
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se creó un nuevo avion: ',NEW.nombre),NOW());
 //

 trigger asientos

 DELIMITER // 
CREATE TRIGGER INS_BITACORA3
AFTER INSERT ON asientos
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se creó un nuevo asiento: ',NEW.no_asientos),NOW());
 //

 trigger vuelos

 DELIMITER // 
CREATE TRIGGER INS_BITACORA4
AFTER INSERT ON vuelos
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se creó un nuevo vuelo: ',NEW.destino),NOW());
 //

 trigger boleta

 DELIMITER // 
CREATE TRIGGER INS_BITACORA5
AFTER INSERT ON boleta
FOR EACH ROW
INSERT INTO bitacora(accion,fecha)
VALUES(concat('Se creó un nuevo boleta: ',NEW.hora),NOW());
 //