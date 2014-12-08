<?php

include 'Base.php';


class Controller_Sequence extends Controller_Base {

    function __construct() {
        parent::__construct();
}


    public function route() {


    	 for ($i=0; $i < 8; $i++) { 
    		
        	// Array for mustache to render
    	    $data["nozzle_header"][$i]["nozzle_name"] = "nozzle ".($i+1);
    	    $data["valve_columns"][$i]["valve_id"] = "valve".($i+1);
			}

			for ($j=0; $j < 10; $j++) { 
    		
        	// Array for mustache to render
			$data["nozzle_rows"][$j]["row_id"] = "row".($j+1);

			}




        return $data;
    }



}
