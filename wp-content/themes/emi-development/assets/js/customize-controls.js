( function( api ) {

	// Extends our custom "emi-development" section.
	api.sectionConstructor['emi-development'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );