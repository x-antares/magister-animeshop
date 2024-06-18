import DataQueue from './lib/data-queue';
import delegate from 'delegate-event-listener';

export const cart$ = new DataQueue();

class Cart {
    products;

    originalTotal;

    finalTotal;

    find(productId) {
        return this.products.find(product => product.id === productId);
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

    async change(productId, quantity = 1) {
        await window.axios.post(`/ajax/cart/change`, {
            data: [{
                id: productId,
                quantity: quantity
            }]
        });
    }

    async remove(productId, quantity = 1) {
        await window.axios.post(`/ajax/cart/update`, {
            data: [{
                id: productId,
                quantity: quantity,
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
        this.originalTotal = data.originalTotal || 0;
        this.finalTotal = data.finalTotal || 0;
    }
}

document.querySelectorAll('.js-simple-add-to-cart').forEach(item => {
    item.addEventListener('click', async (event) => {
        event.preventDefault();

        const cart = cart$.current();

        await cart.add(item.dataset.productId);

        await cart.fetch();

        cart$.feed(cart);
    })
})


document.querySelectorAll('.js-main-add-to-cart').forEach(item => {
    item.addEventListener('click', async (event) => {
        const cart = cart$.current();

        const choosenQuantityItem = item.parentNode.querySelector('.js-cart-product-quantity');

        await cart.add(item.dataset.productId, choosenQuantityItem.value);

        await cart.fetch();

        cart$.feed(cart);
    })
})

cart$.onLatest(cart => {
    document.querySelector('.js-cart-count').innerText = cart.count();
});

cart$.onLatest(cart => {
    const cartPage = document.querySelector('.js-cart-page');

    if (cartPage) {
        const cartProductRows = cartPage.querySelectorAll('.js-cart-product');

        cartProductRows.forEach(productRow => {
            const product = cart.find(productRow.dataset.productId);

            if (!product) {
                productRow.remove();
                return;
            }

            productRow.querySelector('.js-cart-product-quantity').value = product.quantity;
            productRow.querySelector('.js-cart-product-total').innerText = `$${product.total}`;
            productRow.querySelector('.js-cart-product-price').innerText = `$${product.price}`;
        });

        cartPage.querySelector('.js-cart-original-total').innerText = `$${cart.originalTotal}`;
        cartPage.querySelector('.js-cart-final-total').innerText = `$${cart.finalTotal}`;
    }
});

document.body.addEventListener(...delegate('click', '.js-cart-change-product-quantity', async event => {
    const productRow = event.delegateTarget.closest('.js-cart-product');
    const value = productRow.querySelector('.js-cart-product-quantity').value;

    const cart = cart$.current();
    await cart.add(productRow.dataset.productId, value);
    await cart.fetch();
    cart$.feed(cart);
}));

document.body.addEventListener(...delegate('click', '.js-cart-product-remove', async event => {
    const productRow = event.delegateTarget.closest('.js-cart-product');
    const value = productRow.querySelector('.js-cart-product-quantity').value;

    const cart = cart$.current();
    await cart.remove(productRow.dataset.productId, value);
    await cart.fetch();
    cart$.feed(cart);
}));

const cart = new Cart();

cart.fetch().then(() => cart$.feed(cart));
