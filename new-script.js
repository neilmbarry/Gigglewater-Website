document.querySelector('.new-icon-container').addEventListener('click',function(){
    var nav = document.querySelector('.new-icon-container');
    var icon = document.querySelector('.new-icon-container i');
    var navList = document.querySelector('.new-nav-list');

    //nav.slideToggle(200);
    if (icon.classList.contains('ion-navicon-round')) {
        icon.classList.add('ion-close-round');
        icon.classList.remove('ion-navicon-round');
        navList.classList.add('new-nav-list-open')
    } else {
        icon.classList.add('ion-navicon-round');
        icon.classList.remove('ion-close-round')
        navList.classList.remove('new-nav-list-open');
    }
})

document.querySelectorAll('.new-page').forEach(item => {
  item.addEventListener('click', event => {
    document.querySelector('.new-nav').classList.add('animate__fadeOutUp');
    document.querySelector('.whole-page').classList.add('animate__fadeOut');
  })
});

