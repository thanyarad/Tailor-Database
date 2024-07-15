# SmartStitch

SmartStitch is a full-stack web application designed to streamline the interaction between tailors and their clients. It provides a user-friendly platform for managing client measurements, placing garment orders, and ensuring efficient communication.

## Table of Contents
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [Contributors](#contributors)
- [Acknowledgments](#acknowledgments)
- [Contacts](#contacts)

## Features
- User registration and authentication
- Profile management for clients
- Order placement for garments (pants and shirts)
- Admin portal for managing client data and orders
- Measurement management for tailoring
- Responsive design for accessibility on various devices
- Secure data handling and encryption

## Technologies Used
### Front-End
- HTML5
- CSS3
- JavaScript
- Bootstrap (optional, if used)

### Back-End
- PHP

### Database
- MySQL
- phpMyAdmin

### Hosting
- 000WebHost

## Installation
### Prerequisites
- PHP
- MySQL
- A web server (e.g., Apache)
- Composer (for PHP dependencies)

### Steps
1. Clone the repository:
   ```bash
   git clone https://github.com/AkashAcharya03/tailor-database.git
   ```
2. Navigate to the project directory:
   ```bash
   cd tailor-database
   ```
3. Import the MySQL database using `phpMyAdmin` or a similar tool:
   - Create a database named `smartstitch`.
   - Import the `smartstitch.sql` file located in the `database` directory.

4. Update the database configuration in `config.php`:
   ```php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'your_username');
   define('DB_PASSWORD', 'your_password');
   define('DB_NAME', 'smartstitch');
   ```

5. Start your web server and navigate to the project directory in your browser.

## Usage
1. Register as a new user or log in as an admin.
2. Manage client profiles, place garment orders, and enter measurement details.
3. Use the admin portal to view and manage client data and orders.

## Project Structure
```
tailor-database/
│
├── database/
│   └── smartstitch.sql
│
├── public/
│   ├── css/
│   ├── js/
│   ├── images/
│   ├── index.php
│   └── ...
│
├── src/
│   ├── includes/
│   ├── classes/
│   └── ...
│
├── config.php
├── README.md
└── ...
```

## Contributors
We welcome contributions! If you'd like to contribute to SmartStitch, please follow our [Contribution Guidelines](CONTRIBUTING.md).
- [Your Name](https://github.com/AkashAcharya03)
- [Other Team Members]

### Acknowledgments

We would like to express our gratitude to the following:

[1]	Achour, Mehdi, Friedhelm Betz, Antony Dovgal, Nuno Lopes, Hannes Magnusson, Georg Richter, Damien Seguy, and Jakub Vrana. 1997. PHP Manual. Edited by Peter Cowburn. N.p.: PHP Documentation Group.
[2]	“CSS Tutorial.” n.d. W3Schools. Accessed December 3, 2023. https://www.w3schools.com/css/.
[3]	Draw.io. n.d. draw.io. Accessed December 2, 2023. http://draw.io.
[4]	Glowtouch LLC. n.d. “GlowTouch logo.” GlowTouch LLC - Crunchbase Company Profile & Funding. https://images.crunchbase.com/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/mqiwzcgrmoio8ioflmlw.
[5]	“HTML Tutorial.” n.d. W3Schools. Accessed December 3, 2023. https://www.w3schools.com/html/.
[6]	“JavaScript Tutorial.” n.d. W3Schools. Accessed December 3, 2023. https://www.w3schools.com/js/default.asp.
[7]	“Learn HTML Tutorial - javatpoint.” n.d. Javatpoint. Accessed December 3, 2023. https://www.javatpoint.com/html-tutorial.
[8]	phpmyadmin. n.d. phpMyAdmin. Accessed December 2, 2023. https://www.phpmyadmin.net/.
[9]	“PHP Tutorial.” n.d. W3Schools. Accessed December 3, 2023. https://www.w3schools.com/php/default.asp.
[10]	“SQL Tutorial.” n.d. W3Schools. Accessed December 3, 2023. https://www.w3schools.com/sql/default.asp.
[11]	“White Glove Customer Service, Technology and BPO Services.” n.d. GlowTouch. Accessed December 2, 2023. https://www.glowtouch.com/discover-glowtouch/.
[12]	000webhost. n.d. Free Web Hosting with PHP, MySQL and cPanel, No Ads. Accessed December 3, 2023. https://in.000webhost.com/.

### Contact

For questions or feedback, please reach out to us at thanyarkottary2003@gmail.com
