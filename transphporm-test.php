<?php
require_once 'vendor/autoload.php';

$xml = '<body><main>main</main></body>';
$tss = 'main { content: template(\'include.xml\'); }
#element {content: "updated!"}
';


$transphporm = new \Transphporm\Builder($xml, $tss);

echo $transphporm->output()->body;
