select id,id_caracteristica_principal,nombre from caracteristica;
/*Disponibilidad*/
INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (null,'disponibilidad','La característica en cuestión, según la norma ISO 25000, se refiere a la capacidad de una plataforma web de garantizar que los usuarios puedan obtener y utilizar sus datos en el momento y lugar que lo necesiten, con la disponibilidad y accesibilidad como objetivos principales. En ese sentido, la disponibilidad se preocupa por la facilidad con la que los usuarios pueden acceder a la información que proporcionaron a la plataforma web durante su interacción con ella, siempre y cuando sea accesible. Debido a esto, es una característica que motiva el mejoramiento de la capacidad de respuesta de las plataformas web ante problemas e interrupciones relacionadas con el acceso a los datos para que estos sean correctos, precisos y no generen confusión.'); 

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (1,'accesibilidad','Esta característica, conforme a la norma ISO 25000, alude a la capacidad de una plataforma web para posibilitar que los usuarios con discapacidades visuales, auditivas o motoras puedan acceder, interactuar y comprender de manera sencilla y efectiva las funcionalidades de dicha plataforma enfocadas en la gestión de datos. De esta forma, esta característica favorece el acceso a la información proporcionada por las plataformas web. Sin embargo, es crucial que la información sea organizada de manera estructurada, clara y concisa, y los procesos de búsqueda tengan un nivel aceptable de usabilidad. Adicionalmente, la accesibilidad permite evaluar la capacidad de una plataforma web para adaptarse a diferentes tipos de dispositivos, así como la disponibilidad de una documentación completa que explique el acceso a los datos, acompañada de un soporte técnico que aborde las necesidades de accesibilidad.'); 

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (1,'privacidad','Esta característica alude a la capacidad de una plataforma web para prevenir la divulgación no autorizada de los datos de los usuarios que interactúan en ella. Además, la privacidad en una plataforma web debe asegurar que el usuario otorgue su consentimiento para la recopilación de datos y que se explique claramente el proceso de dicha recopilación. Asimismo, la privacidad de los datos en una plataforma web resguarda la información sensible de los usuarios contra accesos no autorizados y facilita la clasificación de la información en pública y privada. Por último, en se explica que la privacidad también puede mantenerse en la divulgación de la información de manera ligeramente distorsionada o encriptada, con el propósito de ocultar el contenido real de los usuarios.'); 

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (1,'portabilidad','En términos generales, la portabilidad de datos es una característica que permite medir la calidad y relevancia de la información que comparte una plataforma web con otras plataformas. No obstante, es aplicable exclusivamente a los datos proporcionados directamente por el interesado, excluyendo los datos inferidos o derivados de su interacción con dicha plataforma. Por ejemplo, los datos sobre el historial de búsqueda de un consumidor entran dentro del ámbito de la portabilidad de datos, mientras que los datos inferidos para personalizar productos o hacer recomendaciones quedan fuera de este alcance. Asimismo, es importante tener en cuenta que la portabilidad de datos es una característica que puede influir en el comportamiento de los usuarios; por esta razón, se relaciona íntimamente con la privacidad para mantener la integridad de los datos.'); 

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (1,'integridad','Esta característica hace referencia a la capacidad de una plataforma web para salvaguardar la precisión, confiabilidad y coherencia de la información de los usuarios a lo largo de todo el ciclo de vida de la gestión de datos. De esta forma, según el Instituto de Ingenieros Eléctricos y Electrónicos (IEEE) y la Organización Internacional de Normalización (ISO) en su normativa conjunta ISO/IEC 25010, esta característica implica que una plataforma web debe estar equipada con todas las herramientas pertinentes para prevenir accesos o modificaciones no autorizados a los datos, garantizando así que la integridad de la información procesada no sea comprometida y que los datos mismos sean fiables. Además, para asegurar la integridad de los datos, es imperativo adherirse a un conjunto de reglas y restricciones que aseguren la validez, consistencia, exactitud y completitud de los datos almacenados. Estas comprenden, entre otras, reglas para asegurar la unicidad y consistencia de la información, así como reglas para determinar si los datos almacenados están relacionados realmente con el contexto del usuario.'); 

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (1,'confiabilidad','La fiabilidad es una característica esencial de las plataformas web, que se define como la capacidad de funcionar y mantenerse dentro de parámetros específicos durante un período determinado. Esta cualidad implica que la información proporcionada debe ser consistente, precisa y conforme a la realidad.En el contexto de la fiabilidad, se evalúa la consistencia y exactitud de la información suministrada. Este concepto está íntimamente ligado a la precisión y coherencia de los datos en relación con el proceso real del sistema.Además, la fiabilidad abarca la completitud de los datos, lo cual aporta valor significativo en áreas como el cumplimiento normativo y la calidad de la información. En esencia, se refiere al grado de confianza que se puede depositar en los datos para que proporcionen una representación precisa y consistente de una medición específica a lo largo del tiempo.Esta característica es fundamental para garantizar que los usuarios puedan confiar en la plataforma y en la información que esta proporciona, asegurando así su utilidad y eficacia en diversos contextos operativos.'); 


