<?php
namespace LOJA\incluedes;
class Util{
    
    public static function uploadImg(){
        // ENVIA IMAGEM
        $target_dir = "View/img/produtos/"; // MUDA DIRETÓRIO
        // $target_file = $target_dir . basename($_FILES["imagem"]["name"]); // PEGA O ARQUIVO
        $uploadOk = 1; // 1 QUER DIZER OK
        $extension = strtolower(pathinfo($_FILES["imagem"]["name"] ,PATHINFO_EXTENSION)); // PEGA EXTENSÃO
        $newName = md5(uniqid("")).".".$extension; // GERA NOME ALEATORIO COM A EXTENSÃO
        
        
        // VERIFICA SE IMAGEM É JPG, PNG OU GIR
        if($extension != "jpg" && $extension != "png" && $extension != "jpeg"
            && $extension != "gif" && $extension != "jfif" ) {
                $uploadOk = 0;
        }
        
        // SE estiver ok, $uploadOk =1, move o arquivo
        if ($uploadOk == 0) {
            $msg = "Error de Upload";
        } else {
            if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_dir.$newName)) {
            } else {
                $msg = "Error de Upload";
            }
        }
        
    return $newName;
    
}
}