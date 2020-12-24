console.log('custom js working')
// console.log($('#main-menu').children("li").length)
// console.log($('#main-menu li').text())

// console.log($('#main-menu'))

let menu_ul_li = $('#main-menu').children("li")
let menu_ul_a = $('#main-menu').children("li").children("a")
for (let i = 0; i < menu_ul_li.length; i++) {
    console.log(menu_ul_a[i])
    $(menu_ul_li[i]).attr('class', 'nav-item')
    $(menu_ul_a[i]).attr('class', 'nav-link')
    if (i == 2) {
        $(menu_ul_li[i]).attr('class', 'dropdown megamenu-fw')
        $(menu_ul_a[i]).attr('class', 'nav-link dropdown-toggle arrow')
    } if (i == 3) {
        $(menu_ul_li[i]).attr('class', 'dropdown')
        $(menu_ul_a[i]).attr('class', 'nav-link dropdown-toggle arrow')
    }
    $(menu_ul_li[i]).removeAttr('id')
    $(menu_ul_a[i]).removeAttr('aria-current')
}

/*// Menu Navbar Configuration
// let menu_li = document.querySelectorAll('#main-menu li')
// let menu_li_a = document.querySelectorAll('#main-menu li a')
let menu_li = $('#main-menu').children("li")
let menu_li_a = $('#main-menu').children("li a")
for (let i = 0; i < menu_li.length; i++) {
    // menu_li[i].className = 'nav-item'
    // menu_li_a[i].className = 'nav-link'
    menu_li[i].attr('class', 'nav-item')
    menu_li_a[i].attr('class', 'nav-link')
    // primary ul
    // if (i == 2) {
    //     menu_li[i].attr('class', 'dropdown megamenu-fw')
    //     menu_li_a[i].attr('class', 'nav-link dropdown-toggle arrow')
    //     $(menu_li_a[i]).attr("data-toggle", "dropdown");
    //     // menu_li[i].lastElementChild.className = 'dropdown-menu megamenu-content'
    //     // $(menu_li[i].lastElementChild).attr('class', 'dropdown-menu megamenu-content');
    //     // $(menu_li[i].lastElementChild).attr("role", "menu");
    // }
    // if (i == 3) {
    //     menu_li[i].attr('class', 'dropdown')
    //     // $(menu_li[i].lastElementChild).attr('class', 'dropdown-menu');
    // }
    menu_li[i].removeAttribute('id')
    // secondary ul
}*/

// let menu_li_a = document.querySelectorAll('#main-menu li a')
// for (let i = 0; i < menu_li_a.length; i++) {
//     if (i == 2) {
//         menu_li_a[i].className = 'nav-link dropdown-toggle arrow'
//         $(menu_li_a[i]).attr("data-toggle", "dropdown");
//     } else {
//         menu_li_a[i].className = 'nav-link'
//     }
// }