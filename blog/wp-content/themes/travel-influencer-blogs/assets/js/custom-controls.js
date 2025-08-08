(function(api) {

    api.sectionConstructor['travel-influencer-blogs-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });

})(wp.customize);