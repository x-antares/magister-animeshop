import { catalog$ } from "./catalog";

document.querySelector('.js-global-search-btn').addEventListener('click', async (event) => {
    const catalog = catalog$.current();

    if (!catalog.search) {
        return;
    }

    const url = await catalog.fetchUrl();

    if (url) {
        window.location.href = url;
    }
})

document.querySelector('.js-global-search-input').addEventListener('input', async (event) => {
    const catalog = catalog$.current();

    catalog.applySearch(event.target.value);

    catalog$.feed(catalog);
})
