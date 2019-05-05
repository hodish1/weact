'use strict';

var article_template = function article_template(article) {
    return ' <div class="article-wrapper">\n    <div class="article-brief">\n        <!-- img -->\n        <a  href="' + article.link + '" class="img-wrapper">\n            <img src="' + article.fimg_url + '" alt="">\n        </a>\n        <!-- content -->\n        <div class="brief-content-wrapper">\n            <div class="title">\n                ' + article.title.rendered + '\n            </div>\n            <div class="brief">\n                 ' + article.excerpt.rendered + '\n            </div>\n            <div class="tags">\n               ' + article.tags_template + '\n            </div>\n        </div>\n        <!-- data -->\n        <div class="additional-data-wrapper">\n        <div class="first-row">\n                <div class="date">\n                ' + new Date(article.modified_gmt).getDate() + '.' + (new Date(article.modified_gmt).getMonth() + 1) + '.' + new Date(article.modified_gmt).getFullYear() + '\n                </div>\n                <div class="time">\n                ' + new Date(article.modified_gmt).getHours() + ':' + new Date(article.modified_gmt).getMinutes() + '\n                </div>\n                <div class="icon">\n                    <i class="fas fa-podcast"></i>\n                </div>\n        </div>\n        <div class="second-row">\n            <div class="link">\n                \n            </div>\n        </div>\n        </div>\n    </div>\n  </div>';
};

function get_tag_by_id(tags, id) {
    var after = tags.filter(function (tag) {
        return tag.id === id;
    });
    // console.log(after);
    return after;
}

var render = function render(urls, callback) {

    Promise.all(urls.map(function (u) {
        return fetch(u);
    })).then(function (responses) {
        return Promise.all(responses.map(function (res) {
            return res.json();
        }));
    }).then(function (data) {

        var articles = data[0];
        var tags = data[1];

        articles.forEach(function (article) {
            article.tags_template = '';
            article.tags.forEach(function (tag_id) {
                // tag is not an object is actually int
                // console.log(tag_id);
                var tag = get_tag_by_id(tags, tag_id)[0];
                var tag_template = '<div class="tag">#' + tag.name + '</div>';
                article.tags_template += tag_template;
                // console.log(tag.name);
            });

            var loader = document.querySelector('.articles-wrapper').querySelector('.loader-container');
            isLoader(loader, false);
            callback(article);
        });
    });
};

render(['http://weact.s537.upress.link/wp-json/wp/v2/posts', 'http://weact.s537.upress.link/wp-json/wp/v2/tags'], function (article) {
    var container = document.querySelector('.articles-wrapper .container');
    var template = article_template(article);
    container.innerHTML += template;
    // console.log(article);
});