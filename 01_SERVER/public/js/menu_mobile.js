class Media_screen{
  constructor(width) {
    this.width = window.matchMedia("(min-width: "+width+")");
  }
  responsive(){
    let mobile;
    if (this.width.matches) {
      return mobile = true;
    } else {
      return mobile = false;
    }
  }
}
let menu_screen = new Media_screen('940px');
let icon = document.querySelector('.menu-mobile');
  // if (menu_screen) {
  //   icon.className = 'mobile';
  // }else{
  //   icon.className = 'desktop'
  // }

function openNav() {
  document.getElementsByTagName('nav')[0].style.display = "block";
}
function closeNav() {
  document.getElementsByTagName('nav')[0].style.display = "none";
}
