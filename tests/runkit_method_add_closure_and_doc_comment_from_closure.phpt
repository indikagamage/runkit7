--TEST--
runkit_method_add() function with closure and doc_comment from closure
--SKIPIF--
<?php
	if(!extension_loaded("runkit") || !RUNKIT_FEATURE_MANIPULATION) print "skip";
?>
--INI--
display_errors=on
--FILE--
<?php
class runkit_class {
}
runkit_method_add('runkit_class','runkit_method', /** new doc_comment */ function() {});
$r1 = new ReflectionMethod('runkit_class', 'runkit_method');
echo $r1->getDocComment(), "\n";
?>
--EXPECT--
/** new doc_comment */
