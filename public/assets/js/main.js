const optbtn = document.querySelector(".option-btn");

optbtn.addEventListener('click', function classcame(e) {

    e.preventDefault();
    let menu =  document.querySelector(".navlist-section");
    menu.classList.toggle('menu-come');

    console.log(menu);
    
});







