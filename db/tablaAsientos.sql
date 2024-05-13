use Aerolineas;

CREATE TABLE asientos (id INT AUTO_INCREMENT, no_asientos VARCHAR(10), posicion VARCHAR(30), id_avion INT, PRIMARY KEY (id), CONSTRAINT FOREIGN KEY(id_avion) REFERENCES aviones(id)) ENGINE = MyISAM;
