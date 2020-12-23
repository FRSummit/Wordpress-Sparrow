console.log('custom js working')

let menu_li = document.querySelectorAll('#main-menu li')
for (let i = 0; i < menu_li.length; i++) {
    if (i == 2) {
        menu_li[i].className = 'dropdown megamenu-fw'
    } else if (i == 3) {
        menu_li[i].className = 'dropdown'
    } else {
        menu_li[i].className = 'nav-item'
    }
}

let menu_li_a = document.querySelectorAll('#main-menu li a')
for (let i = 0; i < menu_li_a.length; i++) {
    menu_li_a[i].className = 'nav-link'
}