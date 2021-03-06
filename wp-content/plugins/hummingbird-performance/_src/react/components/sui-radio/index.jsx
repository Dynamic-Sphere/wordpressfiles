/**
 * External dependencies
 */
import React from 'react';
import classNames from 'classnames';

/**
 * Radio functional component.
 *
 * @param {Object}  props          Component props.
 * @param {string}  props.text     Input text (label).
 * @param {string}  props.id       Input ID.
 * @param {string}  props.name     Input name.
 * @param {string}  props.value    Input value.
 * @param {boolean} props.checked  Checked status.
 * @param {Object}  props.onChange Callback for onChange action.
 * @return {JSX.Element} Radio component.
 * @class
 */
export default function Radio( { text, id, name, value, checked = false, onChange } ) {
	return (
		<label
			id={ id + '-label' }
			htmlFor={ id }
			className={ classNames( 'sui-tab-item', { active: checked } ) }
		>
			<input
				type="radio"
				name={ name }
				value={ value }
				id={ id }
				checked={ checked }
				onChange={ onChange }
			/>
			{ text }
		</label>
	);
}
