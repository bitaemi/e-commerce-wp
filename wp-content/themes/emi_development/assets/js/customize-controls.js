( function( api ) {

	// Extends our custom "emi_development" section.
	api.sectionConstructor['emi_development'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );