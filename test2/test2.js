console.log("OK FANCY loaded");
wp.domReady( function () {
    wp.blocks.registerBlockStyle( 'core/quote', {
        name: 'fancy-quote',
        label: 'Fancy Quote'
    } );
});