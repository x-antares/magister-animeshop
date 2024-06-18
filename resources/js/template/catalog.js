import DataQueue from './lib/data-queue';

export const catalog$ = new DataQueue();

class Catalog {
    filters;

    search;

    sortBy;

    perPage;

    constructor({ filters = [], search = '', sortBy = null, perPage = 10 }) {
        this.filters = filters;
        this.search = search;
        this.sortBy = sortBy;
        this.perPage = perPage;
    }

    applySearch(search) {
        this.search = search;
    }

    applySortBy(sortBy) {
        this.sortBy = sortBy;
    }

    applyPerPage(perPage) {
        this.perPage = perPage;
    }

    applyFilter(attribute, value) {
        this.filters.push({
            attribute: attribute,
            value: value
        });
    }

    removeFilter(attribute, value) {
        const index = this.filters.findIndex(filter => filter.attribute === attribute && filter.value === value);
        if (index !== -1) {
            this.filters.splice(index, 1);
        }
    }

    async fetchUrl() {
        const { data } = await window.axios.post('/ajax/catalog/filters',  {
            filters: catalog.filters,
            search: catalog.search,
            sort: catalog.sortBy,
            per_page: catalog.perPage
        });

        return data.url || null;
    }
}

const filters = [];

document.querySelectorAll('.js-filter-input').forEach(item => {
    const filterAttribute = item.closest('.js-filter-attribute');

    if (item.checked) {
        filters.push({
            attribute: filterAttribute.dataset.filterAttribute,
            value: item.dataset.filterValue
        });
    }

    item.addEventListener('change', async (event) => {
        const catalog = catalog$.current();

        if (event.target.checked) {
            catalog.applyFilter(filterAttribute.dataset.filterAttribute, item.dataset.filterValue);
        } else {
            catalog.removeFilter(filterAttribute.dataset.filterAttribute, item.dataset.filterValue);
        }
    })
});

const catalog = new Catalog({ filters });

catalog$.feed(catalog);

document.querySelector('.js-submit-filters')?.addEventListener('click', async (event) => {
    event.preventDefault();

    const catalog = catalog$.current();

    const url = await catalog.fetchUrl();

    if (url) {
        window.location.href = url;
    }
})
