<?php
require_once '../PHPWord.php';
$output_filename = 'RonEnvelope.docx';

$PHPWord = new PHPWord();

$document = $PHPWord->loadTemplate('RonEnvelopeTemplate.docx');

$document->setValue('Value1', 'Mr. and Mrs. John Sample');
$document->setValue('Value2', '123 Main St\nPOB 234');
$document->setValue('Value3', 'Hampton, NH 03842-5699');

$document->save($output_filename);

 header('Location: '.$output_filename);
?>