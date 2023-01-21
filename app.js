const img_container  = document.querySelector(".images-container");
const prev_btn = document.querySelector(".change-pic.prev");
const next_btn = document.querySelector(".change-pic.next");



//+--------------------------------+
//| IMAGE CONTAINER (SLIDER)       |
//+--------------------------------+
next_btn.addEventListener("click",()=>{
    img_container.scrollLeft += 280;
})

prev_btn.addEventListener("click",()=>{
    if(img_container.scrollLeft == 1191){
        img_container.scrollLeft -= 200;
    }
    else{
        img_container.scrollLeft -=280;
    }
})
// Update active image indicator on scroll
let nav_btns = document.querySelectorAll(".nav-btn");
img_container.addEventListener("scroll",()=>{
    const pos_scroll = img_container.scrollLeft;

    nav_btns.forEach(element => {
       element.classList.remove("active");
    })

    if(pos_scroll <270)
        nav_btns[0].classList.add("active");
    else if(pos_scroll <540)
       nav_btns[1].classList.add("active");
    else if(pos_scroll < 810)
        nav_btns[2].classList.add("active");
    else if(pos_scroll < 1080)
        nav_btns[3].classList.add("active");
    else if(pos_scroll < 1350)
        nav_btns[4].classList.add("active");
    else if(pos_scroll < 1620)
        nav_btns[5].classList.add("active");
    else if(pos_scroll >= 1890)
        nav_btns[6].classList.add("active");
});

nav_btns.forEach((nav_btn, i) => {
    nav_btn.addEventListener("click", ()=>{
        img_container.scrollLeft = i*280
    })
})
