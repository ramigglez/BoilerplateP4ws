<?php 

require_once './Genesis.php'; 
require_once './Components/TodoList/Genesis.php';
#add more (submodles) blocks here .............

    $MyBlockChain = genesis($genesis);

    $MyBlockChain->minarListDeBlocks([
        $todos
        //add the submodule name (variable) here ............
    ]);

    #showChain($MyBlockChain);

    /**
     * Como obtener el primer bloque ?
     */

    #CHANGE THE INDEX OF CHAIN TO SHOW A DIFFERENT PROJECT
     //runHtml(json_decode($MyBlockChain->chain())[0]->data);

    //ver la blockchain o ejecutar html

    $runOrNot = true;

    if ($runOrNot) {
        showChain($MyBlockChain);
    } else {
        runHtml(json_decode($MyBlockChain->chain())[0]->data);
    }

?>