/*Usabilidad*/

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (null,'usabilidad','Esta característica hace referencia a la capacidad de una plataforma web para definir el grado en que los datos puedan ser empleados por usuarios específicos para alcanzar sus objetivos de manera eficaz y satisfactoria. Para esto, la plataforma web debe ofrecer funcionalidades fáciles de utilizar y proporcionar una retroalimentación para el usuario. De esta forma, la usabilidad implica que la plataforma web sea capaz de proporcionar información eficaz y fácil de usar para los usuarios sobre todo el proceso de gestión de datos.'); 

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (7,'adaptabilidad','Esta característica se refiere a la capacidad de una plataforma web para ajustarse y responder eficazmente a diversos requisitos y entornos de datos. Esto conlleva la habilidad de modificar, reconfigurar o combinar las estructuras y procesos de almacenamiento, procesamiento y recuperación de datos con el fin de satisfacer las necesidades cambiantes de las aplicaciones o los contextos donde se utilizan los datos. La información puede recibirse o presentarse en diferentes modelos de datos con características distintas, tales como bases de datos, archivos descriptivos, multimedia, etc. Un sistema adaptable en la gestión de datos estaría capacitado para reorganizar su estructura de datos, cambiar el formato de los mismos o ajustar los algoritmos de procesamiento a fin de adaptarse a nuevas fuentes, cambios en los requisitos de rendimiento o demandas de escalabilidad.'); 

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (7,'legibilidad','La característica en discusión se refiere a la habilidad de una plataforma web para presentar contenido de manera comprensible, asegurando que la información sea fácilmente entendible para el usuario al leerla. La legibilidad en las plataformas web está relacionada con la facilidad con la que se pueden comprender textos, frases o palabras, dependiendo del estilo de escritura específico para un grupo particular de personas. Además, la legibilidad también tiene que ver con la facilidad con la que las personas pueden ver, distinguir y reconocer archivos y palabras en una plataforma web. Por lo tanto, la legibilidad se determina principalmente por el diseño visual de la plataforma web, evaluando la complejidad de las palabras y la estructura del contenido proporcionado. En resumen, la legibilidad es una característica crucial que mejora la accesibilidad y la experiencia del usuario en las plataformas web.'); 

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (7,'consistencia','La característica en cuestión se refiere a la capacidad de una plataforma web para mantener una coherencia lógica en la información y el contenido que proporciona, asegurando que los usuarios estén satisfechos con lo que la plataforma ofrece. La consistencia en las plataformas web está estrechamente relacionada con la calidad de los datos contenidos en ellas. Estos datos deben presentarse de manera uniforme y precisa para los usuarios. Además, se garantiza que la información permanezca consistente y se ajuste a las reglas y estándares establecidos durante el ciclo de vida de la plataforma web. En resumen, la consistencia es una característica esencial que contribuye a la confiabilidad y la eficacia de una plataforma web.'); 

