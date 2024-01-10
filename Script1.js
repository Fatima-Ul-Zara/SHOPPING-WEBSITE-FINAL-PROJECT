
//Page 1 


// Navigation Links
const loginLink = document.querySelector('.login');
const homeLink = document.querySelector('.home');
const shopLink = document.querySelector('.shop');
const aboutUsLink = document.querySelector('.text-wrapper');
const contactUsLink = document.querySelector('.contact-US');

// event listeners for navigation links
loginLink.addEventListener('click', function() {
    // Handle login link click
});

homeLink.addEventListener('click', function() {
    // Handle home link click
});

shopLink.addEventListener('click', function() {
    // Handle shop link click
});

aboutUsLink.addEventListener('click', function() {
    // Handle about us link click
});

contactUsLink.addEventListener('click', function() {
    // Handle contact us link click
});

// JavaScript for the exclusive offer countdown timer
function countdown() {
    const daysElement = document.querySelector('.text-wrapper-45');
    const hoursElement = document.querySelector('.text-wrapper-47');
    const minutesElement = document.querySelector('.text-wrapper-49');
    
    let days = 6;
    let hours = 18;
    let minutes = 48;
    
    const countdownInterval = setInterval(function() {
        if (days === 0 && hours === 0 && minutes === 0) {
            clearInterval(countdownInterval);
            console.log('Offer has ended!');
            // Your logic when the offer ends
        } else {
            if (minutes === 0) {
                if (hours === 0) {
                    days--;
                    hours = 23;
                } else {
                    hours--;
                }
                minutes = 59;
            } else {
                minutes--;
            }
            
            daysElement.textContent = days < 10 ? `0${days}` : days;
            hoursElement.textContent = hours < 10 ? `0${hours}` : hours;
            minutesElement.textContent = minutes < 10 ? `0${minutes}` : minutes;
        }
    }, 60000); // Update every minute
}

countdown(); // Start the countdown






// JavaScript for the "See all" button
const seeAllButton = document.querySelector('.text-wrapper-20');
seeAllButton.addEventListener('click', function() {
    console.log('See all button clicked');
    });


// Social Media Links
const facebookIcon = document.querySelector('.facebook');
const twitterIcon = document.querySelector('.twitter');
const instagramIcon = document.querySelector('.instagram');

facebookIcon.addEventListener('click', function() {
    window.open('https://www.facebook.com/yourpage', '_blank');
});

twitterIcon.addEventListener('click', function() {
    window.open('https://twitter.com/yourpage', '_blank');
});

instagramIcon.addEventListener('click', function() {
    window.open('https://www.instagram.com/yourpage', '_blank');
});


// Form Validation
document.querySelector('.submit').addEventListener('click', function() {
    const emailInput = document.querySelector('.email-input').value;
    if (!isValidEmail(emailInput)) {
        alert('Please enter a valid email!');
    } else {
        // Process the form submission
    }
});

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

});

//Page 2 
// Social Media Links
const facebookIcon = document.querySelector('.facebook');
const twitterIcon = document.querySelector('.twitter');
const instagramIcon = document.querySelector('.instagram');

facebookIcon.addEventListener('click', function() {
    window.open('https://www.facebook.com/yourpage', '_blank');
});

twitterIcon.addEventListener('click', function() {
    window.open('https://twitter.com/yourpage', '_blank');
});

instagramIcon.addEventListener('click', function() {
    window.open('https://www.instagram.com/yourpage', '_blank');
});

// Email Subscription Form Validation
document.querySelector('.submit').addEventListener('click', function() {
    const emailInput = document.querySelector('.email-input').value;
    if (!isValidEmail(emailInput)) {
        alert('Please enter a valid email!');
    } else {
        // Process the form submission
        // You can perform actions here after successful form validation
    }
});

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// JavaScript for making product pictures interactive
const productPictures = document.querySelectorAll('.macbook-air img[class^="rectangle"]');
productPictures.forEach(picture => {
    picture.addEventListener('click', function() {
        console.log('Product clicked:', picture.alt); // Log which product picture was clicked
        // Your logic to open the product details goes here
        // For example, you can open a modal or navigate to a new page showing product details
    });
});

// JavaScript for the "More" button
const moreButton = document.querySelector('.text-wrapper-20');
moreButton.addEventListener('click', function() {
    console.log('More button clicked');
    // Your logic for handling the "More" button click
    // For instance, you could show more products or perform other actions
});


