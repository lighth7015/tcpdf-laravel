<?php
namespace lighth7015\Tcpdf\Contracts;
use Config;

interface Tcpdf
{
	static function changeFormat($format);
	static function inline($view, $data, $fileName = '');
	static function save($view, $data, $fileName = '');

	function reset();
	function Show();

	function setHeaderCallback($headerCallback);
	function setFooterCallback($footerCallback);
}
