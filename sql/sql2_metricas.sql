-- Satisfacción con los mecanismos de protección de datos (SMPD)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    3,
    'Satisfacción con los mecanismos de protección de datos',
    'SMPD',
    'Esta métrica tiene como objetivo evaluar la percepción de la satisfacción respecto a la manera en que una plataforma web comunica sus políticas de privacidad y los mecanismos que protección de datos ofrecidos a los usuarios durante si iteración con la plataforma.',
    'Porcentaje %',
    '[20, 100]',
    'Opciones de respuesta para P1 y P2: 1 - Muy insatisfecho 2 - Insatisfecho 3 - Neutral 4 - Satisfecho 5 - Muy satisfecho',
    'Supongamos que un usuario responde: P1 = 4, P6 = 5. SMPD = (4 + 5) * 10 = 90%. Este resultado indica una alta satisfacción con los mecanismos de protección de datos y seguridad implementados en la plataforma web, cumpliendo con el objetivo.'
);

-- Claridad en políticas de privacidad (CPP)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    3,
    'Claridad en políticas de privacidad',
    'CPP',
    'Esta métrica tiene como objetivo evaluar el índice de claridad con el que una plataforma web presenta sus políticas de privacidad en relación con la gestión de datos ofrecida a los usuarios durante la iteración con la plataforma.',
    'Porcentaje %',
    '[20, 100]',
    'Opciones de respuesta de P3: 1 - Muy difícil 2 - Difícil 3 - Neutral 4 - Bueno 5 – Excelente. Opciones de respuesta de P4: 1 - Muy deficiente 2 - Deficiente 3 - Neutral 4 - Bueno 5 – Excelente. Opciones de respuesta de P5: 1 - Muy insatisfecho 2 - Insatisfecho 3 - Neutral 4 - Satisfecho 5 – Muy satisfecho.',
    'Supongamos que un usuario responde: P3 = 3, P4 = 4, P5 = 5. CPP = ((3 + 4 + 5) / 3) * 20 = 80%. Este resultado indica una buena claridad de las políticas de privacidad que se encuentran implementadas en la plataforma web, cumpliendo con el objetivo.'
);

-- Satisfacción con las operaciones de exportación de datos (SOED)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    4,
    'Satisfacción con las operaciones de exportación de datos',
    'SOED',
    'Esta métrica tiene como objetivo evaluar la satisfacción de los usuarios con las opciones de datos personales ofrecidas por la plataforma web, específicamente con relación con el proceso de descarga disponible duranta la iteración con la plataforma.',
    'Porcentaje %',
    '[20, 100]',
    'Opciones de respuesta de P6: 1 - Muy difícil 2 - Difícil 3 - Neutral 4 - Bueno 5 – Excelente. Opciones de respuesta de P7 y P8: 1 - Muy insatisfecho 2 - Insatisfecho 3 - Neutral 4 - Bueno 5 - Excelente',
    'Supongamos que un usuario responde: P6 = 4, P7 = 3, P8 = 5. SOED = ((4 + 3 + 5) / 3) * 20 = 80%. Este resultado indica una buena satisfacción con las opciones de exportación de datos, alcanzando el valor objetivo.'
);

-- Tasa de éxito en la exportación de datos (TEED)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    4,
    'Tasa de éxito en la exportación de datos',
    'TEED',
    'Esta métrica tiene como objetivo evaluar la tasa de éxito en el proceso de exportación y descarga de datos personales en una plataforma web durante la iteración con los usuarios.',
    'Porcentaje %',
    '[0, 100]',
    'NEE: Número de exportaciones exitosas. NTIE: Número total de intentos de exportación.',
    'Supongamos los siguientes datos: Se van a evaluar 20 intentos de exportación, de los cuales 16 fueron exitosos. TEED = (16 / 20) * 100 = 80%. Este resultado indica una buena tasa de éxito en la exportación de datos, superando el valor objetivo.'
);

