<?php namespace polueva;

Class Equation{
	public function line($a, $b){
			
			if($a == 0){
                return null;
			}

			return $this->X=array(-($b/$a));
	}
	
	protected $X;
}

?>