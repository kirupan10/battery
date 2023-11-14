// Function to write a cookie
function setCookie(name, value, days) {
  const expires = new Date();
  expires.setTime(expires.getTime() + days * 24 * 60 * 60 * 1000);
  document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/`;
}

// Function to read a cookie
function getCookie(name) {
  const cookies = document.cookie.split(";");
  for (const cookie of cookies) {
    const [cookieName, cookieValue] = cookie.split("=");
    if (cookieName.trim() === name) {
      return cookieValue;
    }
  }
  return null;
}

// Example usage
// setCookie("username", "Dineth", 7); // Set a cookie named 'username' with value 'Dineth' that expires in 7 days
// const username = getCookie("username"); // Retrieve the value of the 'username' cookie
// console.log(username); // Output: Dineth
