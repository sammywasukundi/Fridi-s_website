const navLinks = document.querySelector('.nav-links')
function onToggleMenu(e){
    console.log(e.name);
    e.name = e.name === 'menu' ? 'close' : 'menu'
    navLinks.classList.toggle('top-[6%]')
}
// dark mode
// icons
const sunIcon = document.querySelector('#sun')
const moonIcon = document.querySelector('#moon')
// themes vars
const userTheme = localStorage.getItem('theme')
const systemTheme = window.matchMedia("(prefers-color-scheme: dark)").matches   
// icon toggling 
const iconToggle =()=>{
    sunIcon.classList.toggle('hidden');
    moonIcon.classList.toggle('hidden');
};
// initial theme check
const themeCheck =()=>{
    if (userTheme === 'dark' || (!userTheme && systemTheme)) {
    document.documentElement.classList.add('dark');
    moonIcon.classList.add('hidden');
    return;
    }
    sunIcon.classList.add('hidden');
};
// manual theme switch
const themeSwith =()=>{
    if(document.documentElement.classList.contains('dark')){
        document.documentElement.classList.remove('dark');
        localStorage.setItem("theme","light");
        iconToggle();
        return;
    }
    document.documentElement.classList.add('dark');
    localStorage.setItem("theme","dark");
    iconToggle();
};
// call items switching on click buttons
sunIcon.addEventListener("click",()=>{
    themeSwith();
});
moonIcon.addEventListener("click",()=>{
    themeSwith();
});
// invoke check theme on initial load
themeCheck(); 


// images defilentes 
image=new Array("book1.jpg","book2.jpg","book3.jpg","book4.jpg");
im=0;
op=0;
sop="cr";
function album(){
   setTimeout("album()",20);
   document.getElementById("idImage").src="images/slide/"+image[im%4];
   try{
      document.getElementById("idImage").filters.alpha.opacity=op*100;
   }
   catch(e){
      document.getElementById("idImage").style.opacity=op;
   }
   if(sop=="cr"){
      op+=0.02;
      if(op>2)
         sop="dcr";
   }
   if(sop=="dcr"){
      op-=0.02;
      if(op<=0){
         sop="cr";
         im+=1;
      }
   }
}

// animations
ScrollReveal().reveal('#title',{delay:200,distance : '65px',duration : 2600,reset : true, origin:'top'});
ScrollReveal().reveal('#para',{delay:450,distance : '20px',duration : 2600,reset : true, origin:'bottom'});

// show and hidden listener searchbar


//longuer du password

