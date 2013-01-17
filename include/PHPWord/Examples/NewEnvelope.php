<?php
require_once '../PHPWord.php';
$output_filename = 'RonEnvelope.docx';

$PHPWord = new PHPWord();

$document = $PHPWord->loadTemplate('RonEnvelopeTemplate.docx');

$document->setValue('Value1', $_GET["Value1"]);
$document->setValue('Value2', $_GET["Value2"]);
$document->setValue('Value3', $_GET["Value3"]);

$document->save($output_filename);

 header('Location: '.$output_filename);
?>