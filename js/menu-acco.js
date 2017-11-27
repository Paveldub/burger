


let acc = document.querySelector('.variety-acco__items'),
    list = acc.children

acc.addEventListener('click', function (event) {
    let target = event.target
    if (!target.classList.contains('variety-acco__trigger')) {
        return
    }
    event.preventDefault()
    target = target.parentNode
    if (target.classList.contains('variety-acco__items--active')) {
        target.classList.remove('variety-acco__items--active')
        return
    } else {
        for (var i = 0; i < list.length; i++) {
            list[i].classList.remove('variety-acco__items--active')
            target.classList.add('variety-acco__items--active')
        }
    }
})