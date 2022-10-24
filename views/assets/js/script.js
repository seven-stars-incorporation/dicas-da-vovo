let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
var searchBox = document.getElementsByClassName('search-box')[0];

/*menu.onclick = () =>{

  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');

}*/

searchBox.onmouseover = ()=>{
  searchBox.classList.add('search-box-hover');
}

function collapse(){
  let countTime = 0;
  let searchText = document.getElementById('searchText');
  let eventCollapse = setInterval(()=>{
    if(countTime <= 10){ //500*10 = 5000ms
      countTime++;
      if(document.activeElement === searchText){
        countTime = 0;
      }
    }else{
      searchBox.classList.remove('search-box-hover');
      clearInterval(eventCollapse);
    }
  },500)
}

searchBox.onmouseout = ()=>{
  collapse();
}



window.onscroll = () =>{

  menu.classList.remove('fa-times');
  navbar.classList.remove('active');

  if(window.scrollY > 60){
    document.querySelector('#scroll-top').classList.add('active');
  }else{
    document.querySelector('#scroll-top').classList.remove('active');
  }

}

function loader(){
  document.querySelector('.loader-container').classList.add('fade-out');
}

function fadeOut(){
  setInterval(loader, 3000);
}


window.onload = fadeOut();