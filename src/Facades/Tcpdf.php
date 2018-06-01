<?php
namespace lighth7015\Tcpdf\Facades;
use Illuminate\Support\Facades\Facade;

class Tcpdf extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'Tcpdf';
	}
}