import DataQueue from './lib/data-queue';

export const cart$ = new DataQueue();

class Cart {
    products;

    constructor(products) {
        this.products = products || [];
    }

    add(productId, quantity = 1) {
        window.axios.post(`/ajax/cart/update`, {
            data: [{
                id: productId,
                quantity: quantity,
                is_deleted: false
            }]
        }).then(response => {
            this.products = response.data.products;
            cart$.feed(this);
        })
    }

    remove(productId) {
        window.axios.post(`/ajax/cart/update`, {
            data: [{
                id: productId,
                quantity: 1,
                is_deleted: true
            }]
        }).then(response => {
            this.products = response.data.products;
            cart$.feed(this);
        })
    }

    count() {
        let count = 0;

        this.products.forEach(product => {
            count += product.quantity;
        });

        return count;
    }
}

document.querySelectorAll('.js-simple-add-to-cart').forEach(item => {
    item.addEventListener('click', event => {
        event.preventDefault();

        const cart = cart$.current();

        cart.add(item.dataset.productId);
    })
})


document.querySelectorAll('.js-main-add-to-cart').forEach(item => {
    item.addEventListener('click', event => {
        const cart = cart$.current();

        const choosenQuantityItem = item.parentNode.querySelector('.js-cart-product-quantity');

        cart.add(item.dataset.productId, choosenQuantityItem.value);
    })
})

window.axios.get('/ajax/cart').then(response => {
    const cart = new Cart(response.data.products);

    cart$.feed(cart);
});


cart$.onLatest(cart => {
    document.querySelector('.js-cart-count').innerText = cart.count();
})
