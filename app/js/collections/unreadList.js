var app = app || {};

app.UnreadList = Backbone.Collection.extend({
    model: app.Post,
    url: '/api/posts?unread=1'
});