/*Informatividad*/

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (null,'informatividad','Esta característica se refiere a la habilidad de una plataforma web para proveer o transmitir información. Esta se define como la capacidad de difundir información de alta calidad, contribuyendo a la comprensión de la excelencia de cualquier información proporcionada.  En el ámbito de la gestión de datos, la informatividad se centra en ofrecer información de calidad acerca de cómo y para qué se utilizará la información del usuario. Además, la informatividad está vinculada con la cantidad de información proporcionada que puede ser percibida por el usuario en el proceso real del sistema, evaluando la consistencia, corrección y actualización de dicha información. En esencia, la informatividad se refiere a la facilidad con la que se difunde la información, garantizando que la evidencia sea accesible y comprensible de manera eficiente.');

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (11,'actualidad','La actualidad se refiere a la capacidad de una plataforma web de mantenerse al día o pertenecer al tiempo presente [6]. En el ámbito de la gestión de datos, esto implica la actualización de la evidencia o el lapso de tiempo entre un evento en el sistema y la disponibilidad de la información correspondiente. En otras palabras, se evalúa la frescura de la información en relación con el proceso que involucra los datos proporcionados en el sistema. Además, es muy importante de establecer una unidad de tiempo adecuada para la actualización de los datos; Este aspecto es crucial, ya que la elección de esta unidad de tiempo depende en gran medida de la naturaleza del sistema y del tipo de información que maneja. Por lo tanto, debe ser seleccionada con cuidado en cada caso, garantizando que la información esté siempre actualizada y sea relevante para el usuario.');

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (11,'concision','La concisión se refiere a la habilidad de una plataforma web de transmitir información de manera efectiva en pocas palabras. Esta característica mejora la comunicación al eliminar redundancias y palabras innecesarias, evaluando la claridad y simplicidad de la información y presentando los detalles de manera directa y fácil de entender. Además, se destaca que el uso de palabras comunes facilita la comprensión de una frase por parte de todos los usuarios. Se reconoce que la concisión no se limita a oraciones cortas, sino que también abarca el análisis semántico y la elección precisa de palabras para transmitir la información de manera efectiva sin perder su significado. En resumen, la concisión se trata de comunicar de manera clara y precisa, mejorando la eficiencia y la comprensión de la información.');

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (11,'completitud','La característica en cuestión se refiere a la completitud de una plataforma web, implicando que posee todos los elementos necesarios para su funcionamiento óptimo. Esta completitud se extiende a la gestión de datos, donde la información proporcionada debe ser lo suficientemente exhaustiva para facilitar la identificación del tratamiento que se aplicará a los datos.La completitud se mide por el grado en que los datos están presentes, y son lo suficientemente amplios y profundos para cumplir con la tarea específica en cuestión. En resumen, una plataforma web completa es aquella que no sólo tiene todos los elementos necesarios para su funcionamiento, sino que también gestiona los datos de manera transparente y completa.');

/*Seguridad*/

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (null,'seguridad','Esta característica, según la norma ISO 25000, se refiere a la capacidad de una plataforma para proteger los datos contra el acceso, lectura o modificación por parte de personal no autorizado, garantizando así la autenticidad de los datos proporcionados a los usuarios. La seguridad se define como el nivel de protección que se ofrece a los datos contenidos en la plataforma web. El propósito principal de la seguridad es proteger la información digital contra el acceso no autorizado, la alteración o el robo durante todo el ciclo de vida de la plataforma web, asegurando la confidencialidad de los datos. Este concepto engloba todos los aspectos relacionados con la seguridad de la información, subrayando la importancia de mantener la integridad y la privacidad de los datos en todas las etapas de su gestión.');

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (15,'confidencialidad','Esta característica, de acuerdo con la norma ISO 25000, se refiere a la capacidad de la plataforma para proteger los datos contra el acceso no autorizado, ya sea accidental o intencional. La confidencialidad se define por la forma en que se protege la información personal durante el intercambio de datos, con el objetivo de prevenir la divulgación indebida de dicha información a terceros. En La confidencialidad tambien se describe como la capacidad de una plataforma web para garantizar que solo los usuarios autorizados puedan acceder, modificar o compartir la información protegida proporcionada por la plataforma. En resumen, la confidencialidad en una plataforma web se refiere a la protección de la información personal contra el acceso no autorizado, garantizando que solo los usuarios autorizados puedan interactuar con los datos protegidos.');

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (15,'autenticidad','Según la norma ISO 25000, esta característica se refiere a la habilidad de una plataforma web para exhibir consistencia en la información que proporciona. La autenticidad es un concepto que denota el nivel en el cual un usuario puede percibir la información de una plataforma como veraz. La autenticidad, por lo tanto, es un criterio que permite determinar si los datos o la información proporcionada corresponden a lo que se afirma, ofreciendo así un medio para corroborar la veracidad de la información.');

