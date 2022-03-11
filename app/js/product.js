const nameProduct = document.querySelectorAll('.rec-imformation')
const toBasket = document.querySelectorAll('.basket')
const list = document.querySelector('.product__list')
const basketMenu = document.querySelector('.basket__menu')
const mainBasket = document.querySelector('.product__menu')
console.log(mainBasket);
mainBasket.addEventListener('mouseover', () => {
    basketMenu.style.display = 'block';
})
mainBasket.addEventListener('mouseout', () => {
    basketMenu.style.display = 'none';
})
basketMenu.addEventListener('mouseover', () => {
    basketMenu.style.display = 'block';
})
basketMenu.addEventListener('mouseout', () => {
    basketMenu.style.display = 'none';
})
const fullProduct = []
const render = () => {
    basketMenu.innerHTML = '';
    fullProduct.forEach(function (item) {
        const li = document.createElement('div');
        li.classList.add('todo-item');
        li.innerHTML = '<div class="todo-element>' +
            '<span class="text-todo">' + item.text + '</span>' + '<br>' +
            '<button class="todo-remove">удалить</button>' +
            '</div>';
        basketMenu.append(li);
        li.querySelector('.todo-remove').addEventListener('click', () => {
            let index = fullProduct.indexOf(item);
            fullProduct.splice(index, 1);
            render();
        })
    });

    localStorage.setItem('todoObject', JSON.stringify(fullProduct));
}

if (localStorage.getItem('todoObject')) {
    fullProduct.push(...JSON.parse(localStorage.getItem('todoObject')));
    render();
}
toBasket.forEach((e) => {
    let productItem = e.closest('.rec-imformation')
    e.addEventListener('click', function (event) {
        event.preventDefault();
        let productItem = e.closest('.rec-imformation')
        let productItemValue = productItem.textContent;
        let length = productItemValue.length - 10;
        productItemValue.slice(0, length);
        productItemValue += ''

        const newTodo = {
            text: productItem.textContent,
        };


        fullProduct.push(newTodo);
        render();

    });
})