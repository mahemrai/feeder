var app = app || {};

app.PostListView = Backbone.View.extend({
    el: '#postList',

    initialize: function(initialPosts) {
        this.collection = new app.PostList(initialPosts);
        this.render();
    },

    render: function() {
        this.collection.each(function(item) {
            this.renderPost(item);
        }, this);
    },

    renderPost: function(item) {
        var postView = new app.PostView({
            model: item
        });
        this.$el.append(postView.render().el);
    }
});
