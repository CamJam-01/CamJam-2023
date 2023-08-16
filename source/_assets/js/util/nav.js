/**
 * Nav behavior.
 */

const nav = () => {
  const menuToggles = document.querySelectorAll(".menu-toggle");

  menuToggles.forEach(toggle => {
    toggle.addEventListener("click", (e) => {
      console.log(e.target);
      if (e.target.classList.contains("menu-toggle")) {
        e.target.parentElement.classList.toggle("has-submenu--closed");
      } 
    });
  });
  
}

export default nav;