var app = app || {};

app.FavouriteListView = Backbone.View.extend({
    el: '#favouriteList',

    initialize: function(favourites) {
        this.collection = new app.FavouriteList(favourites);
        this.render();
    },

    render: function() {
        this.collection.each(function(item) {
            this.renderFavourite(item);
        }, this);
    },

    renderFavourite: function(item) {
        var favouriteView = new app.FavouriteView({
            model: item
        });
        this.$el.append(favouriteView.render().el);
    }
});
