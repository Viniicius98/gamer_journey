const index = document.querySelector('li[name="index"]');
const contact = document.querySelector('li[name="contact"]');
const aboutUs = document.querySelector('li[name="about-us"]');

const currentPage = window.location.pathname;

switch (currentPage) {
    case "/":
        // home.style.backgroundColor = '#B91C22';
        index.style.color = "#fff";
        break;
    case "/about-us":
        // aboutus.style.backgroundColor = '#B91C22';
        aboutUs.style.color = "#fff";
        break;
    case "/contact":
        // contact.style.backgroundColor = '#B91C22';
        contact.style.color = "#fff";
        break;
    default:
        console.log(currentPage);
}
