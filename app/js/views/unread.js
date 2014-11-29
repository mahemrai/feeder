var app = app || {};

app.UnreadView = Backbone.View.extend({
    tagName: 'div',
    className: 'unreadContainer',
    template: _.template($('#unreadTemplate').html()),

    render: function() {
        this.$el.html(this.template(this.model.attributes));
        return this;
    }
});
