( function( api ) {

	// Extends our custom "shams-solar" section.
	api.sectionConstructor['shams-solar'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );