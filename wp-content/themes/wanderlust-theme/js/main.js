let menuBtn = document.querySelector('.menu-button');
let closeBtn = document.querySelector('.close-button');

function classChange(elementSelect, activeClass){
    let element = document.querySelector(elementSelect);
    element.classList.toggle(activeClass);
}

menuBtn.addEventListener('click', () => {
    classChange('.menu-modal', 'active')
})

closeBtn.addEventListener('click', () => {
    classChange('.menu-modal', 'active')
})

// ......................................................
// ......................................................
// 
//               CODE FOR INDICATOR
// 
// ......................................................
// ......................................................

window.addEventListener('scroll', () => {
    let scrollPosition = document.documentElement.scrollTop;
    let totalHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;

    indicator.style.width = (scrollPosition / totalHeight) * 100 + '%';
})