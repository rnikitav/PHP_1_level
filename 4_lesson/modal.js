let buttons = document.querySelectorAll('button');
let pastePlace = document.querySelector('body');
buttons.forEach(function (button) {
    button.addEventListener('click', function (event) {
        clickButton(event);
    })
});
function clickButton(button) {
    let linkImg = button.target.parentNode.children[0].children[0].currentSrc;
    pastePlace.insertAdjacentHTML("afterbegin", `
            <div class="img-block">
                <div class="img-msg">
                <img src="${linkImg}" alt="photo" class="animated zoomIn">

                    <button class="close-btn">X</button>
                </div>

            </div>`);
    let closeBtn = document.querySelector('.close-btn');
    let blockDel = closeBtn.parentNode.parentNode;
    closeBtn.addEventListener('click', function () {
        blockDel.children[0].classList.add('zoomOut');
        setTimeout(function () {
            blockDel.remove();
        },500);
    })
}
