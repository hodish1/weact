const article_template = article => {
    return ` <div class="article-wrapper">
    <div class="article-brief">
        <!-- img -->
        <a  href="${article.link}" class="img-wrapper">
            <img src="${article.fimg_url}" alt="">
        </a>
        <!-- content -->
        <div class="brief-content-wrapper">
            <div class="title">
                ${article.title.rendered}
            </div>
            <div class="brief">
                 ${article.excerpt.rendered}
            </div>
            <div class="tags">
               ${article.tags_template}
            </div>
        </div>
        <!-- data -->
        <div class="additional-data-wrapper">
        <div class="first-row">
                <div class="date">
                ${ new Date(article.modified_gmt).getDate() }.${ new Date(article.modified_gmt).getMonth() + 1}.${ new Date(article.modified_gmt).getFullYear()}
                </div>
                <div class="time">
                ${ new Date(article.modified_gmt).getHours() }:${ new Date(article.modified_gmt).getMinutes() }
                </div>
                <div class="icon">
                    <i class="fas fa-podcast"></i>
                </div>
        </div>
        <div class="second-row">
            <div class="link">
                
            </div>
        </div>
        </div>
    </div>
  </div>`;
}

function get_tag_by_id(tags,id){
    return tags.filter( tag => tag.id = id); 
}

const render = (urls,callback) => {

    Promise.all(urls.map(u=>fetch(u))).then(responses =>
        Promise.all(responses.map(res => res.json()))
    ).then(data => {

        const articles = data[0];
        const tags = data[1];

        articles.forEach( article => {
            article.tags_template = '';
            article.tags.forEach(tag_id => {// tag is not an object is actually int
                let tag = get_tag_by_id(tags,tag_id)[0];
                let tag_template = `<div class="tag">#${tag.name}</div>`;
                article.tags_template += tag_template;
            });
            
            const loader = document.querySelector('.articles-wrapper').querySelector('.loader-container');
            isLoader(loader,false);
            callback(article); 

        });
    })

}

render(['http://weact.s537.upress.link/wp-json/wp/v2/posts','http://weact.s537.upress.link/wp-json/wp/v2/tags'], article => {
    const container = document.querySelector('.articles-wrapper .container');
    const template = article_template(article);
    container.innerHTML+=template;
    console.log(article);
});





