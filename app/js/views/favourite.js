var app = app || {};

app.FavouriteView = Backbone.View.extend({
    tagName: 'div',
    className: 'favouriteContainer',
    template: _.template($('#favouriteTemplate').html()),

    render: function() {
        this.$el.html(this.template(this.model.attributes));
        return this;
    }
});
