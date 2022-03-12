<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class deportesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('deportes')->insert([
            'id' => '1',
            'titulo' => '¿Lionel Messi al Barcelona? El efusivo pedido de los aficionados del PSG en redes sociales',
            'contenido' => 'El doloroso descalabro que vivió el París Saint Germain desató los comentarios en contra del astro argentino Lionel Messi así como de Neymar, a quienes la afición no los quisiera volver a ver portando los colores del equipo parisino.',
            'autor' => 'MeganNegrete',
            'imagen'=> 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAUWYG7.img?h=493&w=799&m=6&q=60&o=f&l=f&x=307&y=303',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('deportes')->insert([
            'id' => '2',
            'titulo' => 'Real Madrid: Benzema recibió playera conmemorativa tras superar a Di Stéfano',
            'contenido' => 'Florentino Pérez, presidente del Real Madrid, entregó este viernes una camiseta conmemorativa al francés Karim Benzema después de que el pasado miércoles anotara tres goles y superase así a Alfredo Di Stéfano.',
            'autor' => 'EFE',
            'imagen'=> 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAUWk0d.img?h=450&w=799&m=6&q=60&o=f&l=f&x=682&y=189',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('deportes')->insert([
            'id' => '3',
            'titulo' => 'Alexis Vega sobre el América: Para nosotros, mejor que se queden allá abajo',
            'contenido' => 'El Clásico Nacional entre las Chivas y las Águilas del América está a la vuelta de la esquina y Alexis Vega habló sobre el mal momento que viven los azulcremas en el actual torneo.',
            'autor' => 'REDACCIÓN RÉCORD',
            'imagen'=> 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAUWI0Z.img?h=533&w=799&m=6&q=60&o=f&l=f&x=479&y=132',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('deportes')->insert([
            'id' => '4',
            'titulo' => '¡Gran detalle! Bayer Leverkusen usará jersey especial a favor de Ucrania en duelo ante Colonia',
            'contenido' => 'El próximo domingo se disputará en Alemania una edición más del llamado Derbi del Rin, en donde Bayer Leverkusen usará un jersey especial en color crema, del que se donarán sus ganancias a Ucrania.',
            'autor' => 'Editorial Mediotiempo',
            'imagen'=> 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAUWCGu.img?h=799&w=799&m=6&q=60&o=f&l=f',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('deportes')->insert([
            'id' => '5',
            'titulo' => 'Cruz Azul recupera a uno de sus cuatro lesionados para el partido de Pumas en el Clausura 2022',
            'contenido' => 'La carga de trabajo en las últimas semanas, debido a su doble participación, en la Liga MX y en la Liga de Campeones de la Concacaf, ya le pasó factura a Cruz Azul en el inicio de marzo.',
            'autor' => 'KarinaBobadilla',
            'imagen'=> 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAUUxEq.img?h=400&w=600&m=6&q=60&o=f&l=f&x=301&y=71',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('deportes')->insert([
            'id' => '6',
            'titulo' => 'Pese a violencia en Querétaro, la liga de fútbol alista el reinicio del torneo este viernes.',
            'contenido' => 'La décima jornada se pondrá en marcha el viernes en el estadio Victoria donde los Gallos Blancos del Querétaro visitarán a los Rayos del Necaxa.  La décima jornada se pondrá en marcha el viernes en el estadio Victoria.',
            'autor' => 'Redacción Animal Político',
            'imagen'=> 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAUTTID.img?h=533&w=799&m=6&q=60&o=f&l=f',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('deportes')->insert([
            'id' => '7',
            'titulo' => '¡Lo quieren de blanco! Los padres de Mbappé apreciaron el cariño del Bernabéu',
            'contenido' => 'Precisamente en la Casa Blanca, es que la familia de Kylian Mbappé valoró el cariño que los madridistas le dieron a su hijo. Mismo trato que también recibió en el partido de Ida.',
            'autor' => 'Editorial Mediotiempo',
            'imagen'=> 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAUWYX8.img?h=498&w=799&m=6&q=60&o=f&l=f&x=546&y=264',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('deportes')->insert([
            'id' => '8',
            'titulo' => 'Atlas busca brindar una alegría en Juárez',
            'contenido' => 'La Liga Mx se reanuda este viernes para el campeón Atlas que estará visitando a los Bravos de Juárez en la frontera del país, en donde quiere brindar una alegría a sus aficionados que tanto la necesitan en estos momentos.',
            'autor' => 'Alberto Ávalos',
            'imagen'=> 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAUWI9S.img?h=493&w=799&m=6&q=60&o=f&l=f&x=473&y=140',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('deportes')->insert([
            'id' => '9',
            'titulo' => 'Nigel Mansell remata el Williams que usó para llevar a Ayrton Senna',
            'contenido' => 'Los fanáticos de la Fórmula 1 noventosa pudieron apreciar un hecho histórico y "color" en el GP de Silverstone 1991: cuando Nigel Mansell estaba festejando su triunfo observó que Ayrton Senna se había quedado sin combustible.',
            'autor' => ' Juan Pablo Estévez',
            'imagen'=> 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAUW5Wb.img?h=416&w=799&m=6&q=60&u=t&o=f&l=f',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('deportes')->insert([
            'id' => '10',
            'titulo' => 'Rusia redobla batalla legal contra su aislamiento deportivo',
            'contenido' => 'El organismo olímpico nacional de Rusia presentó el viernes una apelación urgente para anular el veto de sus deportistas del Festival Olímpico de la Juventud Europea de Invierno, una medida más de las autoridades rusas en su batalla legal.',
            'autor' => 'LAUSANA, Suiza (AP) ',
            'imagen'=> 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAUWIlV.img?h=534&w=799&m=6&q=60&o=f&l=f',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('deportes')->insert([
            'id' => '11',
            'titulo' => 'Los Minaya: El padre, hombre de béisbol; hijo basquetbolista',
            'contenido' => 'Justin Minaya llevaba el béisbol en la sangre. Con el correr de los años, no obstante, su idolatría por José Reyes dio paso a la idolatría de Kobe Bryant y el básquetbol se le metió en el corazón.',
            'autor' => 'NUEVA YORK (AP)',
            'imagen'=> 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAUWWgG.img?h=533&w=799&m=6&q=60&o=f&l=f',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('deportes')->insert([
            'id' => '12',
            'titulo' => 'AMLO presentará informe de los acontecimientos en La Corregidora',
            'contenido' => 'El presidente Andrés Manuel López Obrador confirmó ayer que a raíz de los hechos violentos del pasado 5 de marzo en el estadio La Corregidora no hay fallecidos, y prometió difundir el jueves próximo un informe de los hechos.',
            'autor' => 'Fabiola Martínez y Roberto Garduño',
            'imagen'=> 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAUWspy.img?h=574&w=799&m=6&q=60&o=f&l=f&x=635&y=243',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('deportes')->insert([
            'id' => '13',
            'titulo' => 'NFL: Enfoque turbio de equipos respecto a la agencia libre',
            'contenido' => 'Pese a que se prevé que las tarifas por los derechos de transmisión de partidos de la NFL se disparen en un futuro próximo, algo que llevaría a un aumento importante en el tope salarial, es probable que el frenesí de la agencia libre.',
            'autor' => 'BARRY WILNER, Associated Press',
            'imagen'=> 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAUWF2z.img?h=534&w=799&m=6&q=60&o=f&l=f',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('deportes')->insert([
            'id' => '14',
            'titulo' => 'Osaka derrota a Stephens en primera ronda de Indian Wells',
            'contenido' => 'La japonesa Naomi Osaka, ex número uno del tenis femenino, debutó este jueves con triunfo en el torneo de Indian Wells al superar en tres sets a la estadunidense Sloane Stephens.',
            'autor' => 'Afp',
            'imagen'=> 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAUUhHQ.img?h=533&w=799&m=6&q=60&o=f&l=f&x=511&y=161',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('deportes')->insert([
            'id' => '15',
            'titulo' => 'El auto de Mercedes es bastante feo, ironiza Verstappen',
            'contenido' => 'El W13, auto de Mercedes, sigue causando polémica en los últimos ensayos de pretemporada de la F1 en el circuito de Sakhir en Bahréin. Al holandés Max Verstappen no sabe si es legal su nuevo diseño, pero dijo de una manera irónica que estaba feo.',
            'autor' => 'excelsior.com.mx',
            'imagen'=> 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAUWFLh.img?h=600&w=799&m=6&q=60&o=f&l=f',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('deportes')->insert([
            'id' => '16',
            'titulo' => '¡Nos vamos al mundial! El Tri Femenil Sub 20 tiene su boleto a Costa Rica',
            'contenido' => 'El Tri Femenil Sub 20 consiguió su pase a la Copa del Mundo Costa Rica 2022 este jueves tras ganar 1-0 la semifinal del Premundial de Concacaf a una de las potencias del futbol: Canadá.',
            'autor' => 'Redacción 24 Horas',
            'imagen'=> 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAUWBbZ.img?h=180&w=270&m=6&q=60&o=f&l=f',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('deportes')->insert([
            'id' => '17',
            'titulo' => 'Tenista ucraniana critica castigo a rusos',
            'contenido' => 'La joven tenista ucraniana Marta Kostyuk arremetió contra la respuesta del mundo del tenis a la invasión rusa de su país, afirmando que los llamamientos a la paz tampoco son suficientes ante la gravedad de la situación.',
            'autor' => 'Afp',
            'imagen'=> 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAUVHzg.img?h=600&w=799&m=6&q=60&o=f&l=f',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('deportes')->insert([
            'id' => '18',
            'titulo' => 'Floyd Mayweather lució un excéntrico look en un juego de la NBA',
            'contenido' => 'Floyd Mayweather sigue dando de qué hablar a pesar de que ya no se dedique al boxeo activamente y ahora se robó los reflectores en un juego de la NBA con un conjunto de vestimenta muy particular.',
            'autor' => 'REDACCIÓN RÉCORD',
            'imagen'=> 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAUX8OL.img?h=1199&w=799&m=6&q=60&o=f&l=f&x=377&y=103',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('deportes')->insert([
            'id' => '19',
            'titulo' => 'Balón de Oro: France Football anuncia cambios para la entrega de su próximo galardón',
            'contenido' => 'Balón de Oro: France Football anuncia cambios para la entrega de su próximo galardón',
            'autor' => 'Publi Sport',
            'imagen'=> 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAUWKao.img?h=533&w=799&m=6&q=60&o=f&l=f',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('deportes')->insert([
            'id' => '20',
            'titulo' => 'Arde la Premier League: ¿Cómo está la tabla de posiciones antes de la Fecha 29?',
            'contenido' => 'Manchester City se mantiene como líder con 28 jornadas disputadas y 69 puntos obtenidos. Un puesto más abajo aparece Liverpool, con seis unidades menos y también un partido pendiente.',
            'autor' => 'AlanAlberdi',
            'imagen'=> 'https://th.bing.com/th/id/R.afb77ee64013b7997ffe8d5c0760ab7d?rik=VliTNoj16lN1lQ&riu=http%3a%2f%2fi.imgur.com%2fxwcUWCO.jpg&ehk=OEchFDxCX2lFYDNKpCcz%2fqaNXOWWaAJZFCwGmZF7aus%3d&risl=&pid=ImgRaw&r=0',
            'created_at' => date('Y-m-d H:i:s'),  
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
