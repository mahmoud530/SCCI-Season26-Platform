// contact validations

document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("form");
  const nameInput = document.getElementById("name");
  const emailInput = document.getElementById("email");
  const messageInput = document.getElementById("message");
  const phoneInput = document.getElementById("number");

  if (!form) return;

  form.addEventListener("submit", (e) => {
    let isValid = true;

    // name validation
    if (nameInput.value.trim().length < 3) {
      showError(nameInput, "Name must be at least 3 characters");
      isValid = false;
    }

    // email validation
    if (!isValidEmail(emailInput.value.trim())) {
      showError(emailInput, "Enter a valid email address");
      isValid = false;
    }

    // phone validation
    if (!isValidEgyptianMobile(phoneInput.value.trim())) {
      showError(phoneInput, "Enter a valid phone number");
      isValid = false;
    }
    
    // message validation
    if (messageInput.value.trim().length < 10) {
      showError(messageInput, "Message must be at least 10 characters");
      isValid = false;
    }

      // stop the submit action until validation is complete
    if (!isValid) e.preventDefault();
  });

  // clear error message when re-inputing
  [nameInput, emailInput, messageInput, phoneInput].forEach(input => {
    input.addEventListener("input", () => clearError(input));
  });

    
  function showError(input, message) {
    input.parentElement.querySelector(".error").textContent = message;
    input.classList.add("invalid");
  }

    // clear input
  function clearError(input) {
    input.parentElement.querySelector(".error").textContent = "";
    input.classList.remove("invalid");
  }

  function isValidEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
  }

  function isValidEgyptianMobile(phone) {
    return /^(\+20|0)?1[0-2,5]\d{8}$/.test(phone);
  }
});

