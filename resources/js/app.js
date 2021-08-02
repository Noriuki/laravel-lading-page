require("./bootstrap");

/* change active menu item */
let elementList = window.document.getElementsByClassName("nav-item");

var elementsArray = [...elementList];

const changeActiveMenuItem = (element) => {
    elementsArray.map((element) => {
        element.classList.remove("active");
    });
    element.classList.add("active");
};

elementsArray.map((element) => {
    element.addEventListener("click", () => changeActiveMenuItem(element));
});

/* input validate and mask cellphone */
let inputCel = window.document.getElementById("inputCellphone");

inputCel.onkeydown = function () {
    this.value = validateCellphone(this.value);
};
const validateCellphone = (value) => {
    if (value.length > 15) return (value = value.slice(0, -1));
    value = value.replace(/\D/g, "");
    value = value.replace(/^(\d{2})(\d)/g, "($1) $2");
    value = value.replace(/(\d)(\d{4})$/, "$1-$2");
    return value;
};
