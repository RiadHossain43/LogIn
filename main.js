function eleId(ele){
    return document.getElementById(ele);
}
const loader = eleId('loader');
const form = eleId('form');
const title = eleId('title');
const facebook = eleId('facebook');
const id = eleId('id');
const pass = eleId('pass');
const btn = eleId('btn');

window.addEventListener('load',()=>{
    setTimeout(()=>{
        loader.style.display = 'none';
        form.style.zIndex = "10";
        title.classList.add('fadeInUp');
        facebook.classList.add('fadeInUp');
        id.classList.add('bounceIn');
        pass.classList.add('bounceIn');
        btn.classList.add('bounceIn');
        setTimeout(()=>{
            id.style.opacity = '1';
            pass.style.opacity = '1';
            btn.style.opacity = '1';
        },1000);
    },1000);

    setTimeout(function () {
        let viewheight = window.innerHeight;
        let viewwidth = window.innerWidth;
        console.log(viewheight,viewwidth);
        let viewport = document.querySelector("meta[name=viewport]");
        viewport.setAttribute("content", "height=" + viewheight + "px, width=" + viewwidth + "px, initial-scale=1.0");
    },300);
});