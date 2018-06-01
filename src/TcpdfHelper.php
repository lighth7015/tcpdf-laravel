<?php

namespace lighth7015\Tcpdf;
use TCPDF as Tcpdf;

class TcpdfHelper extends Tcpdf
{
	protected $headerCallback;
	protected $footerCallback;

	public function Header()
	{
		if ($this->headerCallback != null && is_callable($this->headerCallback)) {
			$cb = $this->headerCallback;
			$cb($this);
		}
	}

	public function Footer()
	{
		if ($this->footerCallback != null && is_callable($this->footerCallback)) {
			$cb = $this->footerCallback;
			$cb($this);
		}
	}

	public function setHeaderCallback($callback)
	{
		$this->headerCallback = $callback;
	}

	public function setFooterCallback($callback)
	{
		$this->footerCallback = $callback;
	}
}