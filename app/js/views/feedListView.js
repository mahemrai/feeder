var app = app || {};

app.FeedListView = Backbone.View.extend({
    el: '#feedList',

    initialize: function(initialFeeds) {
        this.collection = new app.FeedList(initialFeeds);
        this.render();
    },

    render: function() {
        this.collection.each(function(item) {
            this.renderFeed(item);
        }, this);
    },

    renderFeed: function(item) {
        var feedView = new app.FeedView({
            model: item
        });
        this.$el.append(feedView.render().el);
    }
});
