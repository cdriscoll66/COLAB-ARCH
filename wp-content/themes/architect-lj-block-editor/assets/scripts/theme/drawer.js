import {MDCList} from "@material/list";
import {MDCDrawer} from "@material/drawer";

function init(){

const list = MDCList.attachTo(document.querySelector('.mdc-list'));
list.wrapFocus = true;

const drawer = MDCDrawer.attachTo(document.querySelector('.mdc-drawer'));


const listEl = document.querySelector('.mdc-drawer .mdc-list');
// const mainContentEl = document.querySelector('.main-content');

listEl.addEventListener('click', (event) => {
  drawer.open = false;
});

// document.body.addEventListener('MDCDrawer:closed', () => {
//   mainContentEl.querySelector('input, button').focus();
// });

const tog = document.querySelector('.toggle');


tog.addEventListener('click', (event) => {
    drawer.open = !drawer.open;
})

}

export {init as default};
