<?php
/** 
 * @package   	VikBooking - Libraries
 * @subpackage 	html.form
 * @author    	E4J s.r.l.
 * @copyright 	Copyright (C) 2018 E4J s.r.l. All Rights Reserved.
 * @license  	http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @link 		https://vikwp.com
 */

// No direct access
defined('ABSPATH') or die('No script kiddies please!');

$name  		= isset($displayData['name'])     ? $displayData['name']     : '';
$value 		= isset($displayData['value'])    ? $displayData['value']    : '';
$id 		= isset($displayData['id'])       ? $displayData['id']       : '';
$class 		= isset($displayData['class'])    ? $displayData['class']    : '';
$req 		= isset($displayData['required']) ? $displayData['required'] : 0;
$groups 	= isset($displayData['groups'])  ? $displayData['groups']  : '';
$disabled 	= isset($displayData['disabled']) ? $displayData['disabled'] : false;
$multiple 	= isset($displayData['multiple']) ? $displayData['multiple'] : false;

if ($req)
{
	$class = trim('required ' . $class);
}

if (!is_array($groups))
{
	$groups = array();
}

if ($multiple)
{
	$name .= '[]';

	/**
	 * The value is always treaten as an array in order to avoid
	 * PHP notices while using in_array() function with strings.
	 */
	$value = (array) $value;
}

?>

<select
	name="<?php echo esc_attr($name); ?>"
	id="<?php echo esc_attr($id); ?>"
	class="widefat <?php echo esc_attr($class); ?>"
	<?php echo $disabled ? 'disabled' : ''; ?>
	<?php echo $multiple ? 'multiple' : ''; ?>
>

	<?php foreach ($groups as $label => $options): ?>

		<?php if ($label): ?>
			<optgroup label="<?php echo $this->escape($label); ?>">
		<?php endif; ?>

		<?php
		foreach ($options as $val => $text)
		{
			if (is_object($text))
			{
				$val  = $text->value;
				$text = $text->text;
			}

			$selected = ($multiple && in_array($val, $value)) || $val == $value;

			if ($val == '' && $text == '')
			{
				// use default placeholder when not specified
				$text = 'JGLOBAL_SELECT_AN_OPTION';
			}
			?>
			<option
				value="<?php echo esc_attr($val); ?>"
				<?php echo $selected ? 'selected="selected"' : ''; ?>
			><?php echo JText::translate($text); ?></option>
			<?php
		}
		?>

		<?php if ($label): ?>
			</optgroup>
		<?php endif; ?>

	<?php endforeach; ?>

</select>
