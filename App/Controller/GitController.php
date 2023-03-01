<?php
namespace App\Controller;

use App\Model\GitModel;

class GitController{
    public function iniciar(){
        $gitModel = new GitModel();
        return $gitModel->dados();
    }
}
?>