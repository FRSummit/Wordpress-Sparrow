console.log('custom js working')
// console.log($('#main-menu').children("li").length)
// console.log($('#main-menu li').text())

// console.log($('#main-menu'))

let menu_ul_li = $('#main-menu').children("li")
let menu_ul_a = $('#main-menu').children("li").children("a")
let menu_ul_ul = $('#main-menu').children("li").children("ul")
let menu_ul_ul_li = $('#main-menu').children("li").children("ul").children("li")

/*let tertiary_li = document.createElement('li')
let tertiary_li_div = document.createElement('div')
tertiary_li_div.className = 'row'
tertiary_li.appendChild(tertiary_li_div)*/

for (let i = 0; i < menu_ul_li.length; i++) {
    $(menu_ul_li[i]).attr('class', 'nav-item')
    $(menu_ul_a[i]).attr('class', 'nav-link')
    $(menu_ul_li[i]).removeAttr('id')
    $(menu_ul_a[i]).removeAttr('aria-current')
    $(menu_ul_ul_li[i]).removeAttr('id')
    $(menu_ul_ul_li[i]).removeAttr('class')
    
    /*let tertiary_menu_div = document.createElement('div')
    tertiary_menu_div.className = 'col-menu col-md-3'

    let tertiary_menu_name = document.createElement('h6')
    tertiary_menu_name.className = 'title'
    tertiary_menu_div.appendChild(tertiary_menu_name)
    
    let tertiary_menu_content = document.createElement('div')
    tertiary_menu_content.className = 'content'
    
    let tertiary_menu_content_ul = document.createElement('ul')
    tertiary_menu_content_ul.className = 'menu-col'
    
    let tertiary_menu_content_ul_li = document.createElement('li')

    let tertiary_menu_content_ul_li_a = document.createElement('a')
    tertiary_menu_content_ul_li_a.innerText = 'Jacket'
    tertiary_menu_content_ul_li.appendChild(tertiary_menu_content_ul_li_a)

    tertiary_menu_content_ul.appendChild(tertiary_menu_content_ul_li)

    tertiary_menu_content.appendChild(tertiary_menu_content_ul)
    
    tertiary_menu_div.appendChild(tertiary_menu_content)

    tertiary_li_div.appendChild(tertiary_menu_div)*/

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

/*menu_ul_ul.appendChild(tertiary_li)*/