// Navigation Links
const loginLink = document.querySelector('.login');
const homeLink = document.querySelector('.home');
const shopLink = document.querySelector('.shop');
const aboutUsLink = document.querySelector('.text-wrapper');
const contactUsLink = document.querySelector('.contact-US');

// event listeners for navigation links 
loginLink.addEventListener('click', function() {
    // Handle login link click
});

homeLink.addEventListener('click', function() {
    // Handle home link click
});

shopLink.addEventListener('click', function() {
    // Handle shop link click
});

aboutUsLink.addEventListener('click', function() {
    // Handle about us link click
});

contactUsLink.addEventListener('click', function() {
    // Handle contact us link click
});


page 3 perfect Matte gloss
// FOREVER BEAUTIFUL MATTE GLOSS product details
const matteGlossText = document.querySelector('.text-wrapper');
const matteGlossPrice = document.querySelector('.text-wrapper-2');
const colors = document.querySelectorAll('.rectangle-2'); // Select all color options
const quantityMinus = document.querySelector('.text-wrapper-8');
const quantityPlus = document.querySelector('.text-wrapper-9');
const quantityDisplay = document.querySelector('.text-wrapper-10');
const addToCartButton = document.querySelector('.text-wrapper-11');
const buyNowButton = document.querySelector('.text-wrapper-12');

// Handling clicks or interactions for FOREVER BEAUTIFUL MATTE GLOSS product details
matteGlossText.addEventListener('click', function() {
    // Handle click on product name text
    // Add specific action or redirection if needed
    console.log("Clicked on FOREVER BEAUTIFUL MATTE GLOSS");
});

matteGlossPrice.addEventListener('click', function() {
    console.log("Clicked on price");
});

colors.forEach(color => {
    color.addEventListener('click', function() {
        // Handle click on each color option
        // Add specific action or change of product color if needed
        console.log("Clicked on color: " + color.nextElementSibling.textContent);
    });
});

quantityMinus.addEventListener('click', function() {
    // Handle click on quantity minus button
    // Subtract from the quantity if needed
    let currentQuantity = parseInt(quantityDisplay.textContent);
    if (currentQuantity > 1) {
        quantityDisplay.textContent = currentQuantity - 1;
        console.log("Decreased quantity to " + (currentQuantity - 1));
    }
});

quantityPlus.addEventListener('click', function() {
    // Handle click on quantity plus button
    // Increment the quantity if needed
    let currentQuantity = parseInt(quantityDisplay.textContent);
    quantityDisplay.textContent = currentQuantity + 1;
    console.log("Increased quantity to " + (currentQuantity + 1));
});

addToCartButton.addEventListener('click', function() {
    // Handle click on "Add to Cart" button
    // Perform actions to add the item to the cart
    console.log("Added to cart");
});

buyNowButton.addEventListener('click', function() {
    // Handle click on "Buy Now" button
    // Perform actions for immediate purchase
    console.log("Buy Now clicked");
});

// Other navigation and social media elements
const navigationLinks = document.querySelectorAll('.group .text-wrapper');
const companyLinks = document.querySelectorAll('.group-2 .text-wrapper');
const emailInput = document.querySelector('.text-wrapper-21');
const submitButton = document.querySelector('.submit');
const socialMediaIcons = document.querySelectorAll('.overlap-5 img');

navigationLinks.forEach(link => {
    link.addEventListener('click', function() {
        // Handle clicks on navigation links
        // Perform actions based on the clicked link
        console.log("Clicked on navigation link: " + link.textContent);
    });
});

companyLinks.forEach(link => {
    link.addEventListener('click', function() {
        // Handle clicks on company links
        // Perform actions based on the clicked link
        console.log("Clicked on company link: " + link.textContent);
    });
});

emailInput.addEventListener('click', function() {
    // Handle click on email input field
    // Add specific action or interaction if needed
    console.log("Clicked on email input");
});

submitButton.addEventListener('click', function() {
    // Handle click on submit button
    // Perform actions based on the submitted data
    console.log("Form submitted");
});

socialMediaIcons.forEach(icon => {
    icon.addEventListener('click', function() {
        // Handle clicks on social media icons
        // Redirect to respective social media if needed
        console.log("Clicked on social media icon: " + icon.classList[0]);
    });
});

//Page 4 
// Navigation links
const homeLink = document.querySelector('.home');
const shopLink = document.querySelector('.shop');
const aboutUsLink = document.querySelector('.text-wrapper');
const contactUsLink = document.querySelector('.contact-US');