/*Auditabilidad*/

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (null,'auditabilidad','Esta característica se refiere a la habilidad de una plataforma web para ejercer control sobre el acceso, permitiendo a usuarios específicos conocer y verificar quién ha tenido acceso, ha utilizado o modificado la información y los datos en dicha plataforma. La auditabilidad es la capacidad de inspeccionar minuciosamente y realizar una trazabilidad precisa con el objetivo de verificar la información proporcionada por una plataforma web. Adicionalmente, la auditabilidad implica la evaluación de la calidad de los datos a lo largo del ciclo de vida de una plataforma web, con el fin de garantizar su precisión y eficacia para un uso específico. Esto se logra midiendo el rendimiento de los datos o de la información para identificar problemas, lo que resulta en una mejora en la calidad de la información.');

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (18,'verificabilidad','Esta característica se refiere a la capacidad de una plataforma web para proporcionar mecanismos que aseguren la precisión, integridad y fiabilidad de la información gestionada en línea. Dichos mecanismos comprenden un conjunto de técnicas y funcionalidades que permiten validar la autenticidad y exactitud de los datos introducidos por los usuarios. Esto puede incluir, por ejemplo, la validación de campos para verificar si los datos ingresados cumplen con los criterios establecidos por la organización, o la verificación de identidad a través del envío de códigos por SMS o correo electrónico. De este modo, la verificabilidad se convierte en una característica esencial para asegurar que los datos introducidos en una plataforma web sean precisos, fiables y coherentes, lo que mejora la calidad de la información y fortalece la confianza de los usuarios en la plataforma.');

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (18,'trazabilidad','Esta característica se refiere a la capacidad que ofrece una plataforma web para rastrear el origen, manipulación y flujo de los datos a lo largo de su ciclo de vida en la plataforma. Esta característica implica el registro de cada interacción con los datos, desde su ingreso inicial hasta su procesamiento y almacenamiento final. Esto puede lograrse mediante diversas técnicas, como los registros de auditoría, que documentan todas las actividades relacionadas con los datos (por ejemplo, quién accedió a ellos, cuándo y con qué propósito). Adicionalmente, el marcaje de datos, a través de etiquetas o metadatos, puede ser utilizado para identificar la procedencia y el contexto de los datos en cada etapa de su procesamiento. De esta manera, una plataforma web puede ofrecer una trazabilidad completa de los datos, lo que mejora la transparencia en la gestión de la información y facilita la detección y solución de problemas relacionados con la integridad y seguridad de los datos. Esta capacidad de trazabilidad es esencial para garantizar la confiabilidad y la responsabilidad en el manejo de los datos.');

INSERT INTO caracteristica(id_caracteristica_principal,nombre,descripcion) 
VALUES (18,'no repudio','Según la norma ISO 25000, esta característica se refiere a la capacidad de una plataforma web para demostrar de manera irrefutable que ciertas acciones fueron ejecutadas por el usuario. Esto implica que cuando un usuario realiza acciones específicas, como enviar información, realizar transacciones o dar su consentimiento, la plataforma debe tener la capacidad de verificar y demostrar que dichas acciones fueron efectivamente realizadas por el usuario en cuestión. Esta capacidad es esencial para garantizar la responsabilidad del usuario y la integridad de las acciones realizadas en la plataforma. También contribuye a la seguridad y la confiabilidad de la plataforma, ya que permite la detección y prevención de actividades no autorizadas o fraudulentas. En resumen, esta característica mejora la confianza del usuario en la plataforma y su disposición para interactuar con ella.');



