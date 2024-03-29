/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */
import { __ } from "@wordpress/i18n";

import classnames from "classnames";

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-block-editor/#useBlockProps
 */
import { useBlockProps } from "@wordpress/block-editor";

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#save
 *
 * @return {WPElement} Element to render.
 */
export default function save({ attributes }) {

	const classStyle = (attributes.archStyle ? "is-style-icon" : "");


	const align = attributes.align;
	const classes = classnames( {
		[ `align${ align }` ]: align
	});

	if ( 'left' === align || 'right' === align || 'center' === align ) {
	return (
		<div {...useBlockProps.save()}>
			<div className={ classes }>
			<span
				className={classnames(
					"material-icons",
					attributes.size,
					classStyle
				)}
			>{attributes.icons}</span>
			</div>
		</div>
	);
					}
	return (
	<div {...useBlockProps.save( { className: classes } )}>
			<span
				className={classnames(
					"material-icons",
					attributes.size,
					classStyle
				)}
			>{attributes.icons}</span>
	</div>
	);

}
