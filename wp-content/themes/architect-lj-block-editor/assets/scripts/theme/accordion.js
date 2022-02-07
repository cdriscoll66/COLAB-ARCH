function init(){
    const accordions = document.querySelectorAll('.o-accordion');

    if(accordions) {
        accordions.forEach(accordion => {
            let parents = accordion.querySelectorAll('.wp-block-columns');
            parents.forEach(parent => {
                let trigger = parent.querySelector('h3');
                trigger.addEventListener('click', function (event) {
                    let openPanel = accordion.querySelector('.open');
                    openPanel.classList.remove('open');
                    event.target.closest('.wp-block-columns').classList.add('open');
                }, false);
            });
        });
    }

}

export {init as default};
