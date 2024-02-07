<?php

    if(isset($_FILES['imagem'])){
        $img_name = $_FILES['imagem']['name'];
        $tmp_name = $_FILES['imagem']['tmp_name'];

        $explode = explode('.',$img_name); //Transformando o array imagem em string

        $pegar_formatos = end($explode); // Essa funcao ira pegar os ultimos elemeto do array que sao os formatos

        $formatos = ['png','jpg','jpeg'];

        if(in_array($pegar_formatos, $formatos)){

            $gerar_numeros = time();
            $novo_nome = $gerar_numeros.$img_name;

            if(move_uploaded_file($tmp_name, "imagens/".$novo_nome)){
                echo "Upload feito com sucesso!";
            }else {
                echo "Erro ao fazer upload de imagem tente mais tarde!";
            }
        }else {
            echo "Por favor selecione imagem PNG-JPEG-JPG";
        }

    }else {
        echo "Por favor selecione uma imagem!";
    }