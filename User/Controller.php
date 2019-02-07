<?php
namespace Greystar\User;

class Controller extends \Greystar\User
{
	public	function toRetail($distid)
	{
		$this->modify(['username' => $distid, 'distrib' => 'R']);
		
		return $this->isRetail($distid);
	}
	
	public	function toDistributor($distid)
	{
		$this->modify(['username' => $distid, 'distrib' => 'D']);
		return empty($this->isRetail($distid));
	}
	
	public	function isRetail($distid)
	{
		return ($this->getDistType($distid) == 'Retail');
	}
}