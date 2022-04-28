<?php

    #COMPONENTES

        /**div
         * Esta etiqueta 
         * es utilizada para 
         * agrupar otras,
         * es una caja generica
         * sin sentido semantico
         */

        #imagenes expandibles
        
        function images() {
            return (new Boilerplate('div',0,[
                'class' => 'container'
            ],[
                (new Boilerplate('div',0,['class'=>'panel active','id'=>'img01'],
                    (new Boilerplate('h3',0,[],'Explore The Code'))->get()
                ))->get(),
                (new Boilerplate('div',0,['class'=>'panel','id'=>'img02'],
                    (new Boilerplate('h3',0,[],'Explore The Code'))->get()
                ))->get(),
                (new Boilerplate('div',0,['class'=>'panel','id'=>'img03'],
                    (new Boilerplate('h3',0,[],'Explore The Code'))->get()
                ))->get(),
                (new Boilerplate('div',0,['class'=>'panel','id'=>'img04'],
                    (new Boilerplate('h3',0,[],'Explore The Code'))->get()
                ))->get(),
                (new Boilerplate('div',0,['class'=>'panel','id'=>'img05'],
                    (new Boilerplate('h3',0,[],'Explore The Code'))->get()
                ))->get()
            ]
            ))->get();
        }

    #FIN DEL BLOQUE COMPONENTES

?>