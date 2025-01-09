<?php
$ciao = 'Hello World!';
?> 
<?php include __DIR__.'/inc/header.php' ?>
<?php
echo $ciao;//L'output sarà Ciao mondo perché all'interno del file header incluso il suo valore viene modificato. 
?>
<main>
    <h1>Chi Siamo</h1>
    
</main>
    

<?php include __DIR__.'/inc/footer.php' ?>