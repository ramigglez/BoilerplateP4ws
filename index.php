<?php 

require_once './Genesis.php'; 
require_once './Components/TodoList/Genesis.php';

    $MyBlockChain = genesis($genesis);

    $MyBlockChain->minarListDeBlocks([
        $todos
    ]);

    showChain($MyBlockChain);

?>