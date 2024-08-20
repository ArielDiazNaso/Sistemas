-- 1. Tabla "libros"
-- i. Eliminar la tabla si existe
DROP TABLE IF EXISTS libros;

-- ii. Crear la tabla "libros"
CREATE TABLE libros (
    titulo VARCHAR(20),
    autor VARCHAR(30),
    editorial VARCHAR(15),
    precio FLOAT
);

-- iii. Visualizar la estructura de la tabla "libros"
DESCRIBE libros;

-- iv. Insertar registros
INSERT INTO libros (titulo, autor, editorial, precio) VALUES 
('El aleph', 'Borges', 'Planeta', 5550.00),
('Martin Fierro', 'Jose Hernandez', 'Emece', 2500.50),
('Aprenda PHP', 'Mario Molina', 'Emece', 2500.00),
('Cervantes y el quijote', 'Borges', 'Paidos', 5325.00),
('Matematica estas ahi', 'Paenza', 'Paidos', 4870.80);

-- v. Mostrar todos los registros
SELECT * FROM libros;

-- vi. Modificar autor "Paenza" a "Adrian Paenza"
UPDATE libros SET autor = 'Adrian Paenza' WHERE autor = 'Paenza';

-- vii. Nuevamente, modificar autor "Paenza" a "Adrian Paenza" (sin registros afectados)
UPDATE libros SET autor = 'Adrian Paenza' WHERE autor = 'Paenza';

-- viii. Actualizar el precio del libro de "Mario Molina"
UPDATE libros SET precio = 2700 WHERE autor = 'Mario Molina';

-- ix. Actualizar la editorial a "Emece S.A."
UPDATE libros SET editorial = 'Emece S.A.' WHERE editorial = 'Emece';

-- 2. Tabla "articulos"
-- i. Eliminar la tabla si existe
DROP TABLE IF EXISTS articulos;

-- ii. Crear la tabla "articulos"
CREATE TABLE articulos (
    codigo INTEGER,
    nombre VARCHAR(20),
    descripcion VARCHAR(30),
    precio FLOAT,
    cantidad INTEGER
);

-- iii. Visualizar la estructura de la tabla "articulos"
DESCRIBE articulos;

-- iv. Insertar registros
INSERT INTO articulos (codigo, nombre, descripcion, precio, cantidad) VALUES
(1, 'impresora', 'Epson Stylus C45', 400.80, 20),
(2, 'impresora', 'Epson Stylus C85', 500, 30),
(3, 'monitor', 'Samsung 14', 800, 10),
(4, 'teclado', 'ingles Biswal', 100, 50),
(5, 'teclado', 'español Biswal', 90, 50);

-- v. Actualizar el precio de "Epson Stylus C45"
UPDATE articulos SET precio = 400 WHERE descripcion = 'Epson Stylus C45';

-- vi. Actualizar la cantidad a 100 de todos los teclados
UPDATE articulos SET cantidad = 100 WHERE nombre = 'teclado';

-- vii. Actualizar cantidad y precio del artículo con código 2
UPDATE articulos SET cantidad = 50, precio = 5550 WHERE codigo = 2;

-- viii. Actualizar la cantidad a 100 de registros con cantidad 1000 (sin registros afectados)
UPDATE articulos SET cantidad = 100 WHERE cantidad = 1000;

-- 3. Tabla "alumnos"
-- i. Eliminar la tabla si existe
DROP TABLE IF EXISTS alumnos;

-- ii. Crear la tabla "alumnos"
CREATE TABLE alumnos (
    legajo VARCHAR(4) NOT NULL,
    documento VARCHAR(8) NOT NULL,
    apellido VARCHAR(30),
    nombre VARCHAR(30),
    domicilio VARCHAR(30),
    PRIMARY KEY (legajo)
);

-- iii. Insertar registros
INSERT INTO alumnos (legajo, documento, apellido, nombre, domicilio) VALUES
('A233', '22345345', 'Perez', 'Mariana', 'Colon 234'),
('A567', '23545345', 'Morales', 'Marcos', 'Avellaneda 348'),
('B654', '24356345', 'Gonzalez', 'Analia', 'Caseros 444'),
('A642', '20254125', 'Torres', 'Ramiro', 'Dinamarca 209'),
('B509', '20445778', 'Miranda', 'Carmen', 'Uspallata 999'),
('C777', '28111444', 'Figueroa', 'Natalia', 'Sarmiento 856');

-- iv. Seleccionar todos los registros
SELECT * FROM alumnos;

-- v. Insertar 2 alumnos con mismo nombre y apellido pero distinto legajo
INSERT INTO alumnos (legajo, documento, apellido, nombre, domicilio) VALUES
('D888', '30546789', 'Perez', 'Mariana', 'La Rioja 789'),
('E999', '31547890', 'Perez', 'Mariana', 'Cordoba 123');

