const btnActions = document.getElementsByClassName("btn-of-actions");

const areaOptions = document.querySelector("div.options")

btnActions[0].addEventListener('click', () => {
    areaOptions.classList.toggle("show")
})