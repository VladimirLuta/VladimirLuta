
<?php

require 'tracy/tracy.phar';
use Tracy\Debugger;
use Tracy\OutputDebugger;
Debugger::enable();
Debugger::$strictMode = true;

echo "ahoj"

?>
