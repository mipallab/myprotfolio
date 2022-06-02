<?php

	function if_row_existis($value) {
		if(mysqli_num_rows($value) > 0) {
			return true;
		}
	}

?>