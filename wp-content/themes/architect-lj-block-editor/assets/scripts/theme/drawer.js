import {MDCList} from "@material/list";
import {MDCDrawer} from "@material/drawer";

function init(){

const list = MDCList.attachTo(document.querySelector('.mdc-list'));
list.wrapFocus = true;

const drawer = MDCDrawer.attachTo(document.querySelector('.mdc-drawer'));


const listEl = document.querySelector('.mdc-drawer .mdc-list a');
// const mainContentEl = document.querySelector('.main-content');

listEl.addEventListener('click', (event) => {
  drawer.open = false;
});

const tog = document.querySelector('.js-toggle');

tog.addEventListener('click', (event) => {
    drawer.open = !drawer.open;
})


let cbox = document.querySelectorAll(".box");
cbox.forEach(box => {
  box.addEventListener('click', () => box.classList.toggle("red"));
});


const subexpand = document.querySelectorAll('.menu-expand');

subexpand.forEach(sub => {
    sub.addEventListener('click', (event) => {
    let parent = event.target.closest('.menu-item-has-children');
    parent.classList.toggle("expanded");
});
});

};

export {init as default};
