<?php
/**
	CakePHP Filter Plugin

	Copyright (C) 2009-3827 dr. Hannibal Lecter / lecterror
	<http://lecterror.com/>

	Multi-licensed under:
		MPL <http://www.mozilla.org/MPL/MPL-1.1.html>
		LGPL <http://www.gnu.org/licenses/lgpl.html>
		GPL <http://www.gnu.org/licenses/gpl.html>
*/
?>

<?php
if (isset($viewFilterParams))
{ echo'<table><tr><td style="background-color:#C0DADF;height:20px"><i class="fa fa-search"></i></td>';
	foreach ($viewFilterParams as $field)
	{echo'<td>';
		if(empty($includeFields))
		{
			echo $this->Form->input($field['name'], $field['options']);
		}
		else
		{
			if (in_array($field['name'], $includeFields))
			{
				echo $this->Form->input($field['name'], $field['options']);
			}
		}
	echo'</td>';}
 }
