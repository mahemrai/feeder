var app = app || {};

$(function() {
    var feeds = [
        { title: 'Addy Osmani' },
        { title: 'OOP Tuts' }
    ];

    new app.FeedListView(feeds);

    var posts = [
        { title: 'Backbone tutorial part 1' },
        { title: 'Slim vs Silex' }
    ];

    new app.PostListView(posts);

    var favourites = [
        { title: 'Backbone in enterprise' },
        { title: 'REST api as backend' }
    ];

    new app.FavouriteListView(favourites);

    var unreadPosts = [
        { title: 'What is Paas?' },
    ];

    new app.UnreadListView(unreadPosts);
});
