<?php
class Vehiclemodel extends CI_Model {
	//declare variables
	private $unique_identifier;
	private $name;
	private $engine_displacement;
	private $engine_power;
	
	//declare setter and getter unique_identifier
	public function setunique_identifier($uivar){
		$this->unique_identifier = $uivar;
	}
	
	public function getunique_identifier(){
		
		return $this->unique_identifier;
	}
	
	
	//declare setter and getter name
	public function setname($namevar){
		$this->name = $namevar;
	}
	
	public function getunique_identifier(){
		
		return $this->name;
	}
	
	
	//declare setter and getter engine_displacement
	public function setengine_displacement($edvar){
		$this->engine_displacement = $edvar;
	}
	
	public function getengine_displacement(){
		
		return $this->engine_displacement;
	}
	
	
	//declare setter and getter engine_power
	public function setengine_power($epvar){
		$this->engine_power = $epvar;
	}
	
	public function getengine_power(){
		
		return $this->engine_power;
	}
	
}