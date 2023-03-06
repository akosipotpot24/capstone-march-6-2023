// Get a reference to the dashboard link and dashboard container elements
const dashboardLink = document.getElementById('dashboard-link');
const dashboardContainer = document.getElementById('dashboard-container');

// Add a click event listener to the dashboard link
dashboardLink.addEventListener('click', () => {
  // Create a new XMLHttpRequest object
  const xhr = new XMLHttpRequest();

  // Set up a callback function to handle the response
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Replace the contents of the dashboard container with the response text
      dashboardContainer.innerHTML = xhr.responseText;
    }
  };

  // Send a GET request to the mainDashboard.php file
  xhr.open('GET', 'mainDashboard.php');
  xhr.send();
});
