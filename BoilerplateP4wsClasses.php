<?php

class Boilerplate {

    protected string|null $element = null;

    public function __construct ($tag = 'html',$type = 0,$attrs = [],$content = []) {

        $this->element = "<$tag".$this->__attrs($type,$attrs).">".$this->__content($content)."</$tag>";

    }

    protected function __attrs (int $type = 0,array $attrs) {
        $attributes = '';
        if ($type === 0) {
            foreach ($attrs as $key => $value) {
                $attributes .= " ".$key."='".$value."'";
            }
        }elseif ($type === 1){
            for ($i = 0; $i < count($attrs); $i++) {
                $attributes .= " ".$attrs[$i];
            }
        } else {
            if (array_key_exists('kv',$attrs) && array_key_exists('il',$attrs)) {
                foreach ($attrs['kv'] as $key => $value) {
                    $attributes .= " ".$key."='".$value."'";
                }
                for ($i = 0; $i < count($attrs['il']); $i++) {
                    $attributes .= " ".$attrs['il'][$i];
                }
            }else{
                die('Claves Incorrectas ... Utiliza kv & il para combinar atributos');
            }
        }
        return $attributes;
    }

    protected function __content ($content) {
        $data = null;
        if (is_array($content)) {
            for ($i = 0; $i < count($content); $i++) {
                if (is_array($content[$i])) {
                    $data .= $this->__content($content[$i]);
                } else {
                    $data .= $content[$i];
                }
            }
        }else{
            $data = $content;
        }
        return $data;
    }

    public function get () : string {
        return $this->element;
    }

}

class Bplate extends Boilerplate {

    public function __construct ($tag,$type,$attrs) {
        if ($tag === '!DOCTYPE') {
            $this->element = "<$tag".$this->__attrs($type,$attrs).">";
        }else{
            $this->element = "<$tag".$this->__attrs($type,$attrs)."/>";
        }
    }

}

class Block extends Bplate {

    protected $data = null;

    public function __construct ($data) {
        $this->data = $this->__content($data);
    }

    public function _get ($previous_hash_OR_block_name = 'genesis') {

        $nonce = 0;

        $data = [
            'html' => $this->data,
            'previous' => $previous_hash_OR_block_name
        ];

        $this->data .= '  '.$nonce;

        do {
            $content = explode('  ',$this->data);
            $nonce++;
            $content[1] = $nonce;
            $this->data = implode('  ',$content);
            $data = [
                'html' => $this->data,
                'previous' => $previous_hash_OR_block_name
            ];
            $hash = hash('sha256',implode('',$data));
            $aux = substr($hash,0,2);
        } while ($aux !== '00');

        return json_encode([
            'hash' => $hash,
            'previous' => $previous_hash_OR_block_name,
            'data' => htmlspecialchars($this->data)
        ]);
    }

}

class Piezas4websitesClass extends Block {

    private string $txt = '';

    public function __construct (string $txt = 'hello world.') {
        $this->txt = $txt;
    }

    public function getTxt () : string {
        return $this->txt;
    }

    public function setTxt (string $txt) {
        $this->txt = $txt;
    }

    public function createHeaderString ($tag, $attr, $x = 0) {
        
        $attributes = '';
        foreach ($attr as $key => $value) {
            $attributes .= " ".$key."='".$value."'";
        }
        if ($x === 0) {
            return "<{$tag}{$attributes}>";
        }else{
            return "</{$tag}>";
        }
        
    }

    public function _createHeaderString ($tag, $attrs, $x = 0) {
        
        $attributes = '';
        for ($i = 0; $i < count($attrs); $i++) {
            $attributes .= " ".$attrs[$i];
        }
        if ($x === 0) {
            return "<{$tag}{$attributes}>";
        }else{
            return "</{$tag}>";
        }
        
    }
    /*
    *@param keys $mixed = [
        "keyval" => [],
        "inline" => []
    ]
    */
    public function createAttrsMixedList (array $mixed = []) {
        $attributes = '';
        if (array_key_exists('keyval',$mixed) && array_key_exists('inline',$mixed)) {
            foreach ($mixed['keyval'] as $key => $value) {
                $attributes .= " ".$key."='".$value."'";
            }
            for ($i = 0; $i < count($mixed['inline']); $i++) {
                $attributes .= " ".$mixed['inline'][$i];
            }
            return $attributes;
        } else {
            echo "<script>alert('the keys are not valid.');</script>";
        }
    }

}

class _3bp extends Piezas4websitesClass {

    #  --- @ CREATE --- @ YOUR --- @ OWN --- @ HELLO WORLD ---  #

    private array|null $the_chain = null;

    private function setGenesisBlock ($block) {
        $this->the_chain[0] = json_decode($block);
    }

    public function __construct ($block = null) {
        if($block != null) {
            $this->setGenesisBlock($block);
        }
    }

    private function getFirst () {
        return $this->the_chain[0];
    }

    private function getLast () {
        return $this->the_chain[count($this->the_chain)-1];
    }

    protected function mineSecondBlock ($block) {

        $first = $this->getFirst();
        $first_hash = $first->hash;

        $block->previous = $first_hash;

        $block->hash = hash('sha256',implode('',[
            $first_hash
        ]));

        $nonce = 0;

        $block->hash .= '  '.$nonce;

        do {
            $content = explode('  ',$block->hash);
            $nonce++;
            $content[1] = $nonce;
            $block->hash = implode('  ',$content);
            $data = [
                'valid_hash' => $block->hash
            ];
            $hash = hash('sha256',implode('',$data));
            $aux = substr($hash,0,2);
        } while ($aux !== '00');

        $block->hash = $hash;

        /*
            echo "<pre>";
            var_dump(json_decode(json_encode($block)));return;
        */
        $this->the_chain[1] = (array)$block;

    }

    private function keep_mining ($list) {

        for ($i = 1; $i < count($list); $i++) {

            $previous = $this->getLast();

            $previous_hash = $previous['hash'];

            $list[$i] = json_decode($list[$i]);

            $list[$i]->previous = $previous_hash;

            $list[$i]->hash = hash('sha256',implode('',[
                $previous_hash
            ]));

            $nonce = 0;

            $list[$i]->hash .= '  '.$nonce;

            do {
                $content = explode('  ',$list[$i]->hash);
                $nonce++;
                $content[1] = $nonce;
                $list[$i]->hash = implode('  ',$content);
                $data = [
                    'valid_hash' => $list[$i]->hash
                ];
                $hash = hash('sha256',implode('',$data));
                $aux = substr($hash,0,2);
            } while ($aux !== '00');
    
            $list[$i]->hash = $hash;

            $this->the_chain[] = (array)$list[$i];

        }

    }

    public function minarListDeBlocks ($blockList = null) {

        if($blockList === null) {
            return $this->chain();
        } else {

            $this->mineSecondBlock (json_decode($blockList[0]));

            $this->keep_mining ($blockList);

        }

    }

    public function chain () {
        return json_encode($this->the_chain);
    }

}