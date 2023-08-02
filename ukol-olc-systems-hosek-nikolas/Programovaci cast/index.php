<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>OLC Úkol</title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

spl_autoload_register(function ($className) {
    require 'class/' . $className . '.php';
});

$container = new CustomDiv();
$container->setAttributes(['class' => 'container mt-5']);
echo $container->divStart();
$row = new CustomDiv();
$row->setAttributes(['class' => 'row justify-content-center']);
echo $row->divStart();
$col = new CustomDiv();
$col->setAttributes(['class' => 'col-md-6']);
echo $col->divStart();
$card = new CustomDiv();
$card->setAttributes(['class' => 'card']);
echo $card->divStart();
$cardBody = new CustomDiv();
$cardBody->setAttributes(['class' => 'card-body']);
echo $cardBody->divStart();

$cardTitle = new Div();
$cardTitle->setAttributes(['class' => 'card-title text-center']);
$cardTitle->setValue("Testovací Formulář");
echo $cardTitle->render();  


$imgDiv = new CustomDiv();
$imgDiv->setAttributes(['class' => 'form-group text-center']);
echo $imgDiv->divStart();
$img = new Img();
$img->setAttributes(['class' => 'customImg', 'src' => 'assets/image/image.jpg', 'alt' => 'image']);
echo $img->render();
echo $imgDiv->divEnd();
//$form->addElement($img);

$form = new Form();
$form->setAttributes(['action' => 'process_form.php', 'method' => 'post']);
echo $form->formStart();

$nameDiv = new CustomDiv();
$nameDiv->setAttributes(['class' => 'form-group']);
echo $nameDiv->divStart();
$name = new Input();
$name->setAttributes(['class' =>'form-control', 'type' => 'text', 'name' => 'name', 'placeholder' => 'Jméno']);
echo $name->render();
//$form->addElement($name);
echo $nameDiv->divEnd();

$surnameDiv = new CustomDiv();
$surnameDiv->setAttributes(['class' => 'form-group']);
echo $surnameDiv->divStart();
$surname = new Input();
$surname->setAttributes(['class' =>'form-control', 'type' => 'text', 'name' => 'surname', 'placeholder' => 'Příjmení']);
echo $surname->render();
//$form->addElement($surname);
echo $surnameDiv->divEnd();

$selectDiv = new CustomDiv();
$selectDiv->setAttributes(['class' => 'form-group']);
echo $selectDiv->divStart();

$select = new Select();
$select->setAttributes(['class' =>'form-control', 'name' => 'gender']);
$select->addOption('male', 'Muž');
$select->addOption('female', 'Žena');
$select->addOption('rns', 'Nechci zmiňovat');
echo $select->render();
//$form->addElement($select);
echo $selectDiv->divEnd();

$buttonDiv = new CustomDiv();
$buttonDiv->setAttributes(['class' => 'form-group']);
echo $buttonDiv->divStart();
$button = new Input();
$button->setAttributes(['class' => 'form-control btn btn-primary', 'type' => 'submit', 'value' => 'Odeslat']);
echo $button->render();
//$form->addElement($button);
echo $buttonDiv->divEnd();

$linkDiv = new CustomDiv();
$linkDiv->setAttributes(['class' => 'form-group text-center']);
echo $linkDiv->divStart();
$link = new Link();
$link->setAttributes(['class' => 'text', 'href' => 'https://benjaminho.eu']);
$link->setValue('Domů');
echo $link->render();
echo $linkDiv->divEnd();

echo $form->formEnd();

echo $cardBody->divEnd();
echo $card->divEnd();
echo $col->divEnd();
echo $row->divEnd();
echo $container->divEnd();
?>
</body>
</html>
