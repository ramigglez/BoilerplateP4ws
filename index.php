<?php

require_once './BoilerplateP4wsClasses.php';
require_once './BoilerplateP4wsFunctions.php';

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
            ])

        ]),

        body([
            h1(1,'Boilerplate. Hello World.'),
            images(),
            main_script(),
            fa_script()

        ])

    ])

],'None');

focuspocus($genesis,1);