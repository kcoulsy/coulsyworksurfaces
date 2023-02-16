<?php
// This script defines any functions required by the various forms.
// This script is created in Chapter 3.

// This function generates a form INPUT or TEXTAREA tag.
// It takes five arguments:
// - The name to be given to the element.
// - The type of element (text, password, textarea).
// - The label for the element
// - An array of errors.
// - An array of additional options.
function create_form_input($name, $type, $label = '', $req = '', $errors = array(), $options = array()) {
	
	// Assume no value already exists:
	//$value = false;
	
	// Check for a value in POST:
	if (isset($_POST[$name])) $value = $_POST[$name];
	
	// Strip slashes if Magic Quotes is enabled:
	if ($value && get_magic_quotes_gpc()) $value = stripslashes($value);

	// Start the DIV:
	echo '<div class="form-group';

	// Add a class if an error exists:
	if (array_key_exists($name, $errors)) echo ' has-error';

	// Complete the DIV:
	echo '">';

	// Create the LABEL, if one was provided:
	if (!empty($label)) echo '<label for="' . $name . '" class="col-sm-3 control-label">' . $label . '</label>';

	// Conditional to determine what kind of element to create:
	if ( ($type === 'text') || ($type === 'password') || ($type === 'hidden_spam_reducer')) {
		
		// Start creating the input:
		echo '<div class="col-sm-9"><input type="' . $type . '" name="' . $name . '" id="' . $name . '" ' . $req . ' class="form-control"';
		
		// Add the value to the input:
		if ($value) echo ' value="' . htmlspecialchars($value) . '"';
		
		// Check for additional options:
		if (!empty($options) && is_array($options)) {
			foreach ($options as $k => $v) {
				echo " $k=\"$v\"";
			}
		}
		
		// Complete the element:
		echo '></div>';		
		
		// Show the error message, if one exists:
		if (array_key_exists($name, $errors)) echo '<div class="col-sm-9 pull-right"><span class="help-block">' . $errors[$name] . '</span></div>';

	} elseif ($type === 'email') { // Create a TEXTAREA.
		
		// Start creating the input:
		echo '<div class="col-sm-9"><input type="' . $type . '" name="' . $name . '" id="' . $name . '" ' . $req . ' class="form-control"';
		
		// Add the value to the input:
		if ($value) echo ' value="' . htmlspecialchars($value) . '"';
		
		// Check for additional options:
		if (!empty($options) && is_array($options)) {
			foreach ($options as $k => $v) {
				echo " $k=\"$v\"";
			}
		}
		
		// Complete the element:
		echo '></div>';		
		// Show the error message, if one exists:
		if (array_key_exists($name, $errors)) echo '<div class="col-sm-9 pull-right"><span class="help-block">' . $errors[$name] . '</span></div>';

} elseif ($type === 'number') { // Create a phone box.
		// Start creating the input:
		echo '<div class="col-sm-9"><input type="' . $type . '" name="' . $name . '" id="' . $name . '" class="form-control"';
		
		// Add the value to the input:
		if ($value) echo ' value="' . htmlspecialchars($value) . '"';
		
		// Check for additional options:
		if (!empty($options) && is_array($options)) {
			foreach ($options as $k => $v) {
				echo " $k=\"$v\"";
			}
		}
		
		// Complete the element:
		echo '></div>';		
		
		// Show the error message above the textarea (if one exists):
		if (array_key_exists($name, $errors)) echo '<div class="col-sm-9 pull-right"><span class="help-block">' . $errors[$name] . '</span></div>';

	} elseif ($type === 'phone_number') { // Create a phone box.
		
		// Start creating the input:
		echo '<div class="col-sm-9"><input type="' . $type . '" name="' . $name . '" id="' . $name . '" class="form-control"';
		
		// Add the value to the input:
		if ($value) echo ' value="' . htmlspecialchars($value) . '"';
		
		// Check for additional options:
		if (!empty($options) && is_array($options)) {
			foreach ($options as $k => $v) {
				echo " $k=\"$v\"";
			}
		}
		
		// Complete the element:
		echo '></div>';		
		
		// Show the error message above the textarea (if one exists):
		if (array_key_exists($name, $errors)) echo '<div class="col-sm-9 pull-right"><span class="help-block">' . $errors[$name] . '</span></div>';


	} elseif ($type === 'tel') { // Create a phone box.
		
		// Start creating the input:
		echo '<div class="col-sm-9"><input type="' . $type . '" name="' . $name . '" id="' . $name . '" class="form-control"';
		
		// Add the value to the input:
		if ($value) echo ' value="' . htmlspecialchars($value) . '"';
		
		// Check for additional options:
		if (!empty($options) && is_array($options)) {
			foreach ($options as $k => $v) {
				echo " $k=\"$v\"";
			}
		}
		
		// Complete the element:
		echo '></div>';		
		
		// Show the error message above the textarea (if one exists):
		if (array_key_exists($name, $errors)) echo '<div class="col-sm-9 pull-right"><span class="help-block">' . $errors[$name] . '</span></div>';

	 // End of primary IF-ELSE.
	} elseif ($type === 'textarea') { // Create a TEXTAREA.

		// Start creating the textarea:
		echo '<div class="col-sm-9"><textarea type="' . $type . '" name="' . $name . '" id="' . $name . '" class="form-control"';
		
		// Check for additional options:
		if (!empty($options) && is_array($options)) {
			foreach ($options as $k => $v) {
				echo " $k=\"$v\"";
			}
		}

		// Complete the opening tag:
		echo '>';		
		
		// Add the value to the textarea:
		if ($value) echo $value;

		// Complete the textarea:
		echo '</textarea></div>';

		// Show the error message above the textarea (if one exists):
		if (array_key_exists($name, $errors)) echo '<div class="col-sm-9 pull-right"><span class="help-block">' . $errors[$name] . '</span></div>';



	} // End of primary IF-ELSE.
	
	// Complete the DIV:
	echo '</div>';

} // End of the create_form_input() function.

// Omit the closing PHP tag to avoid 'headers already sent' errors!
