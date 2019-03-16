<?php
try {
    if (isset($_POST['fname']) &&
        isset($_POST['fcateg'])&&
        isset($_POST['fdescription']) &&
        isset($_POST['fprice']) &&
        isset($POST['fquantity'])){
        
        require_once("config.php");
        //get seller id
        //$reqGetIDSeller=$bdd->prepare('SELECT id FROM members WHERE pseudo_member = :pseudo');
        //get category id
        $reqGetIDCateg=$bdd->prepare('SELECT id FROM categories WHERE name_category = :categ');
        //main request
        $req=$bdd->prepare('INSERT INTO `articles` (`id_seller`, `id_category`, `date_article`, `name_article`, `price_article`, `quantity_article`, `description_article`) VALUES (:idseller,:idcateg,:date,:name,:price,:quantity,:desc)');

        $resultIDCateg = $reqGetIDCateg->execute($_POST['fcateg']);
        //$IDSeller = $resultIDSeller['id'];
        $IDCateg = $resultIDCateg['id'];

        $insertData = [
            'idseller'=> $_SESSION['id'],
            'idcateg'=>$IDCateg,
            'date'=>date("Y-M-d"),
            'name'=>$_POST['fname'],
            'price'=>$_POST['fprice'],
            'quantity'=>$_POST['fquantity'],
            'desc'=>$_POST['fdescription']
        ];
        
        $req->execute($insertData);
    }
    
} catch (Exception $ex) {

}
header("Location: /");