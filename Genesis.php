<?php

require_once './BoilerplateP4wsClasses.php';
require_once './BoilerplateP4wsFunctions.php';

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

            /*Component Piece : "ExpandiblesImages"
                kvtag_('link',[ 
                    'rel' => 'stylesheet',
                    'href' => './Components/Expandibles_Images/ExpandiblesImages.css'
                ])
            ###*/

        ]),

        body([

            h1(1,'BoilerplateP4ws. Hello World.'),

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

],'Piezas4WebSites -> RamiGGlez 00');

$uno_igual_a_formato_json_cero_ejecuta_html = 0;

focuspocus($genesis,$uno_igual_a_formato_json_cero_ejecuta_html);