-- Satisfacción con opciones de accesibilidad (SOA)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    2,
    'Satisfacción con opciones de accesibilidad',
    'SOA',
    'Esta métrica tiene como objetivo evaluar la percepción de satisfacción respecto a como una plataforma web presenta sus opciones de accesibilidad para usuarios con discapacidades motrices, auditivas o visuales.',
    'Porcentaje %',
    '[20, 100]',
    'Opciones de respuesta de P9 a P11: 1 - Muy insatisfecho 2 - Insatisfecho 3 - Neutral 4 - Satisfecho 5 - Muy satisfecho',
    'Supongamos que un usuario responde: P9 = 4, P10 = 3, P11 = 5. SOA = ((4 + 3 + 5) / 3) * 20 = 80%. Este resultado indica una buena satisfacción con las opciones de accesibilidad presentadas en la plataforma web, alcanzando el valor objetivo.'
);

-- Compatibilidad con diferentes dispositivos (CDD)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    2,
    'Compatibilidad con diferentes dispositivos',
    'CDD',
    'Esta métrica tiene como objetivo evaluar el índice de compatibilidad de una plataforma web en la gestión y el acceso de datos personales desde diversos tipos de dispositivos, incluyendo computadores de escritorio, laptops y dispositivos móviles.',
    'Compatibilidad',
    '[1, 3]',
    'Puntuación de compatibilidad: 1 punto - El dispositivo permite acceder a la plataforma, pero no gestionar datos personales. 2 puntos - El dispositivo permite acceder a la plataforma y gestionar datos personales de manera limitada. 3 puntos - El dispositivo permite acceder a la plataforma y gestionar datos personales de manera completa.',
    'Supongamos que se evaluaron 4 tipos de dispositivos con los siguientes resultados: Computadora de escritorio: 3 puntos, Laptop: 3 puntos, Tablet: 2 puntos, Smartphone: 2 puntos. CDD = (3 + 3 + 2 + 2) / 4 = 2.5. Este resultado indica una alta compatibilidad entre los diferentes dispositivos y la plataforma web, cumpliendo con el objetivo planteado.'
);

-- Experiencia en la consistencia de datos (ECD)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    5,
    'Experiencia en la consistencia de datos',
    'ECD',
    'Esta métrica tiene como objetivo evaluar la percepción de santificación del usuario sobre la consistencia de datos proporcionada por una plataforma web, específicamente en relación a la presentación y almacenamiento de la información personal durante la iteración con la plataforma.',
    'Porcentaje %',
    '[20, 100]',
    'Opciones de respuesta para P12: 1 - Muy frecuentemente 2 - Frecuentemente 3 - Ocasionalmente 4 - Raramente 5 – Nunca. Opciones de respuesta para P13: 1 - Muy insatisfecho 2 - Insatisfecho 3 - Neutral 4 - Satisfecho 5 - Muy satisfecho',
    'Supongamos que un usuario responde: P12 = 4, P13 = 5. ECD = (4 + 5) * 10 = 90%. Este resultado indica una alta experiencia en cuanto a la consistencia de datos, superando el valor objetivo.'
);

-- Facilidad de corrección de datos (FCD)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    5,
    'Facilidad de corrección de datos',
    'FCD',
    'Esta métrica tiene como objetivo evaluar la percepción del usuario sobre la facilidad de corrección de datos personales previamente almacenados con errores en una plataforma web.',
    'Porcentaje %',
    '[20, 100]',
    'Opciones de respuesta para P14 y P15: 1 - Muy insatisfecho 2 - Insatisfecho 3 - Neutral 4 - Satisfecho 5 - Muy satisfecho',
    'Supongamos que un usuario responde: P14 = 4, P15 = 3. FCD = (4 + 3) * 10 = 70%. Este resultado indica una facilidad aceptable para corregir datos por parte de los usuarios en la plataforma web, cumpliendo con el objetivo planteado.'
);

