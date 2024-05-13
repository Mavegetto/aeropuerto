use Aerolineas;

CREATE TABLE vuelos (id INT AUTO_INCREMENT, origen VARCHAR(25), destino VARCHAR(25), escalas VARCHAR(25), id_avion INT, PRIMARY KEY (id), CONSTRAINT FOREIGN KEY(id_avion) REFERENCES aviones(id)) ENGINE = MyISAM;
