CREATE DATABASE proveedores;

USE proveedores;

CREATE TABLE personanat (
    idpersonanat INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    documento VARCHAR(12) NOT NULL,
    comuna VARCHAR (15) NOT NULL,
    barrio VARCHAR (30) NOT NULL,
    direccion VARCHAR(100) NOT NULL,
    telefono VARCHAR(12) NOT NULL,
    correo VARCHAR(50) NOT NULL,
    foto TEXT
);

CREATE TABLE personajur (
    idpersonajur INT AUTO_INCREMENT PRIMARY KEY,
    rut VARCHAR(50) NOT NULL,
    represLegal VARCHAR(12) NOT NULL,
    comunaj VARCHAR (15) NOT NULL,
    barrioj VARCHAR (30) NOT NULL,
    direccionj VARCHAR(100) NOT NULL,
    telefonoj VARCHAR(12) NOT NULL,
    correoj VARCHAR(50) NOT NULL,
    fotoj TEXT
);

INSERT INTO `personajur` (`idpersonajur`, `rut`, `represLegal`, `comunaj`,`barrioj`,`direccionj`, `telefonoj`, `correoj`, `fotoj`) VALUES ('1', '354567873', 'Natalia', 'comuna2','andalucia', 'cll 10 cr 5 av colombia', '36458465475', 'natalia@gmail.com', 'wsp.png');
INSERT INTO `personanat` (`idpersonanat`, `nombre`, `documento`,`comuna`,`barrio`, `direccion`, `telefono`, `correo`, `foto`) VALUES ('1', 'Neider Higuita', '1015068806','comuna1','santo domingo', 'cll97 #22b 59 int 205', '3236567367', 'neihiguita@misena.edu.co', 'yo.jpeg');