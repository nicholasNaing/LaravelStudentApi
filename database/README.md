# Student Management API

This project is a Laravel API for managing students, student types, and student card IDs. It provides endpoints for creating, retrieving, updating, and deleting student records. The API also supports relationships between students, student types, and student cards.

## Features

-   Create, retrieve, update, and delete student records
-   Associate students with specific student types and student card IDs
-   Generate unique student card IDs for each student using a UUID
-   Implement request validation for creating and updating students
-   Pagination support for listing students
-   Strong relationships between three tables

## API Endpoints

The following API endpoints are available:

-   `GET /api/students`: Retrieve a list of all students.
-   `GET /api/students/{student}`: Retrieve details of a specific student by the instance of a student.
-   `POST /api/students`: Create a new student.
    -   Parameters: name, email, date_of_birth, student_type_id
-   `PUT /api/students/{student}`: Update the details of a specific student by the instance of a student.
    -   Parameters: name, email, date_of_birth, student_type_id
-   `DELETE /api/students/{id}`: Delete a specific student by ID.

## Request Validation

The API implements request validation to ensure that the required fields are present and valid. It also validates that the provided student types exist in their respective tables.

## Student Card ID Assignment

Each student is assigned a unique student card ID when they are created. The API generates a unique identifier (UUID) for the student card ID.

## Getting Started

To get started with the project, follow these steps:

1. Migrate the tables first. The migrations are in order in algin with the foreign key relationshhip.
2. You may need to fill the data in the student_types table first. Or else, you wont be able to fill the students table because of the validation.
3. Afther finishing the data entries in student_types table, you can add students data now. You would only need to fill four data fields, as the card_number field is auto-generated accordance with the name and the student_id.
4. Through the api calls, you can add, retrieve, update and delete the students.
5.
6. Explore the API endpoints using a tool like Postman or cURL.

## Conclusion

With this Laravel API for student management, you can easily create, retrieve, update, and delete student records. It provides a straightforward way to manage student types and student card IDs while ensuring proper validation and error handling.

Feel free to modify and enhance the project as per your requirements!
