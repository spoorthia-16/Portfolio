function addRecommendation() {
    // Get the value from the textarea and trim whitespace
    let input = document.getElementById("recommendation-input").value.trim();

    if (input) {
        let list = document.getElementById("recommendations-list");
        let newItem = document.createElement("li");
        // Basic sanitization
        newItem.textContent = input; 
        list.appendChild(newItem);
        
        document.getElementById("recommendation-input").value = "";
        alert("✅ Thank you! Your recommendation has been added.");
    } else {
        alert("⚠️ Please write something before submitting.");
    }
}

document.addEventListener('DOMContentLoaded', (event) => {
    const contactForm = document.getElementById('contact-form');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const message = document.getElementById('message').value.trim();

            if (!name || !email || !message) {
                alert('❌ All fields in the contact form must be filled out.');
                return;
            }
            
            // Basic Email Regex Validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('❌ Please enter a valid email address.');
                return;
            }

            alert('🎉 Message sent successfully');
            contactForm.reset();
            
        });
    }
});