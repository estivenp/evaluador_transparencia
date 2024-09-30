INSERT INTO pregunta (id_componente_formula, id_respuesta, texto, orden)
VALUES
-- SMPD (Satisfacción con los mecanismos de protección de datos)
(2, 1, '¿Qué tan satisfecho está con la forma en que la plataforma web comunica sus políticas de privacidad?', 1),
(4, 1,'¿Qué tan satisfecho está con los mecanismos de protección de datos ofrecidos durante su interacción con la plataforma?', 2),

-- CPP (Claridad en políticas de privacidad)
(10, 2,'¿Qué tan fácil es entender las políticas de privacidad de la plataforma web?', 1),
(12, 3,'¿Cómo calificaría la calidad de la información proporcionada sobre el manejo de sus datos personales?', 2),
(14, 1,'¿Qué tan satisfecho está con la claridad de las políticas de privacidad de la plataforma web?', 3),

-- SOED (Satisfacción con las operaciones de exportación de datos)
(23, 2,'¿Qué tan fácil es encontrar la opción para exportar sus datos personales en la plataforma web?', 1),
(25, 1,'¿Qué tan satisfecho está con el proceso de exportación de sus datos personales?', 2),
(27, 1,'¿Qué tan satisfecho está con el formato en que se proporcionan sus datos exportados?', 3),

-- SOA (Satisfacción con opciones de accesibilidad)
(43, 1,'¿Qué tan satisfecho está con las opciones de accesibilidad para usuarios con discapacidades visuales?', 1),
(45, 1,'¿Qué tan satisfecho está con las opciones de accesibilidad para usuarios con discapacidades auditivas?', 2),
(47, 1,'¿Qué tan satisfecho está con las opciones de accesibilidad para usuarios con discapacidades motoras?', 3),

-- ECD (Experiencia en la consistencia de datos)
(61, 4,'¿Con qué frecuencia ha notado inconsistencias en sus datos personales almacenados en la plataforma web?', 1),
(63, 1,'¿Qué tan satisfecho está con la consistencia de sus datos personales en la plataforma web?', 2),

-- FCD (Facilidad de corrección de datos)
(68, 1,'¿Qué tan satisfecho está con la facilidad para corregir errores en sus datos personales?', 1),
(70, 1,'¿Qué tan satisfecho está con el proceso de actualización de sus datos personales?', 2),

-- SCD (Satisfacción de la consistencia de datos)
(76, 7,'¿Cómo calificaría la consistencia de sus datos personales en la plataforma web?', 1),
(78, 1,'¿Qué tan satisfecho está con la forma en que se mantienen sus datos personales a lo largo del tiempo?', 2),
(80, 21,'¿Cómo calificaría la precisión de sus datos personales almacenados en la plataforma web?', 3),

-- FCD (Flexibilidad de configuración de datos)
(96, 5,'¿Qué tan fácil es personalizar la configuración de sus datos personales en la plataforma web?', 1),
(98, 6,'¿Qué tan flexible considera que es la plataforma web en términos de ajustar la estructura de sus datos personales?', 2),
(100, 1,'¿Qué tan satisfecho está con las opciones de personalización de la presentación visual de sus datos?', 3),

-- SUCV (Satisfacción del usuario con la claridad visual)
(116, 5,'¿Qué tan fácil es leer y comprender la información presentada en la plataforma web?', 1),
(118, 5,'¿Qué tan fácil es identificar los diferentes elementos en la interfaz de la plataforma web?', 2),
(120, 1,'¿Qué tan satisfecho está con la claridad visual general de la plataforma web?', 3),

-- SUC (Satisfacción del usuario con la consistencia)
(136, 7,'¿Qué tan consistente encuentra la presentación de la información en la plataforma web?', 1),
(138, 1,'¿Qué tan satisfecho está con la coherencia en el diseño de las diferentes secciones de la plataforma web?', 2),
(140, 8,'¿Qué tan uniforme considera que es la experiencia de usuario en toda la plataforma web?', 3),

