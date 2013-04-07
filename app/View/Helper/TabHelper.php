<?php
class TabHelper extends AppHelper {
    function isActive($name) {
		if ($name == $this->params['controller'])
        	return "<li class=\"active\">";
		else
			return "<li>";
    }
}
?>