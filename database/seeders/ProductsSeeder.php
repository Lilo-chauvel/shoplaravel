<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->truncate();

        $bikes = [
            [
                'name' => 'Trek Madone SLR 9 eTap Gen 7',
                'description' => 'Vélo de route aérodynamique haut de gamme avec transmission électronique SRAM eTap. Cadre en carbone OCLV 800 ultraléger et géométrie optimisée pour la performance.',
                'image'=> 'https://www.balfesbikes.co.uk/images/products/M/Ma/MadoneSLR9eTap_23_37420_A_Primary.png?width=1998&height=1998&quality=85&mode=pad&format=webp&bgcolor=ffffff',
                'price' => 12999.99,
                'stock' => 3,
                ],
                [
                    'name' => 'Specialized S-Works Tarmac SL8 Dura-Ace Di2',
                    'description' => 'Le summum de la performance en vélo de route. Cadre en carbone S-Works, groupe Shimano Dura-Ace Di2 12 vitesses, poids plume de 6.8kg.',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_yUEvWI8fyXi9BeFz1EhRDu3HoN1H226ykw&s',
                    'price' => 13499.99,
                'stock' => 2,
            ],
            [
                'name' => 'Cube Litening Aero C68x Pro',
                'description' => 'Vélo aérodynamique de compétition avec profils optimisés pour fendre l\'air. Carbone C68x haute modularité et composants pro-level.',
                    'image'=>'https://www.cubebikes.fr/16086/litening-aero-c-68x.jpg',
                'price' => 8999.99,
                'stock' => 5,
            ],
            [
                'name' => 'Scott Foil RC Ultimate',
                'description' => 'Machine de contre-la-montre et de sprints. Intégration totale des câbles, aérodynamisme poussé à l\'extrême, rigidité maximale.',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYv-TLfdjwmvUhlhRVX-EwsGS0I24tY5Et9Q&s',
                'price' => 11499.99,
                'stock' => 4,
            ],
            [
                'name' => 'Focus Izalco Max Disc 9.7 Ultegra Di2',
                'description' => 'Vélo de route polyvalent avec freins à disque hydrauliques. Groupe Shimano Ultegra Di2, confort et performance pour les longues sorties.',
                'image'=> 'https://cloudinary.pondigital.solutions/pon-digital-solutions/image/upload/q_auto,f_auto,e_trim/dmp.pon.bike/1280_NTIyUKuCdU91AqSO.png?v1',
                'price' => 5499.99,
                'stock' => 8,
            ],
            [
                'name' => 'Canyon Ultimate CFR eTap',
                'description' => 'Grimpeur d\'exception, poids plume avec cadre CFR en carbone. Transmission sans fil SRAM RED eTap AXS, idéal pour la haute montagne.',
                    'image'=>'https://www.canyon.com/dw/image/v2/BCML_PRD/on/demandware.static/-/Sites-canyon-master/default/dw2559619f/images/full/full_2023_/2023/full_2023_ultimate-cfr-etap_3324_P01_P5.jpg?sw=750&sfrm=png&q=90&bgcolor=F2F2F2',
                'price' => 9999.99,
                'stock' => 6,
            ],
            [
                'name' => 'Wilier Cento10 SL Disc 105 Di2',
                'description' => 'Design italien élégant et performance au rendez-vous. Freins à disque pour un freinage optimal, groupe Shimano 105 Di2 électronique.',
                    'image'=>'https://wilier-cdn.thron.com/delivery/public/image/wilier/5c0a8c8b-75dc-4df3-916f-94022218f938/nkvzio/std/0x0/_d14_1?scalemode=product&format=webp&quality=low',
                'price' => 4799.99,
                'stock' => 7,
            ],
            [
                'name' => 'Pinarello Dogma F Disc Frameset',
                'description' => 'Le cadre légendaire des pros du World Tour. Géométrie Dogma F révolutionnaire, intégration totale, carbone Torayca T1100 1K.',
                    'image'=>'https://www.lafobikes.com/cdn/shop/files/2025-pinarello-most-dogma-f-disc-frameset-luxter-blue-1130365068.jpg?v=1739525811',
                'price' => 6999.99,
                'stock' => 3,
            ],
            [
                'name' => 'Colnago V3RS',
                'description' => 'La quintessence du savoir-faire italien. Légèreté extrême (moins de 7kg), rigidité exceptionnelle, esthétique incomparable.',
                    'image'=>'https://www.velodrom.cc/cdn/shop/files/colnago-v3rs-disc-complete-bike-road-shimano-ultegra-r8170-fulcrum-racing-win-400-rwic.webp?v=1730127536',
                'price' => 10499.99,
                'stock' => 4,
            ],
            [
                'name' => 'BMC Teammachine SLR01',
                'description' => 'Vélo de route race orienté montagne. Cadre Premium Carbon, poste de pilotage ICS intégré, parfait équilibre poids/rigidité.',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQt4iTA4RWplXN5I52f9fA2jZd2ZQ8DADCy9A&s',
                'price' => 9299.99,
                'stock' => 5,
            ],
            [
                'name' => 'Cervélo S5 Force eTap AXS',
                'description' => 'Aérodynamisme canadien de pointe. Profils tronqués V-Stem, intégration maximale, vitesse pure pour les contre-la-montre.',
                    'image'=>'https://www.freecycle.fr/21601-large_default/cervelo-s5-force-etap-axs-2025.jpg',
                'price' => 11999.99,
                'stock' => 3,
            ],
            [
                'name' => 'Giant TCR Advanced SL',
                'description' => 'Race bike polyvalent par excellence. Carbone Advanced SL-Grade, géométrie race, rapport qualité/prix imbattable.',
                    'image'=>'https://veloseine.fr/10771-large_default/tcr-advanced-sl-0-dura-ace-2025.jpg',
                'price' => 4299.99,
                'stock' => 12,
            ],
            [
                'name' => 'Bianchi Oltre RC',
                'description' => 'Couleur céleste et performance italienne. Carbone Countervail pour absorber les vibrations, aérodynamisme et confort.',
                    'image'=>'https://www.materiel-velo.com/97970-large_default/velo-route-bianchi-oltre-rc-sram-red-etap-axs-12v-xr-graphite-carbon-ck16-alu-silver-full-matt-2023.jpg',
                'price' => 8799.99,
                'stock' => 6,
            ],
            [
                'name' => 'Ridley Noah SL Red eTap AXS',
                'description' => 'Aero bike belge de haute volée. Tubes profilés F-Surface Plus, cockpit intégré, transmission SRAM Red sans fil.',
                    'image'=>'https://www.clarkesofcavan.ie/site/uploads/sys_products/ridley-noah-disc-sram-rival.webp',
                'price' => 10799.99,
                'stock' => 4,
            ],
            [
                'name' => 'Lapierre Aircode SL 900 Ultimate',
                'description' => 'Vélo français de course aérodynamique. Carbone 900 HM, géométrie agressive, parfait pour les courses critériums.',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQr917eFXD7tQc-Aj12fluJRan8xRjqtWyjAg&s',
                'price' => 7999.99,
                'stock' => 5,
            ],
            [
                'name' => 'Orbea Orca M20',
                'description' => 'Grimpeur espagnol léger et réactif. Carbone OMR, géométrie Orca équilibrée, idéal pour les cols pyrénéens.',
                    'image'=>'https://www.velosport.fr/6886-large_new/orca-m20i-team-2026.jpg',
                'price' => 3999.99,
                'stock' => 9,
            ],
            [
                'name' => 'BH G7 Pro',
                'description' => 'Vélo de route espagnol polyvalent. Carbone haute performance, confort longue distance, freins à disque hydrauliques.',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFSHvUlhbEsQHJRJCJWN53W-lw2sExpQNWiw&s',
                'price' => 3499.99,
                'stock' => 10,
            ],
            [
                'name' => 'Felt AR Advanced Ultegra Di2',
                'description' => 'Aero road bike américain performant. Tube de direction intégré, découpes aérodynamiques, vitesse et confort.',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2PLhXzmhIOYV9ZDC6yWT6fj_l9JXxgWA4xA&s',
                'price' => 5999.99,
                'stock' => 7,
            ],
            [
                'name' => 'Storck Aerfast 4',
                'description' => 'Ingénierie allemande au service de l\'aérodynamisme. Cadre monocoque en carbone T1000, rigidité légendaire.',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJpYx97Z1eQKJZPoZ76qNTfb-5Asnt4b_VNA&s',
                'price' => 9499.99,
                'stock' => 4,
            ],
            [
                'name' => 'Allied Cycle Works Alfa',
                'description' => 'Vélo artisanal américain en carbone. Fabriqué aux USA, géométrie sur-mesure disponible, exclusivité garantie.',
                    'image'=>'https://cdn.shopify.com/s/files/1/0252/9997/6243/files/AlfaUltegra-017-2_1.jpg',
                'price' => 7499.99,
                'stock' => 3,
            ],
            [
                'name' => 'Kestrel Talon X Dura-Ace',
                'description' => 'Pionnier américain des cadres carbone. Technologie Kestrel éprouvée, groupe Shimano Dura-Ace mécanique.',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQqSC0UAZ5sBPVtwEpQmBooVTk_ej_PQXTvtw&s',
                'price' => 6799.99,
                'stock' => 6,
            ],
            [
                'name' => 'Argon 18 Gallium Pro Ultegra',
                'description' => 'Vélo de route canadien race. Géométrie 3D Headtube, carbone haute performance, équilibre parfait.',
                    'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRC_ImUNcJnq1SoN--6IyFOYG8cEzfBX-UEYg&s',
                'price' => 5299.99,
                'stock' => 8,
            ],
            [
                'name' => 'De Rosa SK Pininfarina',
                'description' => 'Design italien signé Pininfarina. Esthétique unique, carbone De Rosa, made in Italy avec passion.',
                    'image'=>'https://kreta.ciclimattio.com/admin/components/specifiche/Ciclimattio/images/Generale/B96A4205-2_SK_BIANCA_BLU-1-scaled.webp',
                'price' => 11299.99,
                'stock' => 2,
            ],
            [
                'name' => 'Look 795 Blade RS Force',
                'description' => 'Excellence française en carbone. Technologie Blade pour un confort optimal, rigidité latérale exceptionnelle.',
                    'image'=>'https://www.freecycle.fr/20511-large_default/look-795-blade-2-rs-dura-ace-r50d-2025.jpg',
                'price' => 8499.99,
                'stock' => 5,
            ],
        ];

        $products = [];
        $imageId = 100; // ID de départ pour les images de vélos
        foreach ($bikes as $index=>$bike) {

            $products[] = [
                'name' => $bike['name'],
                'slug' => Str::slug($bike['name']),
                'description' => $bike['description'],
                'image'=> $bike['image'],
                'price' => $bike['price'],
                'stock' => $bike['stock'],
                'category_id' => rand(1, 5),
                'created_at' => now()->subDays(rand(1, 60)),
                'updated_at' => now()->subDays(rand(0, 30)),
            ];
            $imageId++;
        }

        DB::table('products')->insert($products);
    }
}
