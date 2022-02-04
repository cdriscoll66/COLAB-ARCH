/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */
import { __ } from "@wordpress/i18n";

/**
 * External dependencies
 */
import classnames from "classnames";

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-block-editor/#useBlockProps
 */
import {
	InspectorControls,
	useBlockProps,
	BlockAlignmentControl,
	BlockControls
} from "@wordpress/block-editor";

import { Panel, PanelBody, SelectControl, ToggleControl } from "@wordpress/components";

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import "./editor.scss";

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {

	const { archStyle, icons, size } = attributes;


	const onChangeContent = (newContent) => {
		setAttributes({ icons: newContent });
	};

	const onChangeSize = (newContent) => {
		setAttributes({ size: newContent });
	};

	function updateAlignment(nextAlign) {
		setAttributes({ align: nextAlign });
	}

	const align = attributes.align;
	const classes = classnames({
		[`align${align}`]: align,
	});

	const classStyle = (archStyle ? "is-style-icon" : "");

	const blockProps = useBlockProps({
		className: classes,
		"data-align": align,
	});

	return (
		<div {...blockProps}>
			<InspectorControls key="setting">
				<Panel>
					<PanelBody title="Attributes">
						<SelectControl
							label="Icon"
							value={ icons }
							options={[
								{ label: "Flight", value: "flight" },
								{ label: "Event", value: "event" },
								{ label: "AccountBalance", value: "account_balance" },
								{ label: "ArrowDownward", value: "arrow_downward" },
								{ label: "AttachMoney", value: "attach_money" },
								{ label: "ChildFriendly", value: "child_friendly" },
								{ label: "Computer", value: "computer" },
								{ label: "FavoriteBorder", value: "favorite_border" },
								{ label: "Help", value: "flight" },
								{ label: "Face", value: "face" }
							]}
							onChange={onChangeContent}
						/>
						<SelectControl
							label="Size"
							value={ size }
							options={[
								{ label: "18px", value: "md-18" },
								{ label: "24px", value: "md-24" },
								{ label: "36px", value: "md-36" },
								{ label: "48px", value: "md-48" },
								{ label: "60px", value: "md-60" },
							]}
							onChange={onChangeSize}
						/>

						<ToggleControl
							label={ __( "Arch Style" ) }
							onChange={ () => setAttributes( { archStyle: ! archStyle } ) }
							checked={ archStyle }
						/>
					</PanelBody>
				</Panel>
			</InspectorControls>
			<BlockControls group="block">
				<BlockAlignmentControl
					value={attributes.align}
					onChange={updateAlignment}
				/>
			</BlockControls>
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
