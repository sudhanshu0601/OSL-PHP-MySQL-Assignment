# OSL-PHP-MySQL-Assignment

## Description
This is a basic student record system built using PHP and MySQL. It allows users to input student details including name, age, and email. The submitted data is displayed in a table format below the form, and each record includes a **Delete** button to remove the entry from the database.

## Features
- Add student name, age, and email
- Display records in a table
- Delete individual records with a button click

## What I Learned
- Connecting PHP to a MySQL database using `mysqli`
- Handling form submissions and database CRUD operations
- Sanitizing user input for basic security
- Dynamically generating HTML content with PHP

## Challenges Faced
- **Form resubmission on page reload**: The form data would be resubmitted when the page was refreshed. This was resolved by redirecting after form submission using the `header("Location: ...")` function (Post/Redirect/Get pattern).
- **Handling empty form inputs**: I had to add validation checks to ensure all fields were filled before submission.
- **Delete operation**: Ensuring that only the selected record gets deleted by passing a unique `id` and validating it before deletion.
- **Displaying updated records**: After insertion or deletion, making sure the table reflects the current state of the database without requiring a full page refresh logic.

## How to Run
1. Set up a local server using XAMPP or similar.
2. Create a MySQL database and import the `students` table.
3. Place the PHP files in the server directory (e.g., `htdocs` in XAMPP).
4. Start Apache and MySQL, then navigate to the project in your browser.

