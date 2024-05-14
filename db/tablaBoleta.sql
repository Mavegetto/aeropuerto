use Aerolineas;

CREATE TABLE boleta (id INT AUTO_INCREMENT, hora VARCHAR(25), id_vuelo INT, PRIMARY KEY (id), CONSTRAINT FOREIGN KEY(id_vuelo) REFERENCES vuelos(id)) ENGINE = MyISAM;