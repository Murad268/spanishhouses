function openMenu(menuSelector, btnSelector, closeSelector, activeClass) {
   const btn = document.querySelector(btnSelector),
         close = document.querySelector(closeSelector),
         menu = document.querySelector(menuSelector);

   btn.addEventListener("click", () => {
      menu.classList.add(activeClass)
   })
   close.addEventListener("click", () => {
      menu.classList.remove(activeClass)
   })
}

openMenu(".hamburger__menu", ".navbar__hamburger", ".hamburger__menu__exit", "active")


function openSelect(mainSelector, bottomSelector, parentSelector, activeClass) {
   const main = document.querySelector(mainSelector),
         parenet = document.querySelector(parentSelector),
         bottom = document.querySelector(bottomSelector);

    if(main) {
        main.addEventListener("click", () => {
            parenet.classList.toggle(activeClass);
         })
    }


}

openSelect(".type__building__street__main", ".type__building__street .type__building__bottom", ".type__building__street", "active");
openSelect(".typpage__inputs__box__main", ".typpage__inputs__box .type__building__bottom", ".typpage__inputs__box", "active");
