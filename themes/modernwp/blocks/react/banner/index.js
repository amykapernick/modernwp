import { registerBlockType } from '@wordpress/blocks';
import { MediaUpload } from '@wordpress/block-editor';
import { Button, TextControl } from '@wordpress/components';
import json from './block.json'
import htm from 'https://unpkg.com/htm?module'
import { addFilter } from '@wordpress/hooks';

const html = htm.bind(wp.element.createElement)
const { name } = json

// const Banner = () => {
// registerBlockType(name, {

// });
// // }

const BannerBlock = (settings) => {
	return {
		...settings,
		title: 'Banner',
		icon: 'align-center',
		category: 'common',
		attributes: {
			text: {
				type: 'string',
				selector: '.banner blockquote',
				source: 'text'
			},
		},
		edit(props) {
			let banner = props.attributes.image,
				styles = {}

			if (banner) {
				styles = { '--bannerImage': `url(${banner})` }
			}

			return (
				html`<div className="banner" id="block-editable-box" style=${styles}>
		<label>Banner Text</label>
		<${TextControl}
			value=${props.attributes.text}
			onChange=${(text) => { props.setAttributes({ text: text }) }}
		/>
	</div>`
			);
		},

		save(props) {
			console.log(props.attributes)

			return (
				html`
			<h2>Banner</h2>
			`
			)

			// return (
			// 	<div className="banner" style={styles}>
			// 		{props.attributes.text && <blockquote>{props.attributes.text}</blockquote>}
			// 	</div>
			// );

		},
	}
}

// export default Banner;
addFilter(
	'blocks.registerBlockType',
	'modernwp/banner',
	BannerBlock
);