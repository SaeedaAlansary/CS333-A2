# UOB API Data Retrieval and Visualization

## Team Members
- **Student Name 1:** Danah Alkhan  **ID:** 202100476
- **Student Name 2:** Saeeda Alansari  **ID:** 202100476
- **Section:** 02

## Project Overview
This project fetches and displays student nationality data from the University of Bahrain (UOB) for IT bachelor's programs, using data from the Bahrain Open Data Portal.

## Tools and Frameworks
- **PHP**: Server-side scripting for API data retrieval.
- **Pico CSS**: Lightweight CSS framework for responsive design.
- **HTML5**: To create the structure of the table.
  
## Features
- API data retrieval using PHP.
- Responsive table design with Pico CSS.
- Clean, commented code for readability.

## Tasks

### Task 1: Data Retrieval
- The data is fetched from the Bahrain Open Data Portal API using PHP's `file_get_contents()` function. 
- The JSON response is parsed into a PHP array using `json_decode()`.
- Proper error handling is implemented to ensure the application gracefully handles issues like API connectivity problems or malformed responses.

### Task 2: Data Visualization
- The parsed data is displayed in a clean, responsive HTML table.
- **Pico CSS** is used for styling to ensure the table is visually appealing and supports mobile responsiveness.
- Overflow handling is implemented with a scrollable container for tables that exceed the screen width.
- The table is structured with headers for fields like `Year`, `Semester`, `Nationality`, `Colleges`, and `Number of Students`.
- Static content such as the description of "The Programs" column is added to maintain alignment with the project requirements.
  
## API Reference
- [Bahrain Open Data Portal](https://data.gov.bh/)
This dataset offers a comprehensive view of student demographics at the University of Bahrain, providing valuable insights into the institution's student composition and enrollment trends.