// Log In elements
const loginButton = document.querySelector('.login');
const emailInput = document.querySelector('.text-wrapper-5');
const passwordInput = document.querySelector('.overlap-3 .text-wrapper-5');
const signInButton = document.querySelector('.overlap-4 .text-wrapper-7');
const createAccountLink = document.querySelector('.CREATE-ACCOUNT');

// Footer links and social media icons
const footerShopLinks = document.querySelectorAll('.group-2 .text-wrapper');
const footerCompanyLinks = document.querySelectorAll('.group-3 .text-wrapper');
const footerEmailInput = document.querySelector('.overlap-6 .text-wrapper-16');
const footerSubmitButton = document.querySelector('.overlap-6 .submit');
const socialMediaIcons = document.querySelectorAll('.overlap-5 img');
const footerTerms = document.querySelector('.text-wrapper-18');
const footerPrivacy = document.querySelector('.text-wrapper-19');
const footerCookies = document.querySelector('.text-wrapper-20');

// Add event listeners for navigation links
homeLink.addEventListener('click', function() {
    // Action when Home link is clicked
    console.log("Clicked on HOME");
    // Add specific actions or redirections if needed
});

shopLink.addEventListener('click', function() {
    // Action when Shop link is clicked
    console.log("Clicked on SHOP");
    // Add specific actions or redirections if needed
});

aboutUsLink.addEventListener('click', function() {
    // Action when About Us link is clicked
    console.log("Clicked on ABOUT US");
    // Add specific actions or redirections if needed
});

contactUsLink.addEventListener('click', function() {
    // Action when Contact Us link is clicked
    console.log("Clicked on CONTACT US");
    // Add specific actions or redirections if needed
});

// Add event listeners for Log In elements
loginButton.addEventListener('click', function() {
    // Action when Login button is clicked
    console.log("Clicked on LOGIN");
    // Add specific actions or redirections if needed
});

signInButton.addEventListener('click', function() {
    // Action when Sign In button is clicked
    console.log("Clicked on SIGN IN");
    // Add specific actions or redirections if needed
});

createAccountLink.addEventListener('click', function() {
    // Action when Create Account link is clicked
    console.log("Clicked on CREATE ACCOUNT");
    // Add specific actions or redirections if needed
});

// Add event listeners for footer links and social media icons
footerShopLinks.forEach(link => {
    link.addEventListener('click', function() {
        console.log("Clicked on footer SHOP link: " + link.textContent);
        // Add specific actions or redirections if needed
    });
});

footerCompanyLinks.forEach(link => {
    link.addEventListener('click', function() {
        console.log("Clicked on footer COMPANY link: " + link.textContent);
        // Add specific actions or redirections if needed
    });
});

footerSubmitButton.addEventListener('click', function() {
    // Action when Submit button in the footer is clicked
    console.log("Footer form submitted");
    // Add specific actions or validation if needed
});

socialMediaIcons.forEach(icon => {
    icon.addEventListener('click', function() {
        console.log("Clicked on social media icon: " + icon.classList[0]);
        // Redirect to respective social media if needed
    });
});

footerTerms.addEventListener('click', function() {
    console.log("Clicked on footer Terms");
    // Add specific actions or redirections if needed
});

footerPrivacy.addEventListener('click', function() {
    console.log("Clicked on footer Privacy");
    // Add specific actions or redirections if needed
});

footerCookies.addEventListener('click', function() {
    console.log("Clicked on footer Cookies");
    // Add specific actions or redirections if needed
});

//Page 5 
// Function to validate the form
function validateForm() {
    const emailInput = document.querySelector('.overlap .p');
    const countryInput = document.querySelector('.overlap-group .text-wrapper-3');
    const deliveryInput = document.querySelector('.overlap-group .text-wrapper-4');
    const addressInput = document.querySelector('.div-wrapper .text-wrapper-5');
    const firstNameInput = document.querySelector('.overlap-2 .text-wrapper-6');
    const lastNameInput = document.querySelector('.overlap-3 .text-wrapper-7');
    const paymentInput = document.querySelector('.overlap-5 .text-wrapper-12');
    const mobileNumberInput = document.querySelector('.overlap-6 .p');

    // Perform validation checks
    if (emailInput.textContent === '' || !isValidEmailOrPhoneNumber(emailInput.textContent)) {
        alert('Please enter a valid email or mobile phone number.');
        return false;
    }

    if (countryInput.textContent === '') {
        alert('Please enter your country.');
        return false;
    }

    if (deliveryInput.textContent === '') {
        alert('Please enter delivery details.');
        return false;
    }

    if (addressInput.textContent === '') {
        alert('Please enter your address.');
        return false;
    }

    if (firstNameInput.textContent === '') {
        alert('Please enter your first name.');
        return false;
    }

    if (lastNameInput.textContent === '') {
        alert('Please enter your last name.');
        return false;
    }

    if (paymentInput.textContent === '') {
        alert('Please choose a payment method.');
        return false;
    }

    if (mobileNumberInput.textContent === '' || !isValidEmailOrPhoneNumber(mobileNumberInput.textContent)) {
        alert('Please enter a valid mobile phone number for orders and delivery.');
        return false;
    }

    // If all validations pass, form is valid
    alert('Form submitted successfully!');
    return true;
}

