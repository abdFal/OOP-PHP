<?php
// akan menyimpan value static dan bisa mengambil attribut atau method tanpa sebuah objek
class contohStatic {
    static public $angka = 0;

    static public function halo()
    {
        # code...
        return "Halo " . ++self::$angka . " kali" . PHP_EOL;
    }
}

echo contohStatic::$angka . PHP_EOL;
$contoh1 = new contohStatic;
echo $contoh1 -> halo();
echo contohStatic::halo();

$contoh2 = new contohStatic;
echo $contoh2 -> halo();

class StringMutator
{
public static function bold(string $word): string
{ return sprintf('<b>%s</b>', $word);
}
public static function italic(string $word): string
{ return sprintf('<i>%s</i>', $word);
}
public static function boldItalic(string $word): string
{ return self::italic(self::bold($word));
}}
class ChildStringMutator extends StringMutator
{
public static function bold(string $word): string
{ return '<b>STATIC LATE BINDINGS</b>';
128;
}
}
echo ChildStringMutator::boldItalic('Muhamad Surya Iksanudin'
);
echo PHP_EOL;
echo StringMutator::italic(StringMutator::bold("Nodg"));