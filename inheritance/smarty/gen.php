<?php
$b0 = '<h1>Вывод статических данных в 500 наследуемых блоков</h1>' . "\r\n";
for($i = 1; $i < 501; $i++)
{
	$b0 .= '{block b'.$i.'}{/block}'."\r\n";
	$data = '{extends "b'.($i-1).'.tpl"}' . "\r\n";
	$data .= '{block b'.$i.'}data'.$i.'{/block}' . "\r\n";
	file_put_contents('templates/b'.$i.'.tpl', $data);
}
file_put_contents('templates/b0.tpl', $b0);
