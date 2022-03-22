import Categories from "./components/Categories";

Statamic.booting(() => {
    Statamic.$components.register('appart-store-categories', Categories);
});