// Function to check if input is a valid email or phone number
function isValidEmailOrPhoneNumber(input) {
    // Add your validation logic here
    // This is a basic example for demonstration purposes
    // You can use regular expressions or other validation methods
    return /\S+@\S+\.\S+/.test(input) || /^\d+$/.test(input);
}

// Submit button click event
const submitButton = document.querySelector('.overlap-7 .text-wrapper-14');
submitButton.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default form submission
    validateForm();
});
 
//page 6
// Navigation Links
const loginLink = document.querySelector('.login');
const homeLink = document.querySelector('.home');
const shopLink = document.querySelector('.shop');
const aboutUsLink = document.querySelector('.text-wrapper');
const contactUsLink = document.querySelector('.contact-US');

// event listeners for navigation links
loginLink.addEventListener('click', function() {
    // Handle login link click
});

homeLink.addEventListener('click', function() {
    // Handle home link click
});

shopLink.addEventListener('click', function() {
    // Handle shop link click
});

aboutUsLink.addEventListener('click', function() {
    // Handle about us link click
});

contactUsLink.addEventListener('click', function() {
    // Handle contact us link click
});


// Social Media Links
const facebookIcon = document.querySelector('.facebook');
const twitterIcon = document.querySelector('.twitter');
const instagramIcon = document.querySelector('.instagram');

facebookIcon.addEventListener('click', function() {
    window.open('https://www.facebook.com/yourpage', '_blank');
});

twitterIcon.addEventListener('click', function() {
    window.open('https://twitter.com/yourpage', '_blank');
});

instagramIcon.addEventListener('click', function() {
    window.open('https://www.instagram.com/yourpage', '_blank');
});


// Form Validation
document.querySelector('.submit').addEventListener('click', function() {
    const emailInput = document.querySelector('.email-input').value;
    if (!isValidEmail(emailInput)) {
        alert('Please enter a valid email!');
    } else {
        // Process the form submission
    }
});

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

});

//page 7 
// Navigation Links
const loginLink = document.querySelector('.login');
const homeLink = document.querySelector('.home');
const shopLink = document.querySelector('.shop');
const aboutUsLink = document.querySelector('.text-wrapper');
const contactUsLink = document.querySelector('.contact-US');

// event listeners for navigation links
loginLink.addEventListener('click', function() {
    // Handle login link click
});

homeLink.addEventListener('click', function() {
    // Handle home link click
});

shopLink.addEventListener('click', function() {
    // Handle shop link click
});

aboutUsLink.addEventListener('click', function() {
    // Handle about us link click
});

contactUsLink.addEventListener('click', function() {
    // Handle contact us link click
});


<script>
    function validateForm() {
        let name = document.getElementById('name').value;
        let phone = document.getElementById('phone').value;
        let email = document.getElementById('email').value;
        let comment = document.getElementById('comment').value;

        if (name === '' || phone === '' || email === '') {
            alert('Please fill in all required fields.');
            return false;
        }
;
    }
</script>

// Social Media Links
const facebookIcon = document.querySelector('.facebook');
const twitterIcon = document.querySelector('.twitter');
const instagramIcon = document.querySelector('.instagram');

facebookIcon.addEventListener('click', function() {
    window.open('https://www.facebook.com/yourpage', '_blank');
});

twitterIcon.addEventListener('click', function() {
    window.open('https://twitter.com/yourpage', '_blank');
});

instagramIcon.addEventListener('click', function() {
    window.open('https://www.instagram.com/yourpage', '_blank');
});


// Form Validation
document.querySelector('.submit').addEventListener('click', function() {
    const emailInput = document.querySelector('.email-input').value;
    if (!isValidEmail(emailInput)) {
        alert('Please enter a valid email!');
    } else {
        // Process the form submission
    }
});

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

});
