var app = app || {};

app.UnreadListView = Backbone.View.extend({
    el: '#unreadList',

    initialize: function(unreadPosts) {
        this.collection = new app.UnreadList(unreadPosts);
        this.render();
    },

    render: function() {
        this.collection.each(function(item) {
            this.renderUnread(item);
        }, this);
    },

    renderUnread: function(item) {
        var unreadView = new app.UnreadView({
            model: item
        });
        this.$el.append(unreadView.render().el);
    }
});
