const nameProduct = document.querySelectorAll('.rec-imformation')
const toBasket = document.querySelectorAll('.basket')
const list = document.querySelector('.product__list')
console.log(list);

const fullProduct = []
const render = () => {
    list.innerHTML = '';
    fullProduct.forEach(function (item) {
        const li = document.createElement('li');
        li.classList.add('todo-item');
        li.innerHTML = '<span class="text-todo">' + item.text + '</span>' +
            '<button class="todo-remove"></button>'
        list.append(li);
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
    console.log(productItem);
    e.addEventListener('click', function (event) {
        event.preventDefault();
        let productItem = e.closest('.rec-imformation')
        let productItemValue = productItem.textContent;
        let length = productItemValue.length - 10;
        productItemValue.slice(0, length);
        productItemValue += ''
        console.log(productItemValue.length);
        const newTodo = {
            text: productItem.textContent,
        };


        fullProduct.push(newTodo);
        render();

    });
})
// toBasket.forEach((item) => {
//     item.addEventListener('click', () => {
//         let name = item.closest('.rec-imformation')
//         console.log(name.textContent);
//     })
// })
// test.addEventListener('click', () => {
//     let testName = test.closest('.parant');

//     console.log(testName.textContent);
// })
console.log(nameProduct);
console.log(toBasket);
console.log('hello');