import DataQueue from './lib/data-queue';

export const cart$ = new DataQueue();

class Cart {
    products;

    constructor(products = []) {
        this.products = products;
    }

    async add(productId, quantity = 1) {
        await window.axios.post(`/ajax/cart/update`, {
            data: [{
                id: productId,
                quantity: quantity,
                is_deleted: false
            }]
        });
    }

    async remove(productId) {
        await window.axios.post(`/ajax/cart/update`, {
            data: [{
                id: productId,
                quantity: 1,
                is_deleted: true
            }]
        });
    }

    count() {
        let count = 0;

        this.products.forEach(product => {
            count += product.quantity;
        });

        return count;
    }

    async fetch () {
        const { data } = await window.axios.get('/ajax/cart');

        this.products = data.products;
    }
}

document.querySelectorAll('.js-simple-add-to-cart').forEach(item => {
    item.addEventListener('click', async (event) => {
        event.preventDefault();

        const cart = cart$.current();

        await cart.add(item.dataset.productId);

        await this.fetch();

        cart$.feed(this);
    })
})


document.querySelectorAll('.js-main-add-to-cart').forEach(item => {
    item.addEventListener('click', async (event) => {
        const cart = cart$.current();

        const choosenQuantityItem = item.parentNode.querySelector('.js-cart-product-quantity');

        await cart.add(item.dataset.productId, choosenQuantityItem.value);

        await this.fetch();

        cart$.feed(this);
    })
})

cart$.onLatest(cart => {
    document.querySelector('.js-cart-count').innerText = cart.count();
})

const cart = new Cart();

cart.fetch().then(() => cart$.feed(cart));
