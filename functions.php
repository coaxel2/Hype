<?php
/**
 * Récupère la liste des reportages
 * En production, ces données viendraient d'une base de données
 */
function getReportages() {
    return [
        [
            'id' => 1,
            'titre' => 'La Cité du Vin',
            'lieu' => 'Quai de Bacalan, Bordeaux',
            'date' => '2025-11-15',
            'image' => 'assets/images/reportages/cite-vin.jpg',
            'extrait' => 'Immersion dans le temple moderne de la culture viticole bordelaise.',
            'description' => 'La Cité du Vin est bien plus qu\'un musée, c\'est une expérience sensorielle unique qui célèbre le patrimoine viticole de Bordeaux et du monde entier. Nous avons exploré ses expositions interactives, dégusté des vins d\'exception au belvédère, et découvert l\'histoire fascinante du vignoble bordelais.',
            'galerie' => [
                'assets/images/reportages/cite-vin-1.jpg',
                'assets/images/reportages/cite-vin-2.jpg',
                'assets/images/reportages/cite-vin-3.jpg',
            ]
        ],
        [
            'id' => 2,
            'titre' => 'Les Quais de Bordeaux',
            'lieu' => 'Quais de la Garonne, Bordeaux',
            'date' => '2025-11-08',
            'image' => 'assets/images/reportages/quais.jpg',
            'extrait' => 'Balade le long des quais classés au patrimoine mondial de l\'UNESCO.',
            'description' => 'Les quais de Bordeaux offrent un cadre exceptionnel pour se promener, faire du vélo ou simplement profiter de la vue sur la Garonne. Entre le Miroir d\'eau, la Place de la Bourse et les nombreux restaurants et bars, c\'est le cœur battant de la ville qui révèle toute sa splendeur, particulièrement au coucher du soleil.',
            'galerie' => [
                'assets/images/reportages/quais-1.jpg',
                'assets/images/reportages/quais-2.jpg',
                'assets/images/reportages/quais-3.jpg',
            ]
        ],
        [
            'id' => 3,
            'titre' => 'Darwin Écosystème',
            'lieu' => 'Rive Droite, Bordeaux',
            'date' => '2025-10-28',
            'image' => 'assets/images/reportages/darwin.jpg',
            'extrait' => 'L\'esprit alternatif et créatif de la rive droite bordelaise.',
            'description' => 'Darwin est un lieu unique en son genre : une ancienne caserne militaire reconvertie en espace de vie alternatif. Entre skatepark, restaurants bio, street art monumental et espaces de coworking, Darwin incarne l\'esprit créatif et engagé de Bordeaux. Un lieu où l\'économie sociale et solidaire prend tout son sens.',
            'galerie' => [
                'assets/images/reportages/darwin-1.jpg',
                'assets/images/reportages/darwin-2.jpg',
                'assets/images/reportages/darwin-3.jpg',
            ]
        ],
        [
            'id' => 4,
            'titre' => 'Le Marché des Capucins',
            'lieu' => 'Place des Capucins, Bordeaux',
            'date' => '2025-10-20',
            'image' => 'assets/images/reportages/capucins.jpg',
            'extrait' => 'Le ventre gourmand de Bordeaux et son ambiance authentique.',
            'description' => 'Le marché des Capucins est l\'un des plus anciens et authentiques marchés de Bordeaux. Dès l\'aube, producteurs locaux, fromagers, poissonniers et bouchers animent ce lieu incontournable. On y vient pour les produits frais, mais aussi pour l\'ambiance chaleureuse et les dégustations d\'huîtres accompagnées de vin blanc.',
            'galerie' => [
                'assets/images/reportages/capucins-1.jpg',
                'assets/images/reportages/capucins-2.jpg',
                'assets/images/reportages/capucins-3.jpg',
            ]
        ],
        [
            'id' => 5,
            'titre' => 'Le Bassin des Lumières',
            'lieu' => 'Base Sous-Marine, Bordeaux',
            'date' => '2025-10-12',
            'image' => 'assets/images/reportages/bassins-lumieres.jpg',
            'extrait' => 'Art numérique immersif dans un lieu historique exceptionnel.',
            'description' => 'Installé dans l\'ancienne base sous-marine de la Seconde Guerre mondiale, le Bassin des Lumières est le plus grand centre d\'art numérique au monde. Les projections monumentales transforment ce lieu chargé d\'histoire en une expérience artistique immersive et émouvante, où les œuvres des grands maîtres prennent vie sur les murs de béton.',
            'galerie' => [
                'assets/images/reportages/bassins-lumieres-1.jpg',
                'assets/images/reportages/bassins-lumieres-2.jpg',
                'assets/images/reportages/bassins-lumieres-3.jpg',
            ]
        ],
        [
            'id' => 6,
            'titre' => 'Le Jardin Public',
            'lieu' => 'Centre-ville, Bordeaux',
            'date' => '2025-10-05',
            'image' => 'assets/images/reportages/jardin-public.jpg',
            'extrait' => 'Un havre de paix au cœur de la ville pour se ressourcer.',
            'description' => 'Le Jardin Public est le poumon vert de Bordeaux. Ce parc à l\'anglaise du XVIIIe siècle offre un cadre idyllique pour se détendre, pique-niquer ou simplement profiter de la nature. Avec son arboretum, son petit pont romantique et ses vastes pelouses, c\'est l\'endroit parfait pour échapper à l\'agitation urbaine.',
            'galerie' => [
                'assets/images/reportages/jardin-public-1.jpg',
                'assets/images/reportages/jardin-public-2.jpg',
                'assets/images/reportages/jardin-public-3.jpg',
            ]
        ]
    ];
}

/**
 * Récupère un reportage par son ID
 */
function getReportageById($id) {
    $reportages = getReportages();
    foreach ($reportages as $reportage) {
        if ($reportage['id'] == $id) {
            return $reportage;
        }
    }
    return null;
}
