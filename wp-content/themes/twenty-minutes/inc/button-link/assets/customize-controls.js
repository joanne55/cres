( function( api ) {

	// Extends our custom "twenty-minutes" section.
	api.sectionConstructor['twenty-minutes'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );