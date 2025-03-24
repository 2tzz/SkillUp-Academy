# SkillUp Academy

## Overview
SkillUp Academy is an educational platform designed to provide online courses, learning materials, and interactive features for students and professionals looking to enhance their skills. The platform aims to offer a user-friendly experience with structured learning paths and progress tracking.

## Features
- **User Registration & Authentication**: Secure login system for users.
- **Course Enrollment**: Users can browse and enroll in courses.
- **Learning Dashboard**: Track progress and completed courses.
- **Quizzes & Assessments**: Evaluate understanding through quizzes.
- **Admin Panel**: Manage users, courses, and content.

## Technologies Used
- HTML5
- CSS
- PHP
- JavaScript

## Installation Guide

### Prerequisites
Ensure you have the following installed before proceeding:
- A web server (such as Apache or XAMPP)
- PHP
- A web browser

### Steps to Install and Run
1. **Clone the repository**:
   ```sh
   git clone https://github.com/2tzz/SkillUp-Academy.git
   cd SkillUp-Academy
   ```
2. **Set up a local server**:
   - If using XAMPP, move the project folder to the `htdocs` directory.
3. **Start the server**:
   - Open XAMPP and start the Apache server.
4. **Configure the database** (if applicable):
   - Open `phpMyAdmin` and create a new database (e.g., `skillup_db`).
   - Import the provided `.sql` file into the database.
5. **Update database connection settings** in `config.php`:
   ```php
   $host = "localhost";
   $user = "root";
   $password = "";
   $database = "skillup_db";
   ```
6. **Open the project in a browser**:
   - Navigate to `http://localhost/SkillUp-Academy/`

## Usage
- Register or log in to access the platform.
- Browse and enroll in courses.
- Track learning progress and complete assessments.
- Admins can manage content and users from the dashboard.

## Contributing
Contributions are welcome! If you’d like to improve the project, follow these steps:
1. Fork the repository.
2. Create a new branch (`feature-branch`).
3. Commit your changes.
4. Push to your fork and submit a pull request.

## License
This project is licensed under the MIT License.

## Contact
For any queries or support, please open an issue on the GitHub repository.

---

Let me know if you need any modifications!