-- Satisfacción de la consistencia de datos (SCD)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    6,
    'Satisfacción de la consistencia de datos',
    'SCD',
    'Esta métrica tiene como objetivo evaluar la percepción de satisfacción de los usuarios con respecto a la consistencia de los datos proporcionada por una plataforma web. Esto incluye como se presentan y almacenan los datos a lo largo del tiempo durante la interacción con la plataforma.',
    'Porcentaje %',
    '[20, 100]',
    'N/A',
    'Supongamos que un usuario responde: P16 = 4, P17 = 3 y P18 = 4. SCD = ((4 + 3 + 4)/3) * 20 = 73%. Este resultado indica una consistencia en los datos aceptable, cumpliendo con el valor objetivo.'
);

-- Índice de consistencia de datos (ICD)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    6,
    'Índice de consistencia de datos',
    'ICD',
    'Esta métrica tiene como objetivo evaluar el índice de consistencia en el almacenamiento de datos personales por parte de una plataforma web durante la interacción con los usuarios.',
    'Porcentaje %',
    '[1, 100]',
    'NRC: Número de registros consistentes. NTRV: Número total de registros verificados',
    'Supongamos que se verificaron 20 registros y se encontraron 18 consistentes: ICD = (18 / 20) * 100 = 90%. Este resultado indica una alta consistencia en el almacenamiento de datos, superando el valor objetivo.'
);

-- Flexibilidad de configuración de datos (FCD2)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    8,
    'Flexibilidad de configuración de datos',
    'FCD2',
    'Esta métrica tiene como objetivo evaluar la percepción de la flexibilidad que ofrece una plataforma web en la configuración de datos personales, en términos de estructura y presentación visual a los usuarios.',
    'Porcentaje %',
    '[20, 100]',
    'Opciones de respuesta para P19: 1 - Muy difícil 2 – Difícil 3 - Neutral 4 - Fácil 5 - Muy fácil. Opciones de respuesta para P20: 1 - Muy inflexible 2 – Inflexible 3 - Neutral 4 - Flexible 5 - Muy flexible. Opciones de respuesta para P21: 1 - Muy insatisfecho 2 - Insatisfecho 3 - Neutral 4 - Satisfecho 5 - Muy satisfecho',
    'Supongamos que un usuario responde: P19 = 4, P20 = 4, P21 = 5. FCD2 = ((4 + 4 + 5) / 15) * 100 = 86.6%. Este resultado indica una buena flexibilidad en la configuración de la estructura de los datos en la plataforma web, cumpliendo con el valor objetivo.');
    
-- Índice de personalización de interfaces de usuario (IPIU)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    8,
    'Índice de personalización de interfaces de usuario',
    'IPIU',
    'Esta métrica tiene como objetivo cuantificar el índice de personalización que una plataforma web ofrece para ajustar las interfaces de gestión de datos según las preferencias del usuario.',
    'Porcentaje %',
    '[0, 100]',
    'NEIP: Número de elementos de interfaz personalizables. NTEI: Número total de elementos de interfaz',
    'Supongamos que tenemos los siguientes datos: Interfaz tiene 20 elementos y 15 de ellos son personalizables. IPIU = (15 / 20) * 100 = 75%. Este resultado indica una flexibilidad aceptable en la personalización de interfaces, cumpliendo con el valor objetivo.'
);

-- Satisfacción del usuario con la claridad visual (SUCV)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    9,
    'Satisfacción del usuario con la claridad visual',
    'SUCV',
    'Esta métrica tiene como objetivo evaluar la percepción de satisfacción respecto a la claridad visual proporcionada por una plataforma web en relación con la información presentada a los usuarios.',
    'Porcentaje %',
    '[20, 100]',
    'Opciones de respuesta para P22 y P23: 1 - Muy difícil 2 – Difícil 3 - Neutral 4 - Fácil 5 - Muy fácil. Opciones de respuesta para P24: 1 - Muy insatisfecho 2 - Insatisfecho 3 - Neutral 4 - Satisfecho 5 - Muy satisfecho.',
    'Supongamos que un usuario responde: P26 = 4, P27 = 5, P28 = 4. SUCV = ((4 + 5 + 4) / 3) * 20 = 86.67%. Este resultado indica una buena satisfacción con la claridad visual de la información presentada, superando el valor objetivo.'
);

