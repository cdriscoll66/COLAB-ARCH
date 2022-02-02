function init(){
    const anchors = document.querySelectorAll('.sidebar-anchor');
    const list = document.querySelector('.m-post-navigation > ul');
    anchors.forEach (anchor => {
        let id = anchor.getAttribute('id'),
            title = anchor.innerHTML,
            dom = document.createElement('li');
        dom.innerHTML = '<a href="#' + id + '">' + title + '</a>';
        list.append(dom);
    });

    const links = document.querySelectorAll('.entry-content > [id]');
    links.forEach (link => {
        let id = link.getAttribute('id'),
            dom = document.createElement('a');
        dom.setAttribute('href', '#' + id );
        dom.setAttribute('class', 'anchor');
        dom.innerHTML = '<svg aria-hidden="true" focusable="false" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M4 9h1v1H4c-1.5 0-3-1.69-3-3.5S2.55 3 4 3h4c1.45 0 3 1.69 3 3.5 0 1.41-.91 2.72-2 3.25V8.59c.58-.45 1-1.27 1-2.09C10 5.22 8.98 4 8 4H4c-.98 0-2 1.22-2 2.5S3 9 4 9zm9-3h-1v1h1c1 0 2 1.22 2 2.5S13.98 12 13 12H9c-.98 0-2-1.22-2-2.5 0-.83.42-1.64 1-2.09V6.25c-1.09.53-2 1.84-2 3.25C6 11.31 7.55 13 9 13h4c1.45 0 3-1.69 3-3.5S14.5 6 13 6z"></path></svg>';
        link.append(dom);
    });

    window.onscroll = function(){
        let scT = window.pageYOffset,
        head = document.querySelector('.o-header'),
        postNav = document.querySelector('.m-post-navigation'),
        postNavUl = document.querySelector('.m-post-navigation ul'),
        prefoot = document.querySelector('.prefooter-fade'),
        headH = head.offsetHeight,
        postNavH = postNavUl.offsetHeight + 70,
        tH = headH + 0,
        freeze = prefoot.offsetTop - postNavH,
        freezeVal = freeze + 'px',
        docW = window.innerWidth;

        if(docW > 960) {
            if (scT > tH ) {
                postNav.classList.add('m-post-navigation--sticky');

                if (scT > freeze) {
                    postNav.classList.add('m-post-navigation--anchor');
                    postNav.style.top = freezeVal;
                } else {
                    postNav.classList.remove('m-post-navigation--anchor');
                    jQuery('.m-post-navigation').removeAttr('style');
                }
            } else {
                postNav.classList.remove('m-post-navigation--sticky');
            }
        }
        else {
            postNav.classList.remove('m-post-navigation--anchor');
            postNav.style.removeProperty("top");
        }
    }

}

export {init as default};
