<?php include_once './includes/header.php'; 

try{

    $availablePostValues = ['id','gusto','prezzo','disponibilita'];
    include __DIR__ . '/includes/checkPostFields.php';

}catch(Exception $e){
    echo $e->getMessage();
}

$sql = "UPDATE pizze 
SET gusto=:gusto,prezzo=:prezzo,disponibilita=:disponibilita
WHERE id = :id";

$query = $db->prepare($sql);

$query->bindParam(':id', $id, PDO::PARAM_INT);
$query->bindParam(':gusto', $gusto, PDO::PARAM_STR);
$query->bindParam(':prezzo', $prezzo, PDO::PARAM_INT);
$query->bindParam(':disponibilita', $disponibilita, PDO::PARAM_BOOL);

if($query->execute()){
    header("Location: index.php?message=Pizza Modificata con successo!");
}else{
    echo $query->errorInfo();
}

