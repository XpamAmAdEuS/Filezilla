<?php
use MitFilezilla\MitFilezilla;

echo '<pre>';

$parser = new MitFilezilla('FileZilla Server.xml');
$admin = $parser->parse();
//print_r( $parser );

foreach ($admin->getSettings() as $name=> $item) {
    echo "$name = $item->value<br/>" ;
}

echo '</pre>';