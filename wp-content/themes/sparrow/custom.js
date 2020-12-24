console.log('custom js working')
// console.log($('#main-menu').children("li").length)
// console.log($('#main-menu li').text())

// console.log($('#main-menu'))

let menu_ul_li = $('#main-menu').children("li")
let menu_ul_a = $('#main-menu').children("li").children("a")
let menu_ul_ul = $('#main-menu').children("li").children("ul")
let menu_ul_ul_li = $('#main-menu').children("li").children("ul").children("li")
for (let i = 0; i < menu_ul_li.length; i++) {
    $(menu_ul_li[i]).attr('class', 'nav-item')
    $(menu_ul_a[i]).attr('class', 'nav-link')
    $(menu_ul_li[i]).removeAttr('id')
    $(menu_ul_a[i]).removeAttr('aria-current')
    $(menu_ul_ul_li[i]).removeAttr('id')
    $(menu_ul_ul_li[i]).removeAttr('class')
    if (i == 0) {
        $(menu_ul_ul[i]).attr('class', 'dropdown-menu megamenu-content')
        $(menu_ul_ul[i]).attr('role', 'menu')
    } if (i == 1) {
        $(menu_ul_ul[i]).attr('class', 'dropdown-menu')
    } if (i == 2) {
        $(menu_ul_li[i]).attr('class', 'dropdown megamenu-fw')
        $(menu_ul_a[i]).attr('class', 'nav-link dropdown-toggle arrow')
    } if (i == 3) {
        $(menu_ul_li[i]).attr('class', 'dropdown')
        $(menu_ul_a[i]).attr('class', 'nav-link dropdown-toggle arrow')
    }
}