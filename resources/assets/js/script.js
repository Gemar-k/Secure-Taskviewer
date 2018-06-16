const elem = document.querySelector('.sidenav');
let instance = M.Sidenav.init(elem, null);


const elems = document.querySelectorAll('.collapsible');
let instances = M.Collapsible.init(elems, null);

const elemss = document.querySelectorAll('.fixed-action-btn');
let instancess = M.FloatingActionButton.init(elemss, null);