const searchInput = document.getElementById("searchInput");
const resultsList = document.getElementById("results");

searchInput.addEventListener("input", function () {
    const searchTerm = searchInput.value;

    fetch("../filter.php?searchTerm=" + searchTerm)
        .then(function (response) {
            return response.text();
        })
        .then(function (results) {
            resultsList.innerHTML = results;
        });
});
