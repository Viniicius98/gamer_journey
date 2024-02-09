const register = document.querySelector('li[name="register"]');
const contact = document.querySelector('li[name="contact"]');
const aboutUs = document.querySelector('li[name="about-us"]');
const power = document.querySelector('li[name="power"]');

const currentPage = window.location.pathname;

switch (currentPage) {
    case "/":
        // home.style.backgroundColor = '#B91C22';
        register.style.color = "black";
        break;
    case "/about-us":
        // aboutus.style.backgroundColor = '#B91C22';
        aboutUs.style.color = "black";
        break;
    case "/contact":
        // contact.style.backgroundColor = '#B91C22';
        contact.style.color = "black";
        break;
    case "/powerBi":
        // power.style.backgroundColor = '#B91C22';
        power.style.color = "black";
        break;
    default:
        console.log(currentPage);
}
