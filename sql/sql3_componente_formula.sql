-- Componentes de la fórmula para Satisfacción con los mecanismos de protección de datos (SMPD)
-- Fórmula: SMPD = (P1 + P2) * 10

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(1, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(1, 'pregunta', 'P1', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(1, 'operador', '+', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(1, 'pregunta', 'P2', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(1, 'parentesis', ')', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(1, 'operador', '*', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(1, 'constante', '10', 7);

-- Componentes de la fórmula para Claridad en políticas de privacidad (CPP)
-- Fórmula: CPP = ((P3 + P4 + P5) / 3) * 20

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(2, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(2, 'parentesis', '(', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(2, 'pregunta', 'P3', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(2, 'operador', '+', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(2, 'pregunta', 'P4', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(2, 'operador', '+', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(2, 'pregunta', 'P5', 7);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(2, 'parentesis', ')', 8);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(2, 'operador', '/', 9);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(2, 'constante', '3', 10);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(2, 'parentesis', ')', 11);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(2, 'operador', '*', 12);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(2, 'constante', '20', 13);

-- Componentes de la fórmula para Satisfacción con las operaciones de exportación de datos (SOED)
-- Fórmula: SOED = ((P6 + P7 + P8) / 3) * 20

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(3, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(3, 'parentesis', '(', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(3, 'pregunta', 'P6', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(3, 'operador', '+', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(3, 'pregunta', 'P7', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(3, 'operador', '+', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(3, 'pregunta', 'P8', 7);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(3, 'parentesis', ')', 8);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(3, 'operador', '/', 9);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(3, 'constante', '3', 10);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(3, 'parentesis', ')', 11);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(3, 'operador', '*', 12);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(3, 'constante', '20', 13);

-- Componentes de la fórmula para Tasa de éxito en la exportación de datos (TEED)
-- Fórmula: TEED = (NEE / NTIE) * 100

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(4, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(4, 'variable', 'NEE', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(4, 'operador', '/', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(4, 'variable', 'NTIE', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(4, 'parentesis', ')', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(4, 'operador', '*', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(4, 'constante', '100', 7);

-- Componentes de la fórmula para Satisfacción con opciones de accesibilidad (SOA)
-- Fórmula: SOA = ((P9 + P10 + P11) / 3) * 20

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(5, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(5, 'parentesis', '(', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(5, 'pregunta', 'P9', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(5, 'operador', '+', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(5, 'pregunta', 'P10', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(5, 'operador', '+', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(5, 'pregunta', 'P11', 7);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(5, 'parentesis', ')', 8);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(5, 'operador', '/', 9);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(5, 'constante', '3', 10);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(5, 'parentesis', ')', 11);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(5, 'operador', '*', 12);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(5, 'constante', '20', 13);

-- Componentes de la fórmula para Compatibilidad con diferentes dispositivos (CDD)
-- Fórmula: CDD = Σ(PCD) /NTDE

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(6, 'funcion', 'Σ', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(6, 'parentesis', '(', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(6, 'variable', 'PCD', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(6, 'parentesis', ')', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(6, 'operador', '/', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(6, 'variable', 'NTDE', 6);

-- Componentes de la fórmula para Experiencia en la consistencia de datos (ECD)
-- Fórmula: ECD = (P12 + P13) * 10

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(7, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(7, 'pregunta', 'P12', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(7, 'operador', '+', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(7, 'pregunta', 'P13', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(7, 'parentesis', ')', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(7, 'operador', '*', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(7, 'constante', '10', 7);

-- Componentes de la fórmula para Facilidad de corrección de datos (FCD)
-- Fórmula: FCD = (P14 + P15) * 10

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(8, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(8, 'pregunta', 'P14', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(8, 'operador', '+', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(8, 'pregunta', 'P15', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(8, 'parentesis', ')', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(8, 'operador', '*', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(8, 'constante', '10', 7);

-- Componentes de la fórmula para Satisfacción de la consistencia de datos (SCD)
-- Fórmula: SCD = ((P16 + P17 + P18) / 3) * 20

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(9, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(9, 'parentesis', '(', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(9, 'pregunta', 'P16', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(9, 'operador', '+', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(9, 'pregunta', 'P17', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(9, 'operador', '+', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(9, 'pregunta', 'P18', 7);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(9, 'parentesis', ')', 8);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(9, 'operador', '/', 9);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(9, 'constante', '3', 10);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(9, 'parentesis', ')', 11);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(9, 'operador', '*', 12);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(9, 'constante', '20', 13);

-- Componentes de la fórmula para Índice de consistencia de datos (ICD)
-- Fórmula: ICD = (NRC / NTRV) * 100

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(10, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(10, 'variable', 'NRC', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(10, 'operador', '/', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(10, 'variable', 'NTRV', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(10, 'parentesis', ')', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(10, 'operador', '*', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(10, 'constante', '100', 7);

-- Componentes de la fórmula para Flexibilidad de configuración de datos (FCD2)
-- Fórmula: FCD = ((P19 + P20 + P21) / 3) * 20

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(11, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(11, 'parentesis', '(', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(11, 'pregunta', 'P19', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(11, 'operador', '+', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(11, 'pregunta', 'P20', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(11, 'operador', '+', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(11, 'pregunta', 'P21', 7);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(11, 'parentesis', ')', 8);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(11, 'operador', '/', 9);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(11, 'constante', '3', 10);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(11, 'parentesis', ')', 11);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(11, 'operador', '*', 12);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(11, 'constante', '20', 13);

-- Componentes de la fórmula para Índice de personalización de interfaces de usuario (IPIU)
-- Fórmula: IPIU = (NEIP / NTEI) * 100

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(12, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(12, 'variable', 'NEIP', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(12, 'operador', '/', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(12, 'variable', 'NTEI', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(12, 'parentesis', ')', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(12, 'operador', '*', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(12, 'constante', '100', 7);

-- Componentes de la fórmula para Satisfacción del usuario con la claridad visual (SUCV)
-- Fórmula: SUCV = ((P22 + P23 + P24) / 3) * 20

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(13, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(13, 'parentesis', '(', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(13, 'pregunta', 'P22', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(13, 'operador', '+', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(13, 'pregunta', 'P23', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(13, 'operador', '+', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(13, 'pregunta', 'P24', 7);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(13, 'parentesis', ')', 8);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(13, 'operador', '/', 9);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(13, 'constante', '3', 10);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(13, 'parentesis', ')', 11);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(13, 'operador', '*', 12);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(13, 'constante', '20', 13);

-- Componentes de la fórmula para Tasa de reconocimiento de elementos (TRE)
-- Fórmula: TRE = (NECI / NTEE) * 100

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(14, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(14, 'variable', 'NECI', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(14, 'operador', '/', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(14, 'variable', 'NTEE', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(14, 'parentesis', ')', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(14, 'operador', '*', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(14, 'constante', '100', 7);

-- Componentes de la fórmula para Satisfacción del usuario con la consistencia (SUC)
-- Fórmula: SUC = ((P24 + P25 + P26) / 3) * 20

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(15, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(15, 'parentesis', '(', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(15, 'pregunta', 'P24', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(15, 'operador', '+', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(15, 'pregunta', 'P25', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(15, 'operador', '+', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(15, 'pregunta', 'P26', 7);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(15, 'parentesis', ')', 8);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(15, 'operador', '/', 9);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(15, 'constante', '3', 10);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(15, 'parentesis', ')', 11);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(15, 'operador', '*', 12);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(15, 'constante', '20', 13);

-- Componentes de la fórmula para Satisfacción de consistencia visual (SCV)
-- Fórmula: SCV = ((P27 + P28 + P29) / 3) * 20

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(16, 'parentesis', '(',1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(16, 'parentesis', '(', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(16, 'pregunta', 'P27', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(16, 'operador', '+', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(16, 'pregunta', 'P28', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(16, 'operador', '+', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(16, 'pregunta', 'P29', 7);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(16, 'parentesis', ')', 8);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(16, 'operador', '/', 9);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(16, 'constante', '3', 10);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(16, 'parentesis', ')', 11);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(16, 'operador', '*', 12);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(16, 'constante', '20', 13);

-- Componentes de la fórmula para Satisfacción con la actualidad de la información (SUAI)
-- Fórmula: SUAI = ((P30 + P31 + P32) / 3) * 20

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(17, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(17, 'parentesis', '(', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(17, 'pregunta', 'P30', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(17, 'operador', '+', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(17, 'pregunta', 'P31', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(17, 'operador', '+', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(17, 'pregunta', 'P32', 7);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(17, 'parentesis', ')', 8);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(17, 'operador', '/', 9);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(17, 'constante', '3', 10);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(17, 'parentesis', ')', 11);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(17, 'operador', '*', 12);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(17, 'constante', '20', 13);

-- Componentes de la fórmula para Tasa de Eficacia en notificación de actualizaciones (TENA)
-- Fórmula: TENA = (NUCRN / NTUEN) * 100

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(18, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(18, 'variable', 'NUCRN', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(18, 'operador', '/', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(18, 'variable', 'NTUEN', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(18, 'parentesis', ')', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(18, 'operador', '*', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(18, 'constante', '100', 7);

-- Componentes de la fórmula Índice de Calidad de Longitud de Frase (ICLF)
-- Fórmula: ICLF = 100 - min(100,(5 * |(NTP / NT) - 18 |))

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'constante', '100', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'operador', '-', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'operador', 'min', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'parentesis', '(', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'constante', '100', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'operador', ',', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'parentesis', '(', 7);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'constante', '5', 8);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'operador', '*', 9);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'absoluto_apertura', '|', 10);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'parentesis', '(', 11);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'variable', 'NTP', 12);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'operador', '/', 13);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'variable', 'NT', 14);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'parentesis', ')', 15);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'operador', '-', 16);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'constante', '18', 17);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'absoluto_cierre', '|', 18);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'parentesis', ')', 19);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(19, 'parentesis', ')', 20);

-- Componentes de la fórmula para Índice de simplicidad léxica (ISL)
-- Fórmula: ISL = (NPC / NTP) * 100

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(20, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(20, 'variable', 'NPC', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(20, 'operador', '/', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(20, 'variable', 'NTP', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(20, 'parentesis', ')', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(20, 'operador', '*', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(20, 'constante', '100', 7);

-- Componentes de la fórmula para Exhaustividad de la información (EI)
-- Fórmula: EI = ((P33 + P34 + P35) / 3) * 20

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES 
(21, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(21, 'parentesis', '(', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(21, 'pregunta', 'P33', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(21, 'operador', '+', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(21, 'pregunta', 'P34', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(21, 'operador', '+', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(21, 'pregunta', 'P35', 7);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(21, 'parentesis', ')', 8);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(21, 'operador', '/', 9);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(21, 'constante', '3', 10);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(21, 'parentesis', ')', 11);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(21, 'operador', '*', 12);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(21, 'constante', '20', 13);

-- Componentes de la fórmula para Índice de completitud de documentación (ICD)
-- Fórmula: ICD = (NTDC / NTTRD) * 100

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(22, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(22, 'variable', 'NTDC', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(22, 'operador', '/', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(22, 'variable', 'NTTRD', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(22, 'parentesis', ')', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(22, 'operador', '*', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(22, 'constante', '100', 7);

-- Componentes de la fórmula para Satisfacción de control de acceso (SCAP)
-- Fórmula: SCAP = ((P36 + P37 + P38) / 3) * 20

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(23, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(23, 'parentesis', '(', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(23, 'pregunta', 'P36', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(23, 'operador', '+', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(23, 'pregunta', 'P37', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(23, 'operador', '+', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(23, 'pregunta', 'P38', 7);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(23, 'parentesis', ')', 8);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(23, 'operador', '/', 9);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(23, 'constante', '3', 10);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(23, 'parentesis', ')', 11);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(23, 'operador', '*', 12);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(23, 'constante', '20', 13);

-- Componentes de la fórmula para Satisfacción de transparencia de uso de datos (STUD)
-- Fórmula: STUD = ((P39 + P40 + P41) / 3) * 20

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(24, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(24, 'parentesis', '(', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(24, 'pregunta', 'P39', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(24, 'operador', '+', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(24, 'pregunta', 'P40', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(24, 'operador', '+', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(24, 'pregunta', 'P41', 7);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(24, 'parentesis', ')', 8);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(24, 'operador', '/', 9);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(24, 'constante', '3', 10);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(24, 'parentesis', ')', 11);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(24, 'operador', '*', 12);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(24, 'constante', '20', 13);

-- Componentes de la fórmula para Satisfacción de verificabilidad de la información (SVI)
-- Fórmula: SVI = (P42 + P43) * 10

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(25, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(25, 'pregunta', 'P42', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(25, 'operador', '+', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(25, 'pregunta', 'P43', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(25, 'parentesis', ')', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(25, 'operador', '*', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(25, 'constante', '10', 7);

-- Componentes de la fórmula para Satisfacción de detección de información falsa (SDIF)
-- Fórmula: SDIF = (P44 + P45) * 10

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(26, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(26, 'pregunta', 'P44', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(26, 'operador', '+', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(26, 'pregunta', 'P45', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(26, 'parentesis', ')', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(26, 'operador', '*', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(26, 'constante', '10', 7);

-- Componentes de la fórmula para Satisfacción del usuario con la verificación (SUV)
-- Fórmula: SUV = (P46 + P49 + P50 + P51) * 5

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(27, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(27, 'pregunta', 'P46', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(27, 'operador', '+', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(27, 'pregunta', 'P49', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(27, 'operador', '+', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(27, 'pregunta', 'P50', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(27, 'operador', '+', 7);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(27, 'pregunta', 'P51', 8);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(27, 'parentesis', ')', 9);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(27, 'operador', '*', 10);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(27, 'constante', '5', 11);

-- Componentes de la fórmula para Tasa de validación de campos (TVC)
-- Fórmula: TVC = (NCVC / NTCI) * 100

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(28, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(28, 'variable', 'NCVC', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(28, 'operador', '/', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(28, 'variable', 'NTCI', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(28, 'parentesis', ')', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(28, 'operador', '*', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(28, 'constante', '100', 7);

-- Componentes de la fórmula para Satisfacción del usuario con la trazabilidad (SUT)
-- Fórmula: SUT = (P52 + P53 + P54 + P55) * 5

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(29, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(29, 'pregunta', 'P52', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(29, 'operador', '+', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(29, 'pregunta', 'P53', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(29, 'operador', '+', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(29, 'pregunta', 'P54', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(29, 'operador', '+', 7);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(29, 'pregunta', 'P55', 8);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(29, 'parentesis', ')', 9);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(29, 'operador', '*', 10);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(29, 'constante', '5', 11);

-- Componentes de la fórmula para Índice de cobertura de trazabilidad (ICT)
-- Fórmula: ICT = (NDRCT/NTDPI) * 100

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(30, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(30, 'variable', 'NDRCT', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(30, 'operador', '/', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(30, 'variable', 'NTDPI', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(30, 'parentesis', ')', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(30, 'operador', '*', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(30, 'constante', '100', 7);

-- Componentes de la fórmula para Satisfacción del usuario con no repudio (SUNR)
-- Fórmula: SUNR = (P56 + P57 + P58 + P59) * 5

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(31, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(31, 'pregunta', 'P56', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(31, 'operador', '+', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(31, 'pregunta', 'P57', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(31, 'operador', '+', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(31, 'pregunta', 'P58', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(31, 'operador', '+', 7);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(31, 'pregunta', 'P59', 8);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(31, 'parentesis', ')', 9);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(31, 'operador', '*', 10);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(31, 'constante', '5', 11);

-- Componentes de la fórmula para Índice de retención de evidencias de no repudio (IRENR)
-- Fórmula: IRENR = (NERC / NEDR) * 100

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(32, 'parentesis', '(', 1);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(32, 'variable', 'NERC', 2);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(32, 'operador', '/', 3);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(32, 'variable', 'NEDR', 4);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(32, 'parentesis', ')', 5);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(32, 'operador', '*', 6);

INSERT INTO componente_formula (id_metrica, tipo, valor, orden) VALUES
(32, 'constante', '100', 7);