-- Tasa de reconocimiento de elementos (TRE)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    9,
    'Tasa de reconocimiento de elementos',
    'TRE',
    'Esta métrica tiene como objetivo cuantificar la tasa de reconocimiento de una plataforma web, con relación a los elementos en la interfaz de usuario, evaluando la capacidad para identificar correctamente elementos como: botones, iconos, enlaces, durante la interacción con la plataforma.',
    'Porcentaje %',
    '[0, 100]',
    'NECI: Número de elementos correctamente identificados. NTEE: Número total de elementos evaluados.',
    'Supongamos que: Se evaluaron 20 elementos y los usuarios identificaron correctamente 18: TRE = (18 / 20) * 100 = 90%. Este resultado indica una alta tasa elementos identificados correctamente, alcanzando el valor objetivo.'
);

-- Satisfacción del usuario con la consistencia (SUC)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    10,
    'Satisfacción del usuario con la consistencia',
    'SUC',
    'Esta métrica tiene como objetivo evaluar la percepción de satisfacción respecto a la consistencia ofrecida por una plataforma web en la presentación de la información a los usuarios.',
    'Porcentaje %',
    '[20, 100]',
    'Escala para P24: 1 - Muy inconsistente 2 - Inconsistente 3 - Neutral 4 - Consistente 5 - Muy consistente. Escala para P25: 1 - Muy insatisfecho 2 - Insatisfecho 3 - Neutral 4 - Satisfecho 5 - Muy satisfecho. Escala para P26: 1 - Muy no uniforme 2 - No uniforme 3 - Neutral 4 - Uniforme 5 - Muy uniforme',
    'Supongamos que un usuario responde: P24 = 4, P25 = 5, P26 = 4. SUC = ((4 + 5 + 4) / 3) * 20 = 86.67%. Este resultado indica una buena satisfacción con la consistencia y coherencia de la información, cumpliendo el valor objetivo.'
);

-- Satisfacción de consistencia visual (SCV)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    10,
    'Satisfacción de consistencia visual',
    'SCV',
    'Esta métrica tiene como objetivo evaluar la percepción de satisfacción respecto a la consistencia en el diseño visual de una plataforma web al momento en que un usuario interactúa con ella y con sus elementos.',
    'Porcentaje %',
    '[20, 100]',
    'Escala para P27: 1 - Muy inconsistente 2 - Inconsistente 3 - Neutral 4 - Consistente 5 - Muy consistente. Escala para P28: 1 - Muy no uniforme 2 - No uniforme 3 - Neutral 4 - Uniforme 5 - Muy uniforme. Escala para P29: 1 - Muy incoherente 2 - Incoherente 3 - Neutral 4 - Coherente 5 - Muy coherente',
    'Supongamos que Un evaluador responde: P27 = 4, P28 = 5, P29 = 4. SCV = ((4 + 5 + 4) / 3) * 20 = 86.67%. Este resultado indica una buena consistencia visual asociadas a los elementos de la plataforma web, cumpliendo el valor objetivo.'
);

