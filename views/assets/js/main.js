const searchInput = document.getElementById("search-input");
const iconSearch = document.getElementById("icon-search");

searchInput.onfocus = () => {
    iconSearch.classList.add("search-active");
}

searchInput.onblur = () => {
    iconSearch.classList.remove("search-active");
}
