<?php

require_once './BoilerplateP4wsClasses.php';
require_once './BoilerplateP4wsFunctionsCurrent/BoilerplateP4wsFunctions.php';

########################################################################-------COMPONENTS------------###

    #/*Component Piece : "ExpandiblesImages"
        require_once './Components/Expandibles_Images/ExpandiblesImages.php';
    ###*/

#-------COMPONENTS------------###

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

            #/*Component Piece : "ExpandiblesImages"
                kvtag_('link',[ 
                    'rel' => 'stylesheet',
                    'href' => './Components/Expandibles_Images/ExpandiblesImages.css'
                ])
            ###*/

        ]),

        body([

            h1(1,'BoilerplateP4ws. Hello World.'),

            kvtag('a',[
                'href' => 'http://boilerplatep4ws.lol/GENESIS'
            ],'GENESIS'),

            "<br><br>",

            kvtag('a',[
                'href' => 'https://github.com/ramigglez/BoilerplateP4ws'
            ],'Version : {CURRENT.} (SOURCE CODE)'),

            "<br><br>",

            #/*Component Piece : "ExpandiblesImages"
                images(),
            ###*/

            #/*Component Piece : "ExpandiblesImages"
                kvtag_('script',[
                    'src' => './Components/Expandibles_Images/ExpandiblesImages.js'
                ]),
            ###*/

            main_script(),

            fa_script()

        ])

    ])

],'Piezas4WebSites -> RamiGGlez 00 : GENESIS Block Number 0');

$uno_igual_a_formato_json_cero_ejecuta_html = 1;