<?php
namespace App\Services;
use App\Model\Repository\TagsRepository;
use App\Model\Entity\Tags;
use PDOException;
class TagsServices{ 
    private $TagsRepository;
    public function __construct(){
     $this->TagsRepository=new TagsRepository();
    }
    public function CreatTags($TagsName,$categoryId){
        try{
       
        $Tag=new Tags($TagsName,$categoryId);
        $this->TagsRepository->AddTags($Tag);
        }
        catch(PDOException $e){
            echo "failed to creat a category".$e->getMessage();
        }
    }
    public function getAll(){
        $Tag=new TagsRepository();
        $Tags=$Tag->displayAllTags();
        return $Tags;
    }

}