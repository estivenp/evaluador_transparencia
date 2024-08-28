-- Variables for non-survey metrics
INSERT INTO variable (id_componente_formula, tipo, nombre, descripcion)
VALUES 
(35, 'number', 'NEE', 'Número de exportaciones exitosas'),
(37, 'number', 'NTIE', 'Número total de intentos de exportación'),
(56, 'number', 'PCD', 'Puntuación de compatibilidad por dispositivo'),
(59, 'number', 'NTDE', 'Número total de tipos de dispositivos evaluados'),
(88, 'number', 'NRC', 'Número de registros consistentes'),
(90, 'number', 'NTRV', 'Número total de registros verificados'),
(108, 'number', 'NEIP', 'Número de elementos de interfaz personalizables'),
(110, 'number', 'NTEI', 'Número total de elementos de interfaz'),
(128, 'number', 'NECI', 'Número de elementos correctamente identificados'),
(130, 'number', 'NTEE', 'Número total de elementos evaluados'),
(174, 'number', 'NUCRN', 'Número de usuarios que confirman haber recibido y entendido las notificaciones'),
(176, 'number', 'NTUEN', 'Número total de usuarios a los que se enviaron notificaciones'),
(180, 'number', 'NTP', 'Número total de palabras'),
(182, 'number', 'NT', 'Número total de oraciones'),
(184, 'number', 'NPC', 'Número de palabras comunes'),
(186, 'number', 'NTP', 'Número total de palabras'),
(204, 'number', 'NTDC', 'Número de temas documentados completamente'),
(206, 'number', 'NTTRD', 'Número total de temas que requieren documentación'),
(262, 'number', 'NCVC', 'Número de campos validados correctamente'),
(264, 'number', 'NTCI', 'Número total de campos ingresados'),
(280, 'number', 'NDRCT', 'Número de datos con registro completo de trazabilidad'),
(282, 'number', 'NTDPI', 'Número total de datos en la plataforma'),
(298, 'number', 'NERC', 'Número de evidencias retenidas correctamente'),
(300, 'number', 'NEDR', 'Número de evidencias que deben retenerse');
