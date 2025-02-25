<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaracteristicaSeeder extends Seeder
{
    // public function run():void
    // {
    //     $caracteristicasPrincipales = [
    //         [
    //             'id_caracteristica_principal' => null,
    //             'nombre' => 'disponibilidad',
    //             'descripcion' => 'La característica en cuestión, según la norma ISO 25000, se refiere a la capacidad de una plataforma web de garantizar que los usuarios puedan obtener y utilizar sus datos en el momento y lugar que lo necesiten, con la disponibilidad y accesibilidad como objetivos principales. En ese sentido, la disponibilidad se preocupa por la facilidad con la que los usuarios pueden acceder a la información que proporcionaron a la plataforma web durante su interacción con ella, siempre y cuando sea accesible. Debido a esto, es una característica que motiva el mejoramiento de la capacidad de respuesta de las plataformas web ante problemas e interrupciones relacionadas con el acceso a los datos para que estos sean correctos, precisos y no generen confusión.'
    //         ],
    //         [
    //             'id_caracteristica_principal' => null,
    //             'nombre' => 'usabilidad',
    //             'descripcion' => 'Esta característica hace referencia a la capacidad de una plataforma web para definir el grado en que los datos puedan ser empleados por usuarios específicos para alcanzar sus objetivos de manera eficaz y satisfactoria. Para esto, la plataforma web debe ofrecer funcionalidades fáciles de utilizar y proporcionar una retroalimentación para el usuario. De esta forma, la usabilidad implica que la plataforma web sea capaz de proporcionar información eficaz y fácil de usar para los usuarios sobre todo el proceso de gestión de datos.'
    //         ],
    //         [
    //             'id_caracteristica_principal' => null,
    //             'nombre' => 'informatividad',
    //             'descripcion' => 'Esta característica se refiere a la habilidad de una plataforma web para proveer o transmitir información. Esta se define como la capacidad de difundir información de alta calidad, contribuyendo a la comprensión de la excelencia de cualquier información proporcionada.  En el ámbito de la gestión de datos, la informatividad se centra en ofrecer información de calidad acerca de cómo y para qué se utilizará la información del usuario. Además, la informatividad está vinculada con la cantidad de información proporcionada que puede ser percibida por el usuario en el proceso real del sistema, evaluando la consistencia, corrección y actualización de dicha información. En esencia, la informatividad se refiere a la facilidad con la que se difunde la información, garantizando que la evidencia sea accesible y comprensible de manera eficiente.'
    //         ],
    //         [
    //             'id_caracteristica_principal' => null,
    //             'nombre' => 'seguridad',
    //             'descripcion' => 'Esta característica, según la norma ISO 25000, se refiere a la capacidad de una plataforma para proteger los datos contra el acceso, lectura o modificación por parte de personal no autorizado, garantizando así la autenticidad de los datos proporcionados a los usuarios. La seguridad se define como el nivel de protección que se ofrece a los datos contenidos en la plataforma web. El propósito principal de la seguridad es proteger la información digital contra el acceso no autorizado, la alteración o el robo durante todo el ciclo de vida de la plataforma web, asegurando la confidencialidad de los datos. Este concepto engloba todos los aspectos relacionados con la seguridad de la información, subrayando la importancia de mantener la integridad y la privacidad de los datos en todas las etapas de su gestión.'
    //         ],
    //         [
    //             'id_caracteristica_principal' => null,
    //             'nombre' => 'auditabilidad',
    //             'descripcion' => 'Esta característica se refiere a la habilidad de una plataforma web para ejercer control sobre el acceso, permitiendo a usuarios específicos conocer y verificar quién ha tenido acceso, ha utilizado o modificado la información y los datos en dicha plataforma. La auditabilidad es la capacidad de inspeccionar minuciosamente y realizar una trazabilidad precisa con el objetivo de verificar la información proporcionada por una plataforma web. Adicionalmente, la auditabilidad implica la evaluación de la calidad de los datos a lo largo del ciclo de vida de una plataforma web, con el fin de garantizar su precisión y eficacia para un uso específico. Esto se logra midiendo el rendimiento de los datos o de la información para identificar problemas, lo que resulta en una mejora en la calidad de la información.'
    //         ],
    //     ];
    //     foreach($caracteristicasPrincipales as $caracteristica){
    //         DB::table('caracteristica')->insert($caracteristica);
    //     }
    // }

    public function run(){
        $jsonCaracteristicas = database_path('seeders/data/caracteristicas.json');
        $caracteristicas = json_decode(file_get_contents($jsonCaracteristicas),true);

        foreach($caracteristicas as $caracteristica){
            DB::table('caracteristica')->insert($caracteristica);
        }
    }
}