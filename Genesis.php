<?php

require_once './BoilerplateP4wsClasses.php';
require_once './BoilerplateP4wsFunctions.php';
require_once './Components/Expandibles_Images/ExpandiblesImages.php';

$genesis = block([

    doct(),

    html([

        head([

            meta_charset(),

            meta_viewport(),

            title('Piezas4WebSites'),

            _link(),

            kvtag_('link',[
                'rel' => 'icon',
                'type' => 'image/png',
                'href' => './favicon/puzzle.png'
            ]),

            #/*Component Piece
                kvtag_('link',[ #ExpandiblesImages
                    'rel' => 'stylesheet',
                    'href' => './Components/Expandibles_Images/ExpandiblesImages.css'
                ])
            ###*/

        ]),

        body([

            h1(1,'Boilerplate. Hello World.'),

            #/*Component Piece
                images(), #ExpandiblesImages
            ###*/

            #/*Component Piece
                kvtag_('script',[ #ExpandiblesImages
                    'src' => './Components/Expandibles_Images/ExpandiblesImages.js'
                ]),
            ###*/

            main_script(),

            fa_script()

        ])

    ])

],'Piezas4WebSites -> RamiGGlez 00');

$uno_igual_a_formato_json_cero_ejecuta_html = 0;

focuspocus($genesis,$uno_igual_a_formato_json_cero_ejecuta_html);