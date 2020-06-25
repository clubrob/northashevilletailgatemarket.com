wp.domReady( () => {
	wp.blocks.registerBlockStyle( 'core/group', [
		{
			name: 'default',
			label: 'Default',
			isDefault: true,
		},
		{
			name: 'canvas',
			label: 'Canvas Background',
		},
		{
			name: 'wood',
			label: 'Wood Grain Background',
		},
		{
			name: 'green',
			label: 'Green Background',
		},
		{
			name: 'brown',
			label: 'Brown Background',
		}
	]);
	wp.blocks.registerBlockStyle( 'core/heading', [
		{
			name: 'default',
			label: 'Default',
			isDefault: true,
		},
		{
			name: 'alt',
			label: 'Alt',
		},
		{
			name: 'uppercase',
			label: 'Uppercase',
		},
		{
			name: 'border-bottom-dark',
			label: 'Bottom Border Dark'
		},
		{
			name: 'border-bottom-light',
			label: 'Bottom Border Light'
		}
	]);
	wp.blocks.unregisterBlockStyle(
		'core/button',
		[ 'default', 'outline', 'squared', 'fill' ]
	);
	wp.blocks.registerBlockStyle(
		'core/button',
		[
			{
				name: 'default',
				label: 'Default',
				isDefault: true,
			},
			{
				name: 'full-width-button',
				label: 'Full Width',
			}
		]
	);
	wp.blocks.registerBlockStyle(
		'core/image',
		[
			{
				name: 'default',
				label: 'Default',
				isDefault: true,
			},
			{
				name: 'caption-overlay-square',
				label: 'Caption Overlay - Square',
			}
		]
	);
} );