-- SCV (Satisfacción de consistencia visual)
(149, 7,'¿Qué tan consistente encuentra el diseño visual en toda la plataforma web?', 1),
(151, 8,'¿Qué tan uniforme es el uso de colores, fuentes y estilos en la plataforma web?', 2),
(153, 9,'¿Qué tan coherente es la disposición de los elementos en las diferentes páginas de la plataforma web?', 3),

-- SUAI (Satisfacción con la actualidad de la información)
(162, 10,'¿Qué tan actualizada considera que está la información en la plataforma web?', 1),
(164, 1,'¿Qué tan satisfecho está con la frecuencia de actualización de la información en la plataforma web?', 2),
(166, 11,'¿Qué tan relevante considera que es la información proporcionada en la plataforma web?', 3),

-- EI (Exhaustividad de la información)
(209, 12,'¿Qué tan completa considera que es la información proporcionada en la plataforma web?', 1),
(211, 13,'¿Qué tan exhaustiva es la cobertura de los temas relevantes en la plataforma web?', 2),
(213, 1,'¿Qué tan satisfecho está con el nivel de detalle de la información proporcionada en la plataforma web?', 3),

-- SCAP (Satisfacción de control de acceso)
(229, 14,'¿Qué tan seguro se siente con respecto al control de acceso a sus datos personales en la plataforma web?', 1),
(231, 16,'¿Con qué frecuencia se le solicita autenticación adicional para acceder a información sensible?', 2),
(233, 5,'¿Qué tan fácil es para usted gestionar los permisos de acceso a sus datos personales?', 3),

-- STUD (Satisfacción de transparencia de uso de datos)
(242, 15,'¿Qué tan claro es para usted cómo se utilizan sus datos personales en la plataforma web?', 1),
(244, 5,'¿Qué tan fácil es acceder a la información sobre el uso de sus datos personales?', 2),
(246, 1,'¿Qué tan satisfecho está con la transparencia de la plataforma web respecto al uso de sus datos personales?', 3),

-- SVI (Satisfacción de verificabilidad de la información)
(254, 16,'¿Con qué frecuencia encuentra fuentes o referencias que respalden la información presentada en la plataforma web?', 1),
(256, 17,'¿Qué tan efectivos son los mecanismos de la plataforma web para verificar la autenticidad de la información?', 2),

-- SDIF (Satisfacción de detección de información falsa)
(261, 16,'¿Con qué frecuencia ha notado que la plataforma web identifica o marca información potencialmente falsa?', 1),
(263, 17,'¿Qué tan efectiva considera que es la plataforma web en la detección y manejo de información falsa?', 2),

-- SUV (Satisfacción del usuario con la verificación)
(268, 1,'¿Qué tan satisfecho está con los métodos de verificación de identidad utilizados por la plataforma web?', 1),
(270, 5,'¿Qué tan fácil es completar los procesos de verificación en la plataforma web?', 2),
(272, 18,'¿Qué tan confiables considera que son los mecanismos de verificación implementados en la plataforma web?', 3),
(274, 1,'¿Qué tan satisfecho está con la seguridad general proporcionada por los procesos de verificación?', 4),

-- SUT (Satisfacción del usuario con la trazabilidad)
(286, 5,'¿Qué tan fácil es para usted rastrear los cambios realizados en sus datos personales?', 1),
(288, 12,'¿Qué tan completa es la información de auditoría proporcionada sobre el acceso y modificación de sus datos?', 2),
(290, 19,'¿Qué tan útil encuentra la información de trazabilidad proporcionada por la plataforma web?', 3),
(292, 1,'¿Qué tan satisfecho está con la capacidad de la plataforma web para proporcionar un historial completo de sus datos?', 4),

-- SUNR (Satisfacción del usuario con no repudio)
(304, 20,'¿Qué tan confiado se siente de que las acciones realizadas en la plataforma web no pueden ser negadas posteriormente?', 1),
(306, 5,'¿Qué tan fácil es para usted obtener pruebas de las transacciones o acciones realizadas en la plataforma web?', 2),
(308, 15,'¿Qué tan claro es el proceso de generación de evidencias de no repudio en la plataforma web?', 3),
(310, 1,'¿Qué tan satisfecho está con los mecanismos de no repudio implementados en la plataforma web?', 4);
