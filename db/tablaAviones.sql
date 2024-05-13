use Aerolineas;

CREATE TABLE aviones (id INT AUTO_INCREMENT, no_avion VARCHAR(10), nombre VARCHAR(10), id_aeropuerto INT, PRIMARY KEY (id), CONSTRAINT FOREIGN KEY(id_aeropuerto) REFERENCES aeropuerto(id)) ENGINE = MyISAM;