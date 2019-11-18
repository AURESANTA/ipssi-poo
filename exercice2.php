<?php
require_once('vendor/autoload.php');

use Ipssi\Evaluation\Document;
use Ipssi\Evaluation\Star;
use Ipssi\Evaluation\Cloud;
use Ipssi\Evaluation\Image;
use Ipssi\Evaluation\Text;
use Ipssi\Evaluation\Color;

$TestDocument = new Document('Un document cool', new Color(255,255,255));
$Text = new Text(10,10, new Color(255,255,0), 50, 'Un texte cool');
$Star = new Star(new Color(255,255,0), 50, 150, 150);
$Cloud = new Cloud(new Color(255,255,0),50, 200, 200);
$Image = new Image('Une photo cool',320, 320, 200, 200);

$TestDocument2 = new Document('Un document trèèèèès cool', new Color(255,255,255));
$Text2 = new Text(10,10, new Color(255,255,0), 50, 'Un texte encore plus cool');
$Star2 = new Star(new Color(255,255,0), 100, 250, 250);
$Cloud2 = new Cloud(new Color(255,255,0),100, 250, 250);
$Image = new Image('Une photo cool',320, 320, 200, 200);


echo "\r\n";

$TestDocument->addElement($Text);
$TestDocument->addElement($Star);
$TestDocument->addElement($Cloud);
$TestDocument->addElement($Image);
$TestDocument->getContent();
$TestDocument->__toString();

echo "\r\n";

$TestDocument2->addElement($Text);
$TestDocument2->addElement($Star2);
$TestDocument2->addElement($Cloud2);
$TestDocument2->addElement($Image);
$TestDocument2->getContent();
$TestDocument2->__toString();

echo "\r\n";