-- Satisfacción con la actualidad de la información (SUAI)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    12,
    'Satisfacción con la actualidad de la información',
    'SUAI',
    'Esta métrica está diseñada para medir la percepción de satisfacción de los usuarios respecto a la efectividad de una plataforma web en la provisión de información actualizada.',
    'Porcentaje %',
    '[20, 100]',
    'Escala para P32: 1 - Muy desactualizada 2 - Desactualizada 3 - Neutral 4 - Actualizada 5 - Muy actualizada. Escala para P33: 1 - Muy insatisfecho 2 - Insatisfecho 3 - Neutral 4 - Satisfecho 5 - Muy satisfecho. Escala para P34: 1 - Nada relevante 2 - Poco relevante 3 - Neutral 4 - Relevante 5 - Muy relevante',
    'Supongamos que un usuario responde: P30 = 4, P31 = 5, P32 = 4. SUAI = ((4 + 5 + 4) / 3) * 20 = 86.67%. Este resultado indica una buena satisfacción con la actualidad de la información proporcionada en la plataforma web, cumpliendo el valor objetivo.'
);

-- Tasa de Eficacia en notificación de actualizaciones (TENA)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    12,
    'Tasa de Eficacia en notificación de actualizaciones',
    'TENA',
    'Esta métrica tiene como propósito evaluar la tasa de eficiencia con la que una plataforma web comunica actualizaciones significativas en la gestión de datos a los usuarios durante su interacción.',
    'Porcentaje %',
    '[0, 100]',
    'NUCRN: Número de usuarios que confirman haber recibido y entendido las notificaciones. NTUEN: Número total de usuarios a los que se enviaron notificaciones.',
    'Supongamos que lo siguientes datos: 100 usuarios notificados, 87 confirmaron recibido y entendido las actualizaciones: TENA = (87 / 100) * 100 = 87%. Este resultado indica una buena eficiencia en la notificación de actualizaciones en la gestión de datos, cumpliendo el valor objetivo.'
);

-- Longitud media de frases (LMF)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    13,
    'Longitud media de frases',
    'LMF',
    'Esta métrica está diseñada para cuantificar la longitud media utilizadas por una plataforma web, en relación a las frases utilizadas para presentar la información a los usuarios durante su interacción.',
    'Palabras por frase',
    '[0, 100]',
    'Valor objetivo: Entre 15 y 20 palabras por frase. NTP: Número total de palabras. NT: Número total de oraciones.',
    'Supongamos que lo siguientes datos: En un texto con 500 palabras y 30 frases. LMF = 500 / 30 = 16.67 palabras por frase. Este resultado indica una buena eficiencia en la notificación de actualizaciones, cumpliendo el valor objetivo.'
);

-- Índice de simplicidad léxica (ISL)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    13,
    'Índice de simplicidad léxica',
    'ISL',
    'Esta métrica tiene como objetivo evaluar el índice de simplicidad con el que una plataforma web, en relación al léxico con el cual se presentan textos informativos para que sean comunes o fácilmente comprensibles para los usuarios durante la interacción.',
    'Porcentaje %',
    '[0,100]',
    'NPC: Número de palabras comunes. NTP: Número total de palabras.',
    'Supongamos que lo siguientes datos: Texto de 200 palabras, 170 consideradas comunes o fácilmente comprensibles: ISL = (170 / 200) * 100 = 85%. Este resultado indica un buen índice de comprensibilidad en la información presentada al usuario, cumpliendo el valor objetivo.'
);

-- Exhaustividad de la información (EI)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    14,
    'Exhaustividad de la información',
    'EI',
    'Esta métrica tiene como objetivo evaluar la percepción de exhaustividad con la que una plataforma web proporciona información, en términos de completitud y nivel de detalle ofrecido a los usuarios durante la interacción.',
    'Porcentaje %',
    '[20, 100]',
    'Opciones de respuesta para P33: 1 – Muy incompleta 2 – Incompleta 3 - Neutral 4 - Completa 5 - Muy completa. Escala para P34: 1 - Nada exhaustiva 2 – Poco exhaustiva 3 – Neutral 4 – Exhaustiva 5 - Muy exhaustiva. Opciones de respuesta para P35: 1 - Muy insatisfecho 2 - Insatisfecho 3 - Neutral 4 - Satisfecho 5 - Muy satisfecho.',
    'Supongamos que un usuario responde: P33 = 4, P34 = 5, P35 = 4. EI = ((4 + 5 + 4) / 3) * 20 = 80%. Este resultado indica que tiene una buena exhaustividad y claridad en la información suministrada, cumpliendo el valor objetivo.'
);

