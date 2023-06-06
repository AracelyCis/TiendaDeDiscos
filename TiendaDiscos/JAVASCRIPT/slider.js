const productContainers = [...document.querySelectorAll('.product_container')];

const nxtBtn = [...document.querySelectorAll('.next_btn')];
const preBtn = [...document.querySelectorAll('.pre_btn')];

productContainers.forEach((item,i)=> {
    let ContainerDimensions = item.getBoundingClientRect();
    let ContainerWidth = ContainerDimensions.width;

    nxtBtn[i].addEventListener('click',() => {
        item.scrollLeft -= ContainerWidth;
    })
    preBtn[i].addEventListener('click',() => {
        item.scrollLeft += ContainerWidth;
    })
})