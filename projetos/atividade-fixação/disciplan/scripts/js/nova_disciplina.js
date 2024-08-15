const btnNextStage = document.querySelector("button.next-stage")


btnNextStage.addEventListener('click', () => {
    document.querySelector("div.second-stage").classList.add("show")
})

const form = document.querySelector('form')

form.addEventListener("submit", e => {
    e.preventDefault()
})