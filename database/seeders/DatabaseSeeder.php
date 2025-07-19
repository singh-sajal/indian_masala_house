<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(10)->create();
        // $admin = Admin::create([
        //     'uuid'=> Str::uuid(),
        //     'name' => 'Admin',
        //     'email' => 'admin@admin.com',
        //     'password' => bcrypt('Admin@123'),
        //     'remember_token' => Str::random(10),
        // ]);

        // $categories = [
        //     'Shorba Soups',
        //     'Delhi Chaat',
        //     'Pakoras Fritters',
        //     'Indian Masala House',
        //     'Sigdi ki Karamat / Tandoori Specialties',
        //     'Salads',
        //     'Chule ki Soghat | MAINS',
        //     'Chule ki Soghat | Regional Specialties',
        //     'Hot \'n Spicy',
        //     'Duck',
        //     'Seafood',
        //     'Barnemeny',
        //     'Traditional | House Biryanis',
        //     'Breads | Roti & Naan',
        //     'Combos & Veggies',
        //     'Combos & Non-Veg',
        //     'Vegetarian',
        //     'Pickles & Chutny',
        //     '100% Vegan',
        //     'Extras',
        //     'Desserts',
        //     'Drinks'
        // ];


        // foreach ($categories as $index => $name) {
        //     DB::table('categories')->insert([
        //         'uuid' => Str::uuid(),
        //         'name' => $name,
        //         'subtitle' => null,
        //         'description' => null,
        //         'avatar' => null,
        //         'is_featured' => false,
        //         'status' => true,
        //         'serial_no' => str_pad($index + 1, 2, '0', STR_PAD_LEFT),
        //         'data' => null,
        //         'attribute' => null,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }


        $menuData = [
            'Shorba Soups' => [
                ['name' => 'Yakhni Shorba Chicken', 'full_price' => '99', 'allergens' => 'mi', 'description' => 'kyllingsuppe fersk koriander og løk.'],
                ['name' => 'Mulling Wany', 'full_price' => '99', 'allergens' => 'mi', 'description' => 'Krudret linsesuppe med kylling linser, fersk koriander og løk.'],
                ['name' => 'Blackpepper Soup', 'full_price' => '109', 'allergens' => 'mi', 'description' => 'Lammesuppe fersk koriander og løk'],
            ],
            'Delhi Chaat' => [
                ['name' => 'Lamb Keema Samosa Chaat', 'full_price' => '119', 'allergens' => 'vegan optional', 'description' => 'Krisp buƩerdeig fylt med Keema, erter, koriander og krydder. Servert med Kikerter or toppet Minte, tamarind chutny.'],
                ['name' => 'Delhi Samosa Channa Chaat (Chefs choice)', 'full_price' => '99', 'allergens' => 'vegan optional', 'description' => 'Krisp buƩerdeig fylt med poteter, erter, koriander og krydder. Servert med Kikerter or toppet med granateple, Løk, koriander og tamarind chutny.'],
                ['name' => 'Chicken Chaat', 'full_price' => '109', 'allergens' => 'mi(k)', 'description' => 'En tradisjonell velsmakende snack solt av gateselgere I India. Biter av kyilingbryst er marinert I en blandende av indisk krydder og sitronsaŌ, dereƩer toppet med en forfriskende muntetyoghurtasus, tamarindchutney .'],
            ],
            // 'Pakoras Fritters' => [
            //     ['name' => 'Murgh Pakora', 'full_price' => '99', 'allergens' => 'e', 'description' => ''],
            //     ['name' => 'Crispy Honey Chicken', 'full_price' => '109', 'allergens' => 'gl', 'description' => ''],
            //     ['name' => 'Prawn Namkeen', 'full_price' => '109', 'allergens' => 'cr', 'description' => ''],
            //     ['name' => 'Prawn Kurkure', 'full_price' => '109', 'allergens' => 'g', 'description' => ''],
            //     ['name' => 'Onion Bhaji (Vegan)', 'full_price' => '89', 'allergens' => 'l', 'description' => ''],
            //     ['name' => 'Chilly Chicken / Chilly Paneer', 'full_price' => '119', 'allergens' => 'gi', 'description' => ''],
            // ],
            'Pakoras Fritters' => [
                [
                    'name' => 'Murgh Pakora',
                    'full_price' => '99',
                    'allergens' => 'e',
                    'description' => 'Kyllingbiter marinert i sesamfrø, egg og lime juice. En Kongelig opplevelse!',
                ],
                [
                    'name' => 'Crispy Honey Chicken',
                    'full_price' => '109',
                    'allergens' => 'gl',
                    'description' => 'Intens flammevinde rode chili marinert kylling.',
                ],
                [
                    'name' => 'Prawn Namkeen',
                    'full_price' => '109',
                    'allergens' => 'cr',
                    'description' => 'Pannestekt reker med paprika, løk og indisk krydder.',
                ],
                [
                    'name' => 'Prawn Kurkure',
                    'full_price' => '109',
                    'allergens' => 'g',
                    'description' => 'Sprø, gyllenbrun ytre og et saftig, mørt indre',
                ],
                [
                    'name' => 'Onion Bhaji (Vegan)',
                    'full_price' => '89',
                    'allergens' => 'l',
                    'description' => 'Blanding av løk og poteter dyppes i en kikert- og maisblanding tilsatt lapskaffro, chili og gurkemeie for det fritters. Serveret med mintchutney.',
                ],
                [
                    'name' => 'Chilly Chicken / Chilly Paneer',
                    'full_price' => '119',
                    'allergens' => 'gi',
                    'description' => 'En populær og deilig Hakka, kinesisk inspirerende rett med indisk kylling, med sprø kyllingbiter eller paneer og lett sleng i en krydret chilisaus og grønnsaker. Fullpakke med fantastiske smaker fra begge verdener.',
                ],
            ],
            // 'Indian Masala House' => [
            //     ['name' => 'Pappadoms', 'full_price' => '69', 'allergens' => '', 'description' => ''],
            //     ['name' => 'Mango Lassi', 'full_price' => '79', 'allergens' => 'mi', 'description' => ''],
            // ],
            // 'Sigdi ki Karamat / Tandoori Specialties' => [
            //     ['name' => 'Clay Oven Roasted Tandoori Chicken', 'full_price' => '289', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Garlic Tikka Tandoori', 'full_price' => '289', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Parmesan Cheese Malai Tikka “Creamy”', 'full_price' => '289', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Tandoori Jhinga Pudina (South Style)', 'full_price' => '289', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Lamb Ytrefilet Shashlik / Chicken Shashlik', 'full_price' => '299', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Mixed Grill "Chef\'s exceptional "', 'full_price' => '319', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Chefs Secret Spice Mix Marinated Rack of Lamb', 'full_price' => '329', 'allergens' => 'm', 'description' => ''],
            //     ['name' => 'Lucknowi Duck Tikka (Chef’s Preference) ', 'full_price' => '319', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Tandoori Chicken (with Bone)', 'full_price' => '289', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Seekh Kabab Lucknowi', 'full_price' => '289', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Tandoori Sangam “Chefs Special”', 'full_price' => '319', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Tandoori Gobhi', 'full_price' => '249', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Biff Tamarind Tikka ( chef’s choice)', 'full_price' => '299', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Biff Pepper Tikka “Andhra Style”', 'full_price' => '299', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Tandoori Malai Broccoli', 'full_price' => '259', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Tandoori Aloo (Chef Choice)', 'full_price' => '239', 'allergens' => 'mi', 'description' => ''],
            // ],

            'Indian Masala House' => [
                [
                    'name' => 'Pappadoms',
                    'full_price' => '69',
                    'allergens' => '',
                    'description' => null,
                ],
                [
                    'name' => 'Mango Lassi',
                    'full_price' => '79',
                    'allergens' => 'mi',
                    'description' => null,
                ],
            ],
            'Sigdi ki Karamat / Tandoori Specialties' => [
                [
                    'name' => 'Clay Oven Roasted Tandoori Chicken',
                    'full_price' => '289',
                    'allergens' => 'mi',
                    'description' => 'Klassikeren fra delstat Punjab. Kyllingsykker, først marinert med ingefær og hvitløk, deretter I yoghurt med ulike krydderblandinger.',
                ],
                [
                    'name' => 'Garlic Tikka Tandoori',
                    'full_price' => '289',
                    'allergens' => 'mi',
                    'description' => 'Benfrie kyllingsykker marinert i en blanding av koriander, mynte, grønn chili, og vår egen kvernet garam masala (sort pepper, nellik, kanel, kardemomme og spisskumme). Anbefales for hvitløkselskere.',
                ],
                [
                    'name' => 'Parmesan Cheese Malai Tikka “Creamy”',
                    'full_price' => '289',
                    'allergens' => 'mi',
                    'description' => 'Kyllingfilet marinert med kremet ost, kokoskrém, hvit pepper og grønn kardemomme stekt i tandoori ovn.',
                ],
                [
                    'name' => 'Tandoori Jhinga Pudina (South Style)',
                    'full_price' => '289',
                    'allergens' => 'mi',
                    'description' => 'Kongereker først marinert i ingefær og hvitløk, deretter i yoghurt, sortpepper, limejuice, grønchilli, koriander og garam masala før de grilles på grillen.',
                ],
                [
                    'name' => 'Lamb Ytrefilet Shashlik / Chicken Shashlik',
                    'full_price' => '299',
                    'allergens' => 'mi',
                    'description' => 'Møre stykker av lamytrefilet marinert over natten i yoghurt og krydder. Stekt i tandoori med krydret masala saus og chutney.',
                ],
                [
                    'name' => 'Mixed Grill "Chef\'s exceptional "',
                    'full_price' => '319',
                    'allergens' => 'mi',
                    'description' => '“Chef\'s Special platter of the day” Et utvalg av herlige Tandoori retter inkludert Classic, Haryali og Malai Tikka. Noe ventetid må påregnes når du bestiller denne.',
                ],
                [
                    'name' => 'Chefs Secret Spice Mix Marinated Rack of Lamb',
                    'full_price' => '329',
                    'allergens' => 'm',
                    'description' => 'Lammecarré først marinert i hvitløk og ingefær, deretter i yoghurt, sennepsolje med og ulike krydder. Noe ventetid må påregnes når du bestiller denne.',
                ],
                [
                    'name' => 'Lucknowi Duck Tikka (Chef’s Preference) ',
                    'full_price' => '319',
                    'allergens' => 'mi',
                    'description' => 'Duck først marinert i hvitløk og ingefær, deretter i yoghurt, sennepsolje med og ulike krydder. Noe ventetid må påregnes når du bestiller denne.',
                ],
                [
                    'name' => 'Tandoori Chicken (with Bone)',
                    'full_price' => '289',
                    'allergens' => 'mi',
                    'description' => 'Klassisk kullgrillet tandoorikylling, marinert I en blanding av indiske krydder.',
                ],
                [
                    'name' => 'Seekh Kabab Lucknowi',
                    'full_price' => '289',
                    'allergens' => 'mi',
                    'description' => 'Krydrede lammekjøttdeigkebab med ost, løk og hvitløk, grillet I tandoorovnen',
                ],
                [
                    'name' => 'Tandoori Sangam “Chefs Special”',
                    'full_price' => '319',
                    'allergens' => 'mi',
                    'description' => 'En av kokkens absolutte favoritter hvor møre benfrie kyllingsykker, lammefilet, kongereker først marinères i ulike krydder og urter før så å grilles i tandoor.',
                ],
                [
                    'name' => 'Tandoori Gobhi',
                    'full_price' => '249',
                    'allergens' => 'mi',
                    'description' => 'Marinet med indisk krydder, yoghurt og ulike indiske krydder',
                ],
                [
                    'name' => 'Biff Tamarind Tikka ( chef’s choice)',
                    'full_price' => '299',
                    'allergens' => 'mi',
                    'description' => 'De søte og syrlige smakene av tamarind, honning passer så godt sammen.',
                ],
                [
                    'name' => 'Biff Pepper Tikka “Andhra Style”',
                    'full_price' => '299',
                    'allergens' => 'mi',
                    'description' => 'Biff indrefilet tikka. Marinert I rødt krydret pepperyoghurt og indiske krydder. Ferdig I tandoori.',
                ],
                [
                    'name' => 'Tandoori Malai Broccoli',
                    'full_price' => '259',
                    'allergens' => 'mi',
                    'description' => 'Marinet med cashewpasta, ost, yoghurt og ulike indiske krydder',
                ],
                [
                    'name' => 'Tandoori Aloo (Chef Choice)',
                    'full_price' => '239',
                    'allergens' => 'mi',
                    'description' => 'Marinet med indisk krydder, yoghurt og ulike indiske krydder',
                ],
            ],


            // 'Salads' => [
            //     ['name' => 'House Favorites Salad', 'full_price' => '89', 'allergens' => '', 'description' => ''],
            //     ['name' => 'Grilled Chicken Iceberg Salad', 'full_price' => '99', 'allergens' => '', 'description' => ''],
            // ],
            // 'Chule ki Soghat | MAINS' => [
            //     ['name' => 'Aam Mango Murgh', 'full_price' => '279', 'allergens' => 'mi.n', 'description' => ''],
            //     ['name' => 'Murg Jahangiri', 'full_price' => '279', 'allergens' => 'mi.n', 'description' => ''],
            //     ['name' => 'Murg Makhani (Butter Chicken)', 'full_price' => '289', 'allergens' => 'gl', 'description' => ''],
            //     ['name' => 'Chicken Tikka Masala', 'full_price' => '269', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Cashew Corma Chicken / Lamb', 'full_price' => '279/289', 'allergens' => 'mi.n', 'description' => ''],
            //     ['name' => 'Murg Kasoori Malai', 'full_price' => '279', 'allergens' => 'mi.n', 'description' => ''],
            //     ['name' => 'Matka Chicken (Chef’s Preference)', 'full_price' => '269', 'allergens' => 'mi.n', 'description' => ''],
            //     ['name' => 'Lamb Gosht Punjabi', 'full_price' => '285', 'allergens' => 'mi.n', 'description' => ''],
            //     ['name' => 'Chicken Cafreal / Biff Cafreal / Lamb Cafreal', 'full_price' => '279/289/289', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Chicken Karahi / Lamb Karahi', 'full_price' => '279/289', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Lamb Tikka Masala', 'full_price' => '289', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Lamb Jalfrezi / Chicken Jalfrezi', 'full_price' => '289/279', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Chicken Saag Garhwali (Uttrakhand Style) ', 'full_price' => '289', 'allergens' => 'mi', 'description' => ''],
            // ],

            'Salads' => [
                [
                    'name' => 'House Favorites Salad',
                    'full_price' => '89',
                    'allergens' => '',
                    'description' => 'Klassisk hussalat med sprø salat, tomater, agurk, ost og agurker.',
                ],
                [
                    'name' => 'Grilled Chicken Iceberg Salad',
                    'full_price' => '99',
                    'allergens' => '',
                    'description' => 'Ingredienser som majones, parmesanost, sitronsaft, hvitløk.',
                ],
            ],
            'Chule ki Soghat | MAINS' => [
                [
                    'name' => 'Aam Mango Murgh',
                    'full_price' => '279',
                    'allergens' => 'mi.n',
                    'description' => 'Kyllingfilet med karri, mangopuré, fløte, ulike indiske krydder og frisk koriander',
                ],
                [
                    'name' => 'Murg Jahangiri',
                    'full_price' => '279',
                    'allergens' => 'mi.n',
                    'description' => 'Marinert og tandoorigrillt av kyiling i et meget fyldig saus av fløte, rødvins, kokos, champignon, løk og matle cashewnøtter.',
                ],
                [
                    'name' => 'Murg Makhani (Butter Chicken)',
                    'full_price' => '289',
                    'allergens' => 'gl',
                    'description' => 'En Populær rett av tandoor tilberedt kyiling/kjøtt ferdig i en prakfull red masalasaus med hvitøk, methi, matle nøtter og svart salt for å gi et fargerik og herlig middag.',
                ],
                [
                    'name' => 'Chicken Tikka Masala',
                    'full_price' => '269',
                    'allergens' => 'mi',
                    'description' => 'Saftige biter av kyiling tilberedt i hjemmelaget krydret masala saus med løk, paprika, koriander og fersk ingefær.',
                ],
                [
                    'name' => 'Cashew Corma Chicken / Lamb',
                    'full_price' => '279/289',
                    'allergens' => 'mi.n',
                    'description' => 'Kyiling i kremen fløte curry med matle cashewnøtter, tørket methi (bukkehornkløver), matl korianderfrø og fersk kvernet sort pepper.',
                ],
                [
                    'name' => 'Murg Kasoori Malai',
                    'full_price' => '279',
                    'allergens' => 'mi.n',
                    'description' => '"Absolutely Creamy " Kyiling i kremen fløte curry med matle cashewnøtter, tørket methi (bukkehornkløver), matl korianderfrø og fersk kvernet sort pepper.',
                ],
                [
                    'name' => 'Matka Chicken (Chef’s Preference)',
                    'full_price' => '269',
                    'allergens' => 'mi.n',
                    'description' => 'Lammematka er en guddommelig rett som er delikat og godt smak til taller fra hverandre, men dypt smakfull aromatisk saus.',
                ],
                [
                    'name' => 'Lamb Gosht Punjabi',
                    'full_price' => '285',
                    'allergens' => 'mi.n',
                    'description' => 'Lammekjøtt med dverggresskar, tomat-løkpasta og krydder fra Punjab',
                ],
                [
                    'name' => 'Chicken Cafreal / Biff Cafreal / Lamb Cafreal',
                    'full_price' => '279/289/289',
                    'allergens' => 'mi',
                    'description' => 'Kyllingfilet I en spesiell gourmetkrydderblanding med koriander og grønn chilisaus',
                ],
                [
                    'name' => 'Chicken Karahi / Lamb Karahi',
                    'full_price' => '279/289',
                    'allergens' => 'mi',
                    'description' => 'Lammkjøtt med tomat-løk-ingefær-pasta og forskjellige indiske krydder.',
                ],
                [
                    'name' => 'Lamb Tikka Masala',
                    'full_price' => '289',
                    'allergens' => 'mi',
                    'description' => 'Marinert kyllingbrystfilet I ulik krydder, grillet I tandoori-leirovn og servert med smørsaus',
                ],
                [
                    'name' => 'Lamb Jalfrezi / Chicken Jalfrezi',
                    'full_price' => '289/279',
                    'allergens' => 'mi',
                    'description' => 'Kyllingfilet med karri, paprika, løk og forskjellige indiske krydder I en søtsur pølse',
                ],
                [
                    'name' => 'Chicken Saag Garhwali (Uttrakhand Style) ',
                    'full_price' => '289',
                    'allergens' => 'mi',
                    'description' => '“Flavored by the richness of spinach” Smaksatt med bukkehornkløver, grønne erter og',
                ],
            ],


            // 'Chule ki Soghat | Regional Specialties' => [
            //     ['name' => 'Rogan Josh Kashmiri (Chicken / Lamb / Biff)', 'full_price' => '269/289/289', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Balti Gosht', 'full_price' => '289', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Hydrabadi Lamb Corma', 'full_price' => '289', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Chicken Chattinad', 'full_price' => '279', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Punjabi Saag (Chicken / Lamb / Beef)', 'full_price' => '279/289/289', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Karahi Lamb Chop (Masala House Signature)', 'full_price' => '329', 'allergens' => 'mi', 'description' => ''],
            // ],
            // 'Hot \'n Spicy' => [
            //     ['name' => 'Vin-(d)-aloo (Chicken / Lamb / Biff)', 'full_price' => '269/289/289', 'allergens' => 'mi(K)', 'description' => ''],
            //     ['name' => 'Madras lamb / biff / Chicken', 'full_price' => '289/289/279', 'allergens' => 'mi/mu', 'description' => ''],
            //     ['name' => 'Pepper Chicken', 'full_price' => '279', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Rara Gosht', 'full_price' => '289', 'allergens' => 'mi', 'description' => ''],
            // ],
            // 'Duck' => [
            //     ['name' => 'Batak Coco Mango (Duck)', 'full_price' => '299', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Batak Mughlai (Duck)', 'full_price' => '299', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Batak Makhni (Duck)', 'full_price' => '299', 'allergens' => 'mi', 'description' => ''],
            // ],

            'Chule ki Soghat | Regional Specialties' => [
                [
                    'name' => 'Rogan Josh Kashmiri (Chicken / Lamb / Biff)',
                    'full_price' => '269/289/289',
                    'allergens' => 'mi',
                    'description' => '"From valley of Kashmir" En populær indisk rett fra Kashmir dolene benfrie stykker av kjøtt/kylling tilberedt aromatisk krydret saus etter din smak.',
                ],
                [
                    'name' => 'Balti Gosht',
                    'full_price' => '289',
                    'allergens' => 'mi',
                    'description' => 'Sterkt krydret lammekjøtt med bein I en spesiell løk- og tomatsaus',
                ],
                [
                    'name' => 'Hydrabadi Lamb Corma',
                    'full_price' => '289',
                    'allergens' => 'mi',
                    'description' => 'Ruller av finhakket fårekjøtt med smeltet ost, ulike krydder fra Hydrabad, løk, hvitløk og tomater',
                ],
                [
                    'name' => 'Chicken Chattinad',
                    'full_price' => '279',
                    'allergens' => 'mi',
                    'description' => 'Ruller av finhakket fårekjøtt med smeltet, ulike krydder fra søt, løk, hvitløk og tomater',
                ],
                [
                    'name' => 'Punjabi Saag (Chicken / Lamb / Beef)',
                    'full_price' => '279/289/289',
                    'allergens' => 'mi',
                    'description' => 'Filet av kylling, biff eller lam bresert og serveret I en kremet og velkrydret bladinatsaus smakssatt med bukkehornkløver, grønne erter og friske urter.',
                ],
                [
                    'name' => 'Karahi Lamb Chop (Masala House Signature)',
                    'full_price' => '329',
                    'allergens' => 'mi',
                    'description' => 'Lammekoteletter tilberedt I wok med en søt og krydret paprikasaus',
                ],
            ],
            'Hot \'n Spicy' => [
                [
                    'name' => 'Vin-(d)-aloo (Chicken / Lamb / Biff)',
                    'full_price' => '269/289/289',
                    'allergens' => 'mi(K)',
                    'description' => '"The Pepper Quest, South India" Veldig av kjøtt eller kylling i en sterk saus fra Goa laget etter en tradisjonell sør indisk oppskrift med en brennende saus laget av brunt sukker og rødvin, meget sterk.',
                ],
                [
                    'name' => 'Madras lamb / biff / Chicken',
                    'full_price' => '289/289/279',
                    'allergens' => 'mi/mu',
                    'description' => 'En berømt sør-indisk rett laget med tomater, løk, kokospulver krem og indiske krydder.',
                ],
                [
                    'name' => 'Pepper Chicken',
                    'full_price' => '279',
                    'allergens' => 'mi',
                    'description' => 'Grillet kylling i fløte- og peppersaus. Serveres med ris. Inneholder: melk, hvete, cashewnøtter',
                ],
                [
                    'name' => 'Rara Gosht',
                    'full_price' => '289',
                    'allergens' => 'mi',
                    'description' => 'Lamme i fløte- og peppersaus. Serveres med ris. Inneholder: melk, hvete, cashewnøtter',
                ],
            ],
            'Duck' => [
                [
                    'name' => 'Batak Coco Mango (Duck)',
                    'full_price' => '299',
                    'allergens' => 'mi',
                    'description' => 'Andebryst I en curry med kokosmelk, mangopuré, fløte, cashewnøtter og tomatpuré',
                ],
                [
                    'name' => 'Batak Mughlai (Duck)',
                    'full_price' => '299',
                    'allergens' => 'mi',
                    'description' => 'Andelår med biter av andebryst',
                ],
                [
                    'name' => 'Batak Makhni (Duck)',
                    'full_price' => '299',
                    'allergens' => 'mi',
                    'description' => 'Sterkt krydret tandoori-andebryst med en spesiell smør-currysaus',
                ],
            ],


            // 'Seafood' => [
            //     ['name' => 'Macher Jhol', 'full_price' => '279', 'allergens' => 'mi(k)', 'description' => ''],
            //     ['name' => 'Goan Fish Curry Masala', 'full_price' => '279', 'allergens' => 'mi(k)', 'description' => ''],
            //     ['name' => 'Cochin Prawn Curry', 'full_price' => '279', 'allergens' => 'mi(k)', 'description' => ''],
            //     ['name' => 'Malavar Prawn Curry', 'full_price' => '299', 'allergens' => 'mi', 'description' => ''],
            // ],
            // 'Barnemeny' => [
            //     ['name' => 'Kids Butter Chicken', 'full_price' => '119', 'allergens' => 'mi.n', 'description' => ''],
            //     ['name' => 'Kids Tikka Masala', 'full_price' => '119', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Kids Tandoori Chicken', 'full_price' => '129', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Kids Cashew Corma', 'full_price' => '119', 'allergens' => 'mi.n', 'description' => ''],
            // ],
            // 'Traditional | House Biryanis' => [
            //     ['name' => 'Mughlai Chicken Biryani', 'full_price' => '279', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Traditional Lucknowi Lamb Biryani', 'full_price' => '289', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Goan Masala Prawn Biryani', 'full_price' => '295', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Chaman Biryani', 'full_price' => '259', 'allergens' => 'mi', 'description' => ''],
            // ],

            'Seafood' => [
                [
                    'name' => 'Macher Jhol',
                    'full_price' => '279',
                    'allergens' => 'mi(k)',
                    'description' => '“A Classic Recipe From Bengal” Rødbrasme I en spesiell karrisaus med løk, ingefær-hvitløkspasta, poteter, og en fisketype etter eget valg',
                ],
                [
                    'name' => 'Goan Fish Curry Masala',
                    'full_price' => '279',
                    'allergens' => 'mi(k)',
                    'description' => 'Med rødbrasmefilet I kokosmelk, goanske krydder og en fisketype etter eget valg',
                ],
                [
                    'name' => 'Cochin Prawn Curry',
                    'full_price' => '279',
                    'allergens' => 'mi(k)',
                    'description' => 'Store reker med Malabar-karrikrydder, cherrytomater, kokosmelk og cashewpasta.',
                ],
                [
                    'name' => 'Malavar Prawn Curry',
                    'full_price' => '299',
                    'allergens' => 'mi',
                    'description' => 'Kongereker karri er en deilig krydder-infundert karri som stammer fra sør-india. Kongereker tilberedt I tamarind, kokoskrem, paprika og løk saus krydder',
                ],
            ],
            'Barnemeny' => [
                [
                    'name' => 'Kids Butter Chicken',
                    'full_price' => '119',
                    'allergens' => 'mi.n',
                    'description' => null,
                ],
                [
                    'name' => 'Kids Tikka Masala',
                    'full_price' => '119',
                    'allergens' => 'mi',
                    'description' => null,
                ],
                [
                    'name' => 'Kids Tandoori Chicken',
                    'full_price' => '129',
                    'allergens' => 'mi',
                    'description' => null,
                ],
                [
                    'name' => 'Kids Cashew Corma',
                    'full_price' => '119',
                    'allergens' => 'mi.n',
                    'description' => null,
                ],
            ],
            'Traditional | House Biryanis' => [
                [
                    'name' => 'Mughlai Chicken Biryani',
                    'full_price' => '279',
                    'allergens' => 'mi',
                    'description' => 'Kyllingkjøtt I basmatiris med Lucknowi - krydder, ristede løk, ingefær, koriander, mynte og safran.',
                ],
                [
                    'name' => 'Traditional Lucknowi Lamb Biryani',
                    'full_price' => '289',
                    'allergens' => 'mi',
                    'description' => 'Lammekjøtt I basmatiris med Hyderabadi-krydder, ristede løk, ingefær, koriander, mynte og safran.',
                ],
                [
                    'name' => 'Goan Masala Prawn Biryani',
                    'full_price' => '295',
                    'allergens' => 'mi',
                    'description' => 'Basmatiris, laget med perfekt kokte reker marinert i koriandergrønn marinade.',
                ],
                [
                    'name' => 'Chaman Biryani',
                    'full_price' => '259',
                    'allergens' => 'mi',
                    'description' => 'Paneer (indisk ferskost) I basmatiris med ulike grønnsaker, cashewpasta, ristede løk og tilberedt på en måte etter ditt valg.',
                ],
            ],


            // 'Breads | Roti & Naan' => [
            //     ['name' => 'Tandoori Roti', 'full_price' => '45', 'allergens' => 'gl', 'description' => ''],
            //     ['name' => 'Fluffy Naan', 'full_price' => '45', 'allergens' => 'gl.e.m', 'description' => ''],
            //     ['name' => 'Garlic Naan', 'full_price' => '45', 'allergens' => 'gl.e.m', 'description' => ''],
            //     ['name' => 'Butter Chicken Naan', 'full_price' => '69', 'allergens' => 'gl.e.m', 'description' => ''],
            //     ['name' => 'Garlic Onion Chilli Naan', 'full_price' => '59', 'allergens' => 'gl.e.m', 'description' => ''],
            //     ['name' => 'Garlic Cheese Naan', 'full_price' => '55', 'allergens' => 'gl.e.m', 'description' => ''],
            //     ['name' => 'Nutty Sweet Naan', 'full_price' => '59', 'allergens' => 'gl.e.m.n', 'description' => ''],
            //     ['name' => 'Keema Naan', 'full_price' => '69', 'allergens' => 'gl.e.m.n', 'description' => ''],
            // ],
            // 'Combos & Veggies' => [
            //     ['name' => 'Dal Makhní & Rice (COMBO)', 'full_price' => '249', 'allergens' => 'm(k)', 'description' => ''],
            //     ['name' => 'Chole Masala (COMBO)', 'full_price' => '249', 'allergens' => '', 'description' => ''],
            //     ['name' => 'Agurk Raita', 'full_price' => '49', 'allergens' => '', 'description' => ''],
            //     ['name' => 'Rice', 'full_price' => '59', 'allergens' => '', 'description' => ''],
            //     ['name' => 'Saute Veggies (Peprica, Mushroom, Onion)', 'full_price' => '109', 'allergens' => '', 'description' => ''],
            //     ['name' => 'Dal Khichdi', 'full_price' => '219', 'allergens' => '', 'description' => ''],
            // ],
            // 'Combos & Non-Veg' => [
            //     ['name' => 'Murg Tikka Masala & Rice', 'full_price' => '299', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Murg Makhni & Rice', 'full_price' => '309', 'allergens' => 'mi', 'description' => ''],
            // ],

            'Breads | Roti & Naan' => [
                [
                    'name' => 'Tandoori Roti',
                    'full_price' => '45',
                    'allergens' => 'gl',
                    'description' => null,
                ],
                [
                    'name' => 'Fluffy Naan',
                    'full_price' => '45',
                    'allergens' => 'gl.e.m',
                    'description' => null,
                ],
                [
                    'name' => 'Garlic Naan',
                    'full_price' => '45',
                    'allergens' => 'gl.e.m',
                    'description' => null,
                ],
                [
                    'name' => 'Butter Chicken Naan',
                    'full_price' => '69',
                    'allergens' => 'gl.e.m',
                    'description' => null,
                ],
                [
                    'name' => 'Garlic Onion Chilli Naan',
                    'full_price' => '59',
                    'allergens' => 'gl.e.m',
                    'description' => null,
                ],
                [
                    'name' => 'Garlic Cheese Naan',
                    'full_price' => '55',
                    'allergens' => 'gl.e.m',
                    'description' => null,
                ],
                [
                    'name' => 'Nutty Sweet Naan',
                    'full_price' => '59',
                    'allergens' => 'gl.e.m.n',
                    'description' => null,
                ],
                [
                    'name' => 'Keema Naan',
                    'full_price' => '69',
                    'allergens' => 'gl.e.m.n',
                    'description' => null,
                ],
            ],
            'Combos & Veggies' => [
                [
                    'name' => 'Dal Makhní & Rice (COMBO)',
                    'full_price' => '249',
                    'allergens' => 'm(k)',
                    'description' => null,
                ],
                [
                    'name' => 'Chole Masala (COMBO)',
                    'full_price' => '249',
                    'allergens' => '',
                    'description' => null,
                ],
                [
                    'name' => 'Agurk Raita',
                    'full_price' => '49',
                    'allergens' => '',
                    'description' => null,
                ],
                [
                    'name' => 'Rice',
                    'full_price' => '59',
                    'allergens' => '',
                    'description' => null,
                ],
                [
                    'name' => 'Saute Veggies (Peprica, Mushroom, Onion)',
                    'full_price' => '109',
                    'allergens' => '',
                    'description' => null,
                ],
                [
                    'name' => 'Dal Khichdi',
                    'full_price' => '219',
                    'allergens' => '',
                    'description' => 'Rich in protein ( Vegan) ( Lentil and Rice Risotto, temper with Garlic & Curry leaves)',
                ],
            ],
            'Combos & Non-Veg' => [
                [
                    'name' => 'Murg Tikka Masala & Rice',
                    'full_price' => '299',
                    'allergens' => 'mi',
                    'description' => null,
                ],
                [
                    'name' => 'Murg Makhni & Rice',
                    'full_price' => '309',
                    'allergens' => 'mi',
                    'description' => null,
                ],
            ],



            // 'Vegetarian' => [
            //     ['name' => 'Shaam Savera (Chefs Special)', 'full_price' => '269', 'allergens' => 'mi.n', 'description' => ''],
            //     ['name' => 'Panir Paneer', 'full_price' => '269', 'allergens' => 'mi.n', 'description' => ''],
            //     ['name' => 'Dal Makhní', 'full_price' => '229', 'allergens' => 'mi(k)', 'description' => ''],
            //     ['name' => 'Paneer Cashew Korma', 'full_price' => '269', 'allergens' => 'mi.n', 'description' => ''],
            //     ['name' => 'Paneer Jalfrezy', 'full_price' => '269', 'allergens' => 'mi', 'description' => ''],
            // ],
            // 'Pickles & Chutny' => [
            //     ['name' => 'Mint & Coriander Chutny', 'full_price' => '25', 'allergens' => '', 'description' => ''],
            //     ['name' => 'Mango Chutny', 'full_price' => '25', 'allergens' => 'mu', 'description' => ''],
            //     ['name' => 'Mixed Pickles', 'full_price' => '25', 'allergens' => 'mu', 'description' => ''],
            // ],
            // '100% Vegan' => [
            //     ['name' => 'Amritsar Chole', 'full_price' => '219', 'allergens' => '', 'description' => ''],
            //     ['name' => 'Gobhi & Aloo', 'full_price' => '239', 'allergens' => '', 'description' => ''],
            //     ['name' => 'Aloo Palak Sabji', 'full_price' => '219', 'allergens' => '', 'description' => ''],
            //     ['name' => 'Tadka Dal Fry', 'full_price' => '219', 'allergens' => '', 'description' => ''],
            // ],

            'Vegetarian' => [
                [
                    'name' => 'Shaam Savera (Chefs Special)',
                    'full_price' => '269',
                    'allergens' => 'mi.n',
                    'description' => '“Hand-in-Hand Dumplings" Veg panir & cashew "koftas" i en mild kremen saus med kardemomme og rose ekstra.',
                ],
                [
                    'name' => 'Panir Paneer',
                    'full_price' => '269',
                    'allergens' => 'mi.n',
                    'description' => 'Indisk ost med eget valg av saus. PALAK - Krydret spinatssaus KADAH - Fyldig laksaus med paprika Makhni - Cashew Saus',
                ],
                [
                    'name' => 'Dal Makhní',
                    'full_price' => '229',
                    'allergens' => 'mi(k)',
                    'description' => '"Creamy & Thick" Linser tilberedt i en aromatisk fløtesaus eller kokos melk med hvitløk og ingefær.',
                ],
                [
                    'name' => 'Paneer Cashew Korma',
                    'full_price' => '269',
                    'allergens' => 'mi.n',
                    'description' => '"Creamy, Nutty & Fragrant" Dagens paneer og frukt tilberedt i en kremet saus av cashewnøtter.',
                ],
                [
                    'name' => 'Paneer Jalfrezy',
                    'full_price' => '269',
                    'allergens' => 'mi',
                    'description' => null,
                ],
            ],
            'Pickles & Chutny' => [
                [
                    'name' => 'Mint & Coriander Chutny',
                    'full_price' => '25',
                    'allergens' => '',
                    'description' => null,
                ],
                [
                    'name' => 'Mango Chutny',
                    'full_price' => '25',
                    'allergens' => 'mu',
                    'description' => null,
                ],
                [
                    'name' => 'Mixed Pickles',
                    'full_price' => '25',
                    'allergens' => 'mu',
                    'description' => null,
                ],
            ],
            '100% Vegan' => [
                [
                    'name' => 'Amritsar Chole',
                    'full_price' => '219',
                    'allergens' => '',
                    'description' => 'Chik Pea en populær indisk linsrett laget med krydret masala.',
                ],
                [
                    'name' => 'Gobhi & Aloo',
                    'full_price' => '239',
                    'allergens' => '',
                    'description' => '"Flower Power" En kombinasjon av tøyet elskede blomkål stekt sammen med krydder.',
                ],
                [
                    'name' => 'Aloo Palak Sabji',
                    'full_price' => '219',
                    'allergens' => '',
                    'description' => '"Simple & Tasty" Veldig sunt & helt vegansk rett med spinat og poteter med varme krydder.',
                ],
                [
                    'name' => 'Tadka Dal Fry',
                    'full_price' => '219',
                    'allergens' => '',
                    'description' => 'Dal Tadka er en populær indisk linserett laget med arhar dal (avskallede og delte duerter) eller masoor dal (avskallede og delte røde linser).',
                ],
            ],

            // 'Extras' => [
            //     ['name' => 'Masala Tandoori Sauce', 'full_price' => '65', 'allergens' => 'm(k)', 'description' => ''],
            //     ['name' => 'Makhní Sauce', 'full_price' => '75', 'allergens' => 'm.n', 'description' => ''],
            //     ['name' => 'Goan Masala Sauce', 'full_price' => '75', 'allergens' => 'mu', 'description' => ''],
            //     ['name' => 'Mild Corma Sauce', 'full_price' => '75', 'allergens' => 'm.n', 'description' => ''],
            // ],
            // 'Desserts' => [
            //     ['name' => 'Mango Cotta', 'full_price' => '99', 'allergens' => 'mi,e', 'description' => ''],
            //     ['name' => 'Anguri Gulab Jamun', 'full_price' => '99', 'allergens' => 'mi,g', 'description' => ''],
            //     ['name' => 'Kesari Gajar Halwa', 'full_price' => '99', 'allergens' => 'mi,n', 'description' => ''],
            //     ['name' => 'Apple Pie', 'full_price' => '109', 'allergens' => 'mi,g', 'description' => ''],
            //     ['name' => 'Saffron & Mango Kulfi (Indian Style Ice Cream)', 'full_price' => '109', 'allergens' => 'mi', 'description' => ''],
            //     ['name' => 'Aam Mango Sorbet (Vegan)', 'full_price' => '119', 'allergens' => '', 'description' => ''],
            // ],
            // 'Drinks' => [
            //     ['name' => 'Irish Coffee', 'full_price' => '145', 'allergens' => '', 'description' => ''],
            //     ['name' => 'Baileys Coffee', 'full_price' => '135', 'allergens' => '', 'description' => ''],
            //     ['name' => 'Mexican Coffee', 'full_price' => '135', 'allergens' => '', 'description' => ''],
            //     ['name' => 'Kaffe', 'full_price' => '30', 'allergens' => '', 'description' => ''],
            //     ['name' => 'Espresso', 'full_price' => '30', 'allergens' => '', 'description' => ''],
            //     ['name' => 'Caffe Latte', 'full_price' => '45', 'allergens' => '', 'description' => ''],
            //     ['name' => 'Cappuccino', 'full_price' => '39', 'allergens' => '', 'description' => ''],
            //     ['name' => 'Mocca', 'full_price' => '45', 'allergens' => '', 'description' => ''],
            //     ['name' => 'Green Tea Sjasmin', 'full_price' => '45', 'allergens' => '', 'description' => ''],
            //     ['name' => 'Darjeeling Premium', 'full_price' => '45', 'allergens' => '', 'description' => ''],
            // ],

            'Extras' => [
                [
                    'name' => 'Masala Tandoori Sauce',
                    'full_price' => '65',
                    'allergens' => 'm(k)',
                    'description' => null,
                ],
                [
                    'name' => 'Makhní Sauce',
                    'full_price' => '75',
                    'allergens' => 'm.n',
                    'description' => null,
                ],
                [
                    'name' => 'Goan Masala Sauce',
                    'full_price' => '75',
                    'allergens' => 'mu',
                    'description' => null,
                ],
                [
                    'name' => 'Mild Corma Sauce',
                    'full_price' => '75',
                    'allergens' => 'm.n',
                    'description' => null,
                ],
            ],
            'Desserts' => [
                [
                    'name' => 'Mango Cotta',
                    'full_price' => '99',
                    'allergens' => 'mi,e',
                    'description' => 'Panna cotta med fersk mynte, mango og lime saus. Serveres med fersk mango sorbet is.',
                ],
                [
                    'name' => 'Anguri Gulab Jamun',
                    'full_price' => '99',
                    'allergens' => 'mi,g',
                    'description' => 'Klassisk indisk dessert av deigballer, frityrstekt i aromatisk sukkersirup med kardemomme. Serveret med vanilje is.',
                ],
                [
                    'name' => 'Kesari Gajar Halwa',
                    'full_price' => '99',
                    'allergens' => 'mi,n',
                    'description' => 'Gulrot kake laget på indiskvis servert med vaniljeis og nøtter.',
                ],
                [
                    'name' => 'Apple Pie',
                    'full_price' => '109',
                    'allergens' => 'mi,g',
                    'description' => 'Gulrot kake laget på indiskvis servert med vaniljeis og nøtter.',
                ],
                [
                    'name' => 'Saffron & Mango Kulfi (Indian Style Ice Cream)',
                    'full_price' => '109',
                    'allergens' => 'mi',
                    'description' => 'Hjemmelaget indisk iskrem med nøtter serveres med frukt.',
                ],
                [
                    'name' => 'Aam Mango Sorbet (Vegan)',
                    'full_price' => '119',
                    'allergens' => '',
                    'description' => null,
                ],
            ],
            'Drinks' => [
                [
                    'name' => 'Irish Coffee',
                    'full_price' => '145',
                    'allergens' => '',
                    'description' => null,
                ],
                [
                    'name' => 'Baileys Coffee',
                    'full_price' => '135',
                    'allergens' => '',
                    'description' => null,
                ],
                [
                    'name' => 'Mexican Coffee',
                    'full_price' => '135',
                    'allergens' => '',
                    'description' => null,
                ],
                [
                    'name' => 'Kaffe',
                    'full_price' => '30',
                    'allergens' => '',
                    'description' => null,
                ],
                [
                    'name' => 'Espresso',
                    'full_price' => '30',
                    'allergens' => '',
                    'description' => null,
                ],
                [
                    'name' => 'Caffe Latte',
                    'full_price' => '45',
                    'allergens' => '',
                    'description' => null,
                ],
                [
                    'name' => 'Cappuccino',
                    'full_price' => '39',
                    'allergens' => '',
                    'description' => null,
                ],
                [
                    'name' => 'Mocca',
                    'full_price' => '45',
                    'allergens' => '',
                    'description' => null,
                ],
                [
                    'name' => 'Green Tea Sjasmin',
                    'full_price' => '45',
                    'allergens' => '',
                    'description' => null,
                ],
                [
                    'name' => 'Darjeeling Premium',
                    'full_price' => '45',
                    'allergens' => '',
                    'description' => null,
                ],
            ],

        ];

        foreach ($menuData as $categoryName => $items) {
            $categoryId = DB::table('categories')->where('name', $categoryName)->value('id');

            foreach ($items as $item) {
                DB::table('menus')->insert([
                    'uuid' => Str::uuid(),
                    'name' => $item['name'],
                    'category_id' => $categoryId,
                    'description' => $item['description'] ?? null,
                    'avatar' => null,
                    'is_featured' => false,
                    'status' => true,
                    'full_price' => $item['full_price'] ?? null,
                    'half_price' => $item['half_price'] ?? null,
                    'is_starter' => false,
                    'allergens' => $item['allergens'] ?? null,
                    'data' => null,
                    'attribute' => null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }

   }
