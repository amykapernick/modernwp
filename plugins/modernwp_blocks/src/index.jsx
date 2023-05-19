import metadata from './block.json';
import { registerBlockType } from '@wordpress/blocks';
import { MediaUpload } from '@wordpress/block-editor';
import { Button, TextControl } from '@wordpress/components';

// const {
//     registerBlockType,
// } = wp.blocks;

// Register the block
// const Banner = () => (
	registerBlockType( metadata.name, {
		...metadata,
		title: 'Banner',
		icon: 'smiley',
		category: 'common',
		attributes: {
			text: {
				type: 'string',
				selector: '.banner blockquote',
				source: 'text'
			},
			cta_text: {
				type: 'string',
				selector: '.cta',
				source: 'text'
			},
			cta_url: {
				type: 'string',
				selector: '.cta',
				source: 'attribute',
				attribute: 'href'
			},
		},
		edit(props) {	
			return (
				<div className="banner" id="block-editable-box">
						<label>Banner Text</label>
						<TextControl
							value={props.attributes.text}
							onChange={(text) => {props.setAttributes({text: text})}}
						/>
						<label>CTA Text</label>
						<TextControl
							value={props.attributes.cta_text}
							onChange={(cta_text) => {props.setAttributes({cta_text: cta_text})}}
						/>
						<label>CTA Url</label>
						<TextControl
							value={props.attributes.cta_url}
							onChange={(cta_url) => {props.setAttributes({cta_url: cta_url})}}
						/>
					</div>
			);
		},
	
		save(props) {
			// const {  } = props.attributes;
	
			return (
				<div>
					testing
				</div>
			);
		},
	} )
// )

// addFilter(
// 	'blocks.registerBlockType',
// 	'modernwp/banner',
// 	BannerBlock
// );


// export default Banner