-- vi. Intentar ingresar un registro con legajo duplicado (generará error)
-- INSERT INTO alumnos (legajo, documento, apellido, nombre, domicilio) VALUES
-- ('A233', '12345678', 'Sanchez', 'Luis', 'Rivadavia 456');

-- 4. Tabla "medicamentos"
-- i. Eliminar la tabla si existe
DROP TABLE IF EXISTS medicamentos;

-- ii. Crear la tabla "medicamentos"
CREATE TABLE medicamentos (
    codigo INTEGER AUTO_INCREMENT,
    nombre VARCHAR(20),
    laboratorio VARCHAR(20),
    precio FLOAT,
    cantidad INTEGER,
    PRIMARY KEY (codigo)
);

-- iii. Visualizar la estructura de la tabla "medicamentos"
DESCRIBE medicamentos;

-- iv. Insertar registros
INSERT INTO medicamentos (nombre, laboratorio, precio, cantidad) VALUES
('Sertal', 'Roche', 5.2, 100),
('Buscapina', 'Roche', 4.10, 200),
('Amoxidal 500', 'Bayer', 15.60, 100);

-- v. Verificar que el campo "codigo" genera valores automáticamente
SELECT codigo, nombre, laboratorio, precio, cantidad FROM medicamentos;

-- vi. Intentar ingresar un registro con clave primaria repetida (generará error)
-- INSERT INTO medicamentos (codigo, nombre, laboratorio, precio, cantidad) VALUES
-- (1, 'Ibuprofeno', 'Bagó', 3.50, 50);

-- vii. Insertar un registro con clave primaria no repetida, salteando la secuencia
INSERT INTO medicamentos (codigo, nombre, laboratorio, precio, cantidad) VALUES
(12, 'Paracetamol 500', 'Bago', 1.90, 200);

-- viii. Insertar un registro con código automático
INSERT INTO medicamentos (nombre, laboratorio, precio, cantidad) VALUES
('Bayaspirina', 'Bayer', 2.10, 150);

-- 5. Tabla "peliculas"
-- i. Eliminar la tabla si existe
DROP TABLE IF EXISTS peliculas;

-- ii. Crear la tabla "peliculas"
CREATE TABLE peliculas (
    codigo INTEGER AUTO_INCREMENT,
    titulo VARCHAR(30) NOT NULL,
    actor VARCHAR(20),
    duracion INTEGER,
    PRIMARY KEY (codigo)
);

-- iii. Visualizar la estructura de la tabla "peliculas"
DESCRIBE peliculas;

-- iv. Insertar registros
INSERT INTO peliculas (titulo, actor, duracion) VALUES
('Mision imposible', 'Tom Cruise', 120),
('Harry Potter y la piedra filosofal', 'Daniel R.', 180),
('Harry Potter y la camara secreta', 'Daniel R.', 190),
('Mision imposible 2', 'Tom Cruise', 150),
('Titanic', 'L. Di Caprio', 220),
('Mujer bonita', 'R. Gere-J. Roberts', 200);

-- v. Recuperar todos los registros
SELECT * FROM peliculas;

-- vi. Insertar registro con valor nulo en clave primaria
INSERT INTO peliculas (codigo, titulo, actor, duracion) VALUES
(NULL, 'Elsa y Fred', 'China Zorrilla', 90);

-- vii. Intentar insertar un registro con valor nulo en "titulo" (generará error)
-- INSERT INTO peliculas (titulo, actor, duracion) VALUES
-- (NULL, 'Actor Desconocido', 100);

-- viii. Insertar registro con valores nulos en "actor" y "duracion"
INSERT INTO peliculas (titulo, actor, duracion) VALUES
('Mr. Johns', NULL, NULL);

-- ix. Insertar registro con cadenas vacías y valores numéricos 0
INSERT INTO peliculas (codigo, titulo, actor, duracion) VALUES
(0, '', '', 0);

-- x. Colocar 120 en duración donde duracion es NULL
UPDATE peliculas SET duracion = 120 WHERE duracion IS NULL;

-- xi. Colocar 'Desconocido' en actor donde es NULL
UPDATE peliculas SET actor = 'Desconocido' WHERE actor IS NULL;

-- xii. Mostrar todos los registros
SELECT * FROM peliculas;

-- xiii. Colocar 'Desconocido' en actor donde actor es cadena vacía
UPDATE peliculas SET actor = 'Desconocido' WHERE actor = '';

-- xiv. Eliminar registros con título vacío
DELETE FROM peliculas WHERE titulo = '';
