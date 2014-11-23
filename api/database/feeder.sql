CREATE TABLE feeds (
    `id` int(11) NOT NULL,
    `title` varchar(255) NOT NULL,
    `url` varchar(255) NOT NULL,
    `created` datetime,
    PRIMARY KEY(id)
);

CREATE TABLE posts (
    `id` int(11) NOT NULL,
    `title` varchar(255) NOT NULL,
    `url` varchar(255) NOT NULL,
    `favourite` tinyint(1) NOT NULL DEFAULT 0,
    `unread` tinyint(1) NOT NULL DEFAULT 0,
    `feed_id` int(11) NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT fk_feedPost FOREIGN KEY (feed_id) REFERENCES feeds(id)
);