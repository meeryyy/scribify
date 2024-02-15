import './bootstrap';

import 'flowbite';



const btn = document.getElementById('switchark');
const htmlElement = document.querySelector('html');

// Function to toggle between dark and light themes
const toggleTheme = () => {
    htmlElement.classList.toggle('dark');
    const isDarkMode = htmlElement.classList.contains('dark');
    // Save the current theme in local storage
    localStorage.setItem('darkMode', isDarkMode);
};

// Event listener for the button click
btn.addEventListener('click', toggleTheme);

// Function to set the default theme based on local storage
const setDefaultTheme = () => {
    const isDarkMode = localStorage.getItem('darkMode') === 'true';
    // Set the default theme based on the stored value
    if (isDarkMode) {
        htmlElement.classList.add('dark');
    } else {
        htmlElement.classList.remove('dark');
    }
};

// Set the default theme when the page loads
setDefaultTheme();
