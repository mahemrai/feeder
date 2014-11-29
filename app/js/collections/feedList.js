var app = app || {};

app.FeedList = Backbone.Collection.extend({
    model: app.Feed,
    url: '/api/feeds'
});