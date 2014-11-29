var app = app || {};

app.FeedView = Backbone.View.extend({
    tagName: 'div',
    className: 'feedContainer',
    template: _.template($('#feedTemplate').html()),

    render: function() {
        this.$el.html(this.template(this.model.attributes));
        return this;
    }
});
