<?php

class UploadImage{

    private $arquivo; //name do input que o usuário colocará a imagem
    private $pasta; //nome da pasta que receberá a imagem
    private $nome_substituto; //nome que irá sobrescrever o nome da imagem atual
    private $permite; //Tipo de imagem permitida, ex:png,jpg,gif,pjpeg,jpeg
    public  $error = array();

    ////////// Extrutura ////////////

    //  $imagem = array(
    //     'arquivo' => $FILES['arquivo'],
    //     'nome' => '',
    //     'destino' => '',
    //     'extensoes' => array('jpg', 'png', 'jpeg', 'gif')
    // );

	public function __construct( $file ){
        $this->arquivo = $file['arquivo'];
        $this->pasta = $file['destino'];
        $this->nome_substituto = $file['nome'];
        $this->permite = $file['extensoes'];
    }

    private function getExtensao(){
        //retorna a extensao da imagem  
        return strtolower(end(explode('.', $this->arquivo['name'])));
    }
     
    private function ehImagem($extensao){
        var_dump($extensao);
        if (in_array($extensao, $this->permite))
            return true;    
    }
    
    public function salvar(){         

        $extensao = $this->getExtensao();

        if ($this->ehImagem($extensao)){

            //gera um nome unico para a imagem em funcao do tempo
            if(!isset($this->nome_substituto)){
                $novo_nome = time() . '.' . $extensao;
            }else{
                $novo_nome = $this->nome_substituto . '.' . $extensao;
            }
            //localizacao do arquivo 
            $destino = $this->pasta . $novo_nome;

            //move o arquivo
            if (! move_uploaded_file($this->arquivo['tmp_name'], $destino)){
                if ($this->arquivo['error'] == 1)
                    array_push($this->error, "Tamanho excede o permitido");
                else
                    array_push($this->error, "Erro " . $this->arquivo['error']);
                return false;
            }
        }else{
            array_push($this->error, "Extensão não permitida");
            return false;
        }  

        return $destino;
    }   
}
?>