-- Índice de completitud de documentación (ICD)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    14,
    'Índice de completitud de documentación',
    'ICD',
    'Esta métrica tiene como objetivo evaluar el índice de completitud con el que una plataforma web proporciona información sobre el funcionamiento y las políticas de uso a los usuarios durante su interacción.',
    'Porcentaje %',
    '[0, 100]',
    'NTDC: Número de temas documentados completamente. NTTRD: Número total de temas que requieren documentación.',
    'Supongamos que: 100 temas que requieren documentación, 92 están completamente documentados: ICD = (92 / 100) * 100 = 92%. Este resultado indica un alto índice de completitud de información, superando con el valor objetivo.'
);

-- Satisfacción de control de acceso (SCAP)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    16,
    'Satisfacción de control de acceso',
    'SCAP',
    'Esta métrica tiene como objetivo evaluar la percepción de satisfacción de los usuarios respecto al control que una plataforma web ejerce sobre la información, específicamente en relación con el acceso y la privacidad de los datos personales.',
    'Porcentaje %',
    '[20, 100]',
    'Opciones de respuesta para P36: 1 – Nada seguro 2 – Poco seguro 3 - Neutral 4 - Seguro 5 - Muy seguro. Opciones de respuesta para P37: 1 - Nunca 2 – Raramente 3 – Ocasionalmente 4 – Frecuentemente 5 - Muy frecuentemente. Opciones de respuesta para P38: 1 - Muy difícil 2 - Difícil 3 - Neutral 4 - Fácil 5 - Muy fácil.',
    'Supongamos que un usuario responde: P36 = 4, P37 = 3, P38 = 4. SCAP = ((4 + 3 + 4) / 3) * 20 = 73.33%. Este resultado indica que los mecanismos de control de acceso presentes en la plataforma web son aceptables, superando el valor objetivo.'
);

-- Satisfacción de transparencia de uso de datos (STUD)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    16,
    'Satisfacción de transparencia de uso de datos',
    'STUD',
    'Esta métrica tiene como objetivo evaluar la percepción de la satisfacción de los usuarios respecto a la claridad con la que una plataforma web comunica el uso y tratamiento de los datos personales.',
    'Porcentaje %',
    '[20, 100]',
    'Opciones de respuesta para P39: 1 – Nada claro 2 – Poco claro 3 - Neutral 4 - Claro 5 - Muy claro. Opciones de respuesta para P40: 1 - Muy difícil 2 - Difícil 3 - Neutral 4 - Fácil 5 - Muy fácil. Opciones de respuesta para P41: 1 - Muy insatisfecho 2 - Insatisfecho 3 - Neutral 4 - Satisfecho 5 - Muy satisfecho.',
    'Supongamos que un usuario responde: P1 = 39, P40 = 3, P41 = 5. STUD = ((4 + 3 + 5) / 3) * 20 = 80%. Este resultado indica una buena claridad sobre el uso de los datos de un usuario en la plataforma web, superando el valor objetivo.'
);

-- Satisfacción de verificabilidad de la información (SVI)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    17,
    'Satisfacción de verificabilidad de la información',
    'SVI',
    'Esta métrica tiene como objetivos evaluar la percepción de satisfacción de los usuarios con respecto a la presentación de la información verificada en la plataforma web, particularmente en lo que concierne a las fuentes, referencias, o enlaces proporcionados.',
    'Porcentaje %',
    '[20, 100]',
    'Opciones de respuesta para P42: 1 - Nunca 2 – Casi nunca 3 - Neutral 4 – Frecuentemente 5 - Muy frecuentemente. Opciones de respuesta para P43: 1 – Nada efectiva 2 – Poco efectiva 3 - Neutral 4 - Efectiva 5 - Muy efectiva.',
    'Supongamos que un usuario responde: P42 = 4, P43 = 4. SVI = (4 + 4) * 10 = 80%. Este resultado indica que los mecanismos para verificar la veracidad de la información son buenos, cumpliendo el valor objetivo.'
);

