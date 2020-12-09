--TEST--
htmlentities() test 6 (mbstring / ISO-8859-15)
--INI--
output_handler=
internal_encoding=ISO-8859-15
--SKIPIF--
<?php
    extension_loaded("mbstring") or die("skip mbstring not available\n");
--FILE--
<?php
    mb_internal_encoding('ISO-8859-15');
    print mb_internal_encoding()."\n";
    var_dump(htmlentities("\xbc\xbd\xbe", ENT_QUOTES, ''));
?>
--EXPECT--
ISO-8859-15
string(20) "&OElig;&oelig;&Yuml;"
