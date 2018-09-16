<?php
	class order{
		private $contacts;
		private $gender;
		private $age;
		private $height;
		private $weight;
		//activity level of an individual
		private $actlvl; 
		// goal: gain weight, lose weight, maintain weight
		private $goal;

		function set_contacts($new_contacts) {
		$this->contacs = $new_contacts;
		}
		function get_contacts() {
			return $this->contacts;
		}
	
		function set_gender($new_gender) {
		$this->gender = $new_gender;
		}
		function get_gender() {
			return $this->gender;
		}
		
		function set_age($new_age) {
		$this->age = $new_age;
		}
		
		function get_age() {
			return $this->age;
		}
		
		function set_height($new_height) {
		$this->height = $new_height;
		}
		function get_height() {
			return $this->height;
		}
		
		function set_weight($new_weight) {
		$this->weight = $new_weight;
		}
		function get_weight() {
			return $this->weight;
		}
		
		function set_actlvl($new_actlvl) {
		$this->actlvl = $new_actlvl;
		}
		
		function get_actlvl() {
			return $this->actlvl;
		}
		
		function set_goal($new_goal) {
		$this->goal = $goal;
		}
		
		function get_goal() {
			return $this->goal;
		}
		
		function _construct($new_contacts, $new_gender, $new_age, $new_height, $new_weight, $new_actlvl, $new_goals){
				$this->set_contacts($new_contacts);
				$this->set_gender($new_gender);
				$this->set_age($new_age);
				$this->set_height($new_height);
				$this->set_weight($new_weight);
				$this->set_actlvl($new_actlvl);
				$this->set_goal($new_goal);
		}
		
	}

?>