-- Satisfacción de detección de información falsa (SDIF)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    17,
    'Satisfacción de detección de información falsa',
    'SDIF',
    'Esta métrica tiene como objetivo evaluar la percepción de la satisfacción de los usuarios respecto a la capacidad de la plataforma web para detectar y darle manejo a la información falsa, particularmente en relación con la fuentes, referencias o enlaces suministrados.',
    'Porcentaje %',
    '[20, 100]',
    'Opciones de respuesta para P44: 1 - Nunca 2 – Casi nunca 3 - Neutral 4 – Frecuentemente 5 - Muy frecuentemente. Opciones de respuesta para P45: 1 – Nada efectiva 2 – Poco efectiva 3 - Neutral 4 - Efectiva 5 - Muy efectiva.',
    'Supongamos que un usuario responde: P44 = 4, P45 = 4. SDIF = (4 + 4) * 10 = 80%. Este resultado indica una buena percepción de detección y manejo de información falsa en la plataforma web, superando el valor objetivo.'
);

-- Satisfacción del usuario con la verificación (SUV)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    19,
    'Satisfacción del usuario con la verificación',
    'SUV',
    'Esta métrica tiene como objetivo evaluar la percepción de satisfacción respecto a la capacidad de la plataforma web para proporcionar verificación de identidad en el acceso de datos personales de los usuarios.',
    'Porcentaje %',
    '[20, 100]',
    'Opciones de respuesta para P48 y P51: 1 - Muy insatisfecho 2 - Insatisfecho 3 - Neutral 4 - Satisfecho 5 - Muy satisfecho. Opciones de respuesta para P49: 1 – Muy difícil 2 – Difícil 3 – Neutral 4 – Fácil 5 – Muy fácil. Opciones de respuesta para P50: 1 – Nada confiable 2 – Poco confiable 3 – Neutral 4 – Confiable 5 – Muy confiable',
    'Supongamos que: P48 = 4, P49 = 5, P50 = 4 y P51 = 4. SUV = (4 + 5 + 4 + 4) * 5 = 85%. Este resultado indica un buen índice en los procesos de verificación presentes en la plataforma web, superando el valor objetivo.'
);

-- Tasa de validación de campos (TVC)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    19,
    'Tasa de validación de campos',
    'TVC',
    'Esta métrica tiene como objetivo evaluar la tasa de validación en una plataforma web, con respecto a los campos, midiendo la proporción de campos que son validados correctamente antes de ser aceptados por la plataforma durante la interacción con los usuarios.',
    'Porcentaje %',
    '[0, 100]',
    'NCVC: Número de campos validados correctamente. NTCI: Número total de campos ingresados.',
    'Supongamos que: Formulario de 10 campos ingresados, 9 validados correctamente: TVC = (9 / 10) * 100 = 90%. Este resultado indica una alta tasa de validación en los campos diligenciados en un formulario de la página web, cumpliendo con el valor objetivo.'
);

