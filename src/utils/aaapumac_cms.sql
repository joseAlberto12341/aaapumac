DROP DATABASE IF EXISTS aaapumac_cms;
CREATE DATABASE aaapumac_cms CHARACTER SET utf8mb4 DEFAULT COLLATE utf8mb4_general_ci;
USE aaapumac_cms;

CREATE TABLE aaaroles (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE aaausers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  id_role INT NOT NULL DEFAULT 2,
  id_status INT NOT NULL DEFAULT 1,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  CONSTRAINT fk_aaausers_id_role FOREIGN KEY (id_role) REFERENCES aaaroles(id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT,
  CONSTRAINT fk_aaausers_id_status FOREIGN KEY (id_status) REFERENCES aaastatus(id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
) ENGINE=InnoDB;

-- CREATE TABLE aaarole_user (
--   id INT AUTO_INCREMENT PRIMARY KEY,
--   id_user INT NOT NULL,
--   id_role INT NOT NULL,
--   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
--   updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
--   FOREIGN KEY (id_user) REFERENCES aaausers(id),
--   FOREIGN KEY (id_role) REFERENCES aaaroles(id)
-- ) ENGINE=InnoDB;

CREATE TABLE aaapermits (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE aaarole_permit (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_role INT NOT NULL,
  id_permit INT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (id_role) REFERENCES aaaroles(id),
  FOREIGN KEY (id_permit) REFERENCES aaapermits(id)
) ENGINE=InnoDB;

CREATE TABLE aaastatus (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE aaaactions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE aaacategories (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE aaalog (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_user INT NOT NULL,
  id_action INT NOT NULL,
  id_status INT NOT NULL,
  description TEXT NOT NULL,
  ip_address VARCHAR(255) NOT NULL,
  user_agent VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (id_user) REFERENCES aaausers(id),
  FOREIGN KEY (id_action) REFERENCES aaaactions(id),
  FOREIGN KEY (id_status) REFERENCES aaastatus(id)
) ENGINE=InnoDB;

CREATE TABLE aaamodal (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  image VARCHAR(255) NOT NULL,
  visible BOOLEAN NOT NULL DEFAULT 1,
  id_category INT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE jobinfo (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255) NOT NULL,
  description TEXT NOT NULL,
  image VARCHAR(255) NOT NULL,
  vacancy INT NOT NULL,
  responsabilities TEXT NOT NULL,
  education TEXT NOT NULL,
  experience TEXT NOT NULL,
  additional TEXT NOT NULL,
  workexperience INT NOT NULL,
  salary DECIMAL(10,2) NOT NULL,
  contract_type VARCHAR(255) NOT NULL,
  benefits TEXT NOT NULL,
  location VARCHAR(255) NOT NULL,
  id_status INT NOT NULL,
  deadline DATE NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE jobcategory (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE jobinfo_category (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_job INT NOT NULL,
  id_category INT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (id_job) REFERENCES jobinfo(id),
  FOREIGN KEY (id_category) REFERENCES jobcategory(id)
) ENGINE=InnoDB;

CREATE TABLE jobsex (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE jobinfo_sex(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_job INT NOT NULL, 
    id_sex INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (id_job) REFERENCES jobinfo(id),
    FOREIGN KEY (id_sex) REFERENCES jobsex(id)
) ENGINE=InnoDB;

CREATE TABLE jobstatus (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE aaacontacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    type INT NOT NULL DEFAULT 2,
    description TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE aaacontacttype (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE informacion_general (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL UNIQUE,
  patente VARCHAR(50),
  agente_aduanal VARCHAR(255),
  razon_social VARCHAR(255),
  telefono VARCHAR(20),
  nombre_completo VARCHAR(255),
  correo_electronico VARCHAR(255),
  agencia_aduanal VARCHAR(255),
  fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  created_by INT NOT NULL,  -- ID del coordinador que creó el registro
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  
  CONSTRAINT fk_informacion_general_user_id 
    FOREIGN KEY (user_id) REFERENCES aaausers(id)
    ON UPDATE CASCADE
    ON DELETE CASCADE,
    
  CONSTRAINT fk_informacion_general_created_by 
    FOREIGN KEY (created_by) REFERENCES aaausers(id)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
) ENGINE=InnoDB;

CREATE TABLE folio_pedimento (
  id INT AUTO_INCREMENT PRIMARY KEY,

  -- Datos que el usuario captura en el formulario
  user_id INT NOT NULL,
  pedimento VARCHAR(50) NOT NULL,
  tipo_operacion VARCHAR(100) NOT NULL,
  clave_pedimento VARCHAR(50) NOT NULL,
  CR VARCHAR(50),
  fecha DATE,

  -- Datos que se copiarán desde informacion_general
  patente VARCHAR(50),
  agente_aduanal VARCHAR(255),
  razon_social VARCHAR(255),
  telefono VARCHAR(20),
  nombre_completo VARCHAR(255),
  correo_electronico VARCHAR(255),
  agencia_aduanal VARCHAR(255),
  folio VARCHAR(100),
  Estatus varchar(100),

  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

  CONSTRAINT fk_folio_user
    FOREIGN KEY (user_id) REFERENCES aaausers(id)
    ON UPDATE CASCADE
    ON DELETE CASCADE
) ENGINE=InnoDB;

INSERT INTO aaausers (username, password, email) VALUES ('amendoza', 'admin123', 'amendoza@aaamzo.org.mx');
INSERT INTO aaaroles (name) VALUES ('admin'), ('user'), ('guest'), ('associate');
-- INSERT INTO aaarole_user (id_user, id_role) VALUES (1, 1);
INSERT INTO aaapermits (name) VALUES ('create'), ('read'), ('update'), ('delete');
INSERT INTO aaarole_permit (id_role, id_permit) VALUES (1, 1), (1, 2), (1, 3), (1, 4);
INSERT INTO aaastatus (name) VALUES ('active'), ('inactive'), ('deleted');
INSERT INTO aaaactions (name) VALUES ('create'), ('read'), ('update'), ('delete');
INSERT INTO aaacategories (name) VALUES ('modal'), ('job'), ('home');
INSERT INTO aaalog (id_user, id_action, id_status, description, ip_address, user_agent) VALUES (1, 1, 1, 'User amendoza created', 'Primer inicio', 'Mozilla/5.0');
INSERT INTO aaamodal (title, description, image, visible, id_category) VALUES 
('Reportes Antisoborno', 'Estas son la opciónes de realizar un reporte antisoborno.', '/src/views/assets/img/modal/Antisoborno.png', 1, 1), 
('Calendario UNIAAAPUMAC', 'Cursos del mes en curso.', '/src/views/assets/img/modal/Calendario.png', 1, 1);
INSERT INTO jobinfo (title, description, image, vacancy, responsabilities, education, experience, additional, workexperience, salary, contract_type, benefits, location, id_status, deadline) 
VALUES ('Desarrollador Web', 'Desarrollar aplicaciones web.', '/src/views/assets/img/job/DesarrolladorWeb.png', 1, 'Desarrollar aplicaciones web.', 'Ingeniería en sistemas computacionales o afín.', 'Mínimo 2 años en desarrollo web.', 'Conocimientos en HTML, CSS, JavaScript, PHP, MySQL.', 2, 15000.00, 'Tiempo completo', 'Prestaciones de ley.', 'Puebla, Puebla', 1, '2021-12-31'), 
('Diseñador Gráfico', 'Diseñar gráficos para redes sociales.', '/src/views/assets/img/job/DiseñadorGrafico.png', 1, 'Diseñar gráficos para redes sociales.', 'Licenciatura en diseño gráfico o afín.', 'Mínimo 2 años en diseño gráfico.', 'Conocimientos en Adobe Illustrator, Adobe Photoshop.', 2, 15000.00, 'Tiempo completo', 'Prestaciones de ley.', 'Puebla, Puebla', 1, '2021-12-31'),
('Administrador de Sistemas', 'Administrar servidores.', '/src/views/assets/img/job/AdministradorSistemas.png', 1, 'Administrar servidores.', 'Ingeniería en sistemas computacionales o afín.', 'Mínimo 2 años en administración de servidores.', 'Conocimientos en Linux, Windows Server.', 2, 15000.00, 'Tiempo completo', 'Prestaciones de ley.', 'Puebla, Puebla', 1, '2021-12-31'),
('Desarrollador Móvil', 'Desarrollar aplicaciones móviles.', '/src/views/assets/img/job/DesarrolladorMovil.png', 1, 'Desarrollar aplicaciones móviles.', 'Ingeniería en sistemas computacionales o afín.', 'Mínimo 2 años en desarrollo móvil.', 'Conocimientos en Java, Kotlin, Swift.', 2, 15000.00, 'Tiempo completo', 'Prestaciones de ley.', 'Puebla, Puebla', 1, '2021-12-31'),
('Diseñador Web', 'Diseñar páginas web.', '/src/views/assets/img/job/DiseñadorWeb.png', 1, 'Diseñar páginas web.', 'Licenciatura en diseño gráfico o afín.', 'Mínimo 2 años en diseño web.', 'Conocimientos en HTML, CSS, JavaScript.', 2, 15000.00, 'Tiempo completo', 'Prestaciones de ley.', 'Puebla, Puebla', 1, '2021-12-31'), 
('Administrador de Base de Datos', 'Administrar bases de datos.', '/src/views/assets/img/job/AdministradorBD.png', 1, 'Administrar bases de datos.', 'Ingeniería en sistemas computacionales o afín.', 'Mínimo 2 años en administración de bases de datos.', 'Conocimientos en MySQL, SQL Server.', 2, 15000.00, 'Tiempo completo', 'Prestaciones de ley.', 'Puebla, Puebla', 1, '2021-12-31'), 
('Desarrollador de Videojuegos', 'Desarrollar videojuegos.', '/src/views/assets/img/job/DesarrolladorVideojuegos.png', 1, 'Desarrollar videojuegos.', 'Ingeniería en sistemas computacionales o afín.', 'Mínimo 2 años en desarrollo de videojuegos.', 'Conocimientos en Unity, Unreal Engine.', 2, 15000.00, 'Tiempo completo', 'Prestaciones de ley.', 'Puebla, Puebla', 1, '2021-12-31'), 
('Diseñador de Videojuegos', 'Diseñar videojuegos.', '/src/views/assets/img/job/DiseñadorVideojuegos.png', 1, 'Diseñar videojuegos.', 'Licenciatura en diseño gráfico o afín.', 'Mínimo 2 años en diseño de videojuegos.', 'Conocimientos en Adobe Illustrator, Adobe Photoshop.', 2, 15000.00, 'Tiempo completo', 'Prestaciones de ley.', 'Puebla, Puebla', 1, '2021-12-31'), 
('Administrador de Redes', 'Administrar redes.', '/src/views/assets/img/job/AdministradorRedes.png', 1, 'Administrar redes.', 'Ingeniería en sistemas computacionales o afín.', 'Mínimo 2 años en administración de redes.', 'Conocimientos en Cisco, Mikrotik.', 2, 15000.00, 'Tiempo completo', 'Prestaciones de ley.', 'Puebla, Puebla', 1, '2021-12-31');
INSERT INTO jobcategory (name) VALUES ('Desarrollo'), ('Diseño'), ('Administración');
INSERT INTO jobinfo_category (id_job, id_category) VALUES (1, 1), (1, 2);
INSERT INTO jobsex (name) VALUES ('Masculino'), ('Femenino'), ('Indistinto');
INSERT INTO jobinfo_sex (id_job, id_sex) VALUES (1, 1), (1, 2), (1, 3);
INSERT INTO jobstatus (name) VALUES ('Activo'), ('Inactivo'), ('Eliminado');
INSERT INTO aaacontacts (name, email, phone, type, description) VALUES ('Alejandro Mendoza', 'amendoza@aaamzo.org.mx', '2221234567', 1, 'Hola, soy Alejandro Mendoza y quiero contactar con ustedes.');
INSERT INTO aaacontacttype (name) VALUES ('Contacto'), ('Queja'), ('Sugerencia'), ('Reporte');

