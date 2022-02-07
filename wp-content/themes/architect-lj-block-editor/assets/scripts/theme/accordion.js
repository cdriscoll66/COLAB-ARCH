function init(){
    const accordions = document.querySelectorAll('.o-accordion');

    if(accordions) {
        accordions.forEach(accordion => {
            let parents = accordion.querySelectorAll('.wp-block-columns');
            parents.forEach(parent => {
                let trigger = parent.querySelector('h3');
                trigger.addEventListener('click', function (event) {
                    let openPanel = accordion.querySelector('.open');
                    let panel = openPanel.querySelector('.wp-block-column');
                    panel.style.maxHeight = '56px';
                    openPanel.classList.remove('open');
                    event.target.closest('.wp-block-columns').classList.add('open');
                    event.target.closest('.wp-block-column').style.maxHeight = null;
                }, false);
            });
        });
    }

}

export {init as default};