-- Satisfacción del usuario con la trazabilidad (SUT)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    20,
    'Satisfacción del usuario con la trazabilidad',
    'SUT',
    'Esta métrica tiene como objetivo evaluar la percepción de la satisfacción respecto a la capacidad de la plataforma web para proporcionar trazabilidad de los datos e información accesible para los usuarios.',
    'Porcentaje %',
    '[20, 100]',
    'Opciones de respuesta para P52: 1 – Muy difícil 2 – Difícil 3 – Neutral 4 – Fácil 5 – Muy fácil. Opciones de respuesta para P53: 1 - Muy incompleta 2 - Incompleta 3 - Neutral 4 - Completa 5 - Muy completa. Opciones de respuesta para P54: 1 – Nada útil 2 – Poco útil 3 – Neutral 4 – Útil 5 – Muy útil. Opciones de respuesta para P55: 1 - Muy insatisfecho 2 - Insatisfecho 3 - Neutral 4 - Satisfecho 5 - Muy satisfecho.',
    'Supongamos que un usuario responde: P52 = 4, P53 = 3, P54 = 4 y P55 = 5. SUT = (4 + 3 + 4 + 5) * 5 = 80%. Este resultado indica que tiene una buena eficacia en los procesos de trazabilidad de la información, superando el valor objetivo.'
);

-- Índice de cobertura de trazabilidad (ICT)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    20,
    'Índice de cobertura de trazabilidad',
    'ICT',
    'Esta métrica tiene como objetivo evaluar en una plataforma web, en relación con la trazabilidad, midiendo la proporción de datos para los cuales se registra una trazabilidad completa desde su ingreso hasta su estado actual.',
    'Porcentaje %',
    '[0, 100]',
    'NDRCT: Número de datos con registro completo de trazabilidad. NTDPI: Número total de datos en la plataforma.',
    'Supongamos que: De 100 registros de datos en la plataforma, 97 tienen un historial completo de trazabilidad: ICT = (97 / 100) * 100 = 97%. Este resultado indica una alta cobertura para la trazabilidad de los datos, superando con el valor objetivo.'
);

-- Satisfacción del usuario con no repudio (SUNR)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    21,
    'Satisfacción del usuario con no repudio',
    'SUNR',
    'Esta métrica tiene como objetivo evaluar la percepción de la satisfacción del usuario respecto a la capacidad de la plataforma web para implementar mecanismos de no repudio, en relación con la efectividad y fiabilidad de los registros de las acciones realizadas sobre los datos personales e información presentada a los usuarios.',
    'Porcentaje %',
    '[20, 100]',
    'Opciones de respuesta para P56: 1 – Nada confiado 2 – Poco confiado 3 – Neutral 4 – Confiado 5 – Muy confiado. Opciones de respuesta para P57: 1 – Muy difícil 2 – Difícil 3 – Neutral 4 – Fácil 5 – Muy fácil. Opciones de respuesta para P58: 1 – Nada claro 2 – Poco claro 3 – Neutral 4 – Claro 5 – Muy claro. Opciones de respuesta para P59: 1 - Muy insatisfecho 2 - Insatisfecho 3 - Neutral 4 - Satisfecho 5 - Muy satisfecho.',
    'Supongamos que: P56 = 4, P57 = 5, P58 = 4, P59 = 5. SUNR = (4 + 5 + 4 + 5) * 5 = 90%. Este resultado indica alta satisfacción con los mecanismos de no repudio, superando el valor objetivo.'
);

-- Índice de retención de evidencias de no repudio (IRENR)
INSERT INTO metrica (id_caracteristica, nombre, abreviatura, descripcion, unidad, escala, observaciones, ejemplo_utilizacion)
VALUES (
    21,
    'Índice de retención de evidencias de no repudio',
    'IRENR',
    'Esta métrica tiene como objetivo evaluar el índice de retención de evidencias en una plataforma web en relación con el no repudio, midiendo la eficacia con la cual se almacenan las evidencias conforme a los requisitos de tiempo establecidos por las políticas o regulaciones aplicables para la plataforma.',
    'Porcentaje %',
    '[0, 100]',
    'NERC: Numero de evidencias retenidas correctamente. NEDR: Numero de evidencias que deben retenerse.',
    'Supongamos que: De 10,000 evidencias que deben retenerse, 9,999 se retienen correctamente. IRENR = (9,999 / 10,000) * 100 = 99.99%. Este resultado indica una excelente retención de evidencias de no repudio, cumpliendo con el valor objetivo.'
);
