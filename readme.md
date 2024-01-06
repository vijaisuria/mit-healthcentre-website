# MIT Health Centre Website 🏥

Welcome to our College Health Centre's website repository! 🌟

This website is designed using the Bootstrap CSS framework along with HTML, jQuery, and PHP to create a mobile-responsive, visually appealing, and user-friendly experience. 📱✨

## Features ✨

- **Mobile Responsive**: Ensures a seamless experience across devices.
- **Feedback Collection**: Easily gather feedback from users.
- **Ticket Management**: Efficiently manage issues and notify users about their status via email using unique ticket numbers.

## Pages 📄

1. **Home**: Introduction to our Health Centre.
2. **About Us**: Learn more about our mission and values.
3. **Doctors and Staffs**: Meet our medical professionals.
4. **Doctor Schedule**: View the schedule of our doctors.
5. **Facilities Available**: Explore the amenities offered.
6. **Services Provided**: Details about the services we offer.
7. **Equipment**: Information about the medical equipment available.
8. **Gallery**: Visual representation of our Health Centre.
9. **Blog**: Utilizing WordPress with a free theme to share updates and insights.

Have a great time exploring the College Health Centre website locally! 🚀

Feel free to contribute by forking the repository and creating pull requests for any enhancements or bug fixes. 🛠️🚀

Enjoy browsing our College Health Centre's website! 🌐✨

## Get in Touch

For inquiries or collaborations, connect with me through 📬:

- Email: [vijaisuria87@gmail.com](mailto:vijaisuria87@gmail.com)
- LinkedIn: [vijaisuria](https://www.linkedin.com/in/vijaisuria/)
- Twitter: [vijaisuria](https://twitter.com/vijaisuria)
- GitHub: [Vijai Suria](https://github.com/vijaisuria)

<br>
<br>
<br>

---

## Installation Guide ⚙️

To locally run or contribute to this project:
Certainly! Here's a concise guideline for using the College Health Centre website via XAMPP:

### A) Installation with XAMPP 🛠️

To run the College Health Centre website on your local machine using XAMPP:

1. **Download and Install XAMPP**: Obtain XAMPP from [Apache Friends](https://www.apachefriends.org/index.html) and follow the installation instructions for your operating system.

2. **Start Apache and MySQL Services**: Open XAMPP Control Panel and start the Apache and MySQL services.

3. **Clone Repository**: Clone this repository into the `htdocs` folder of your XAMPP installation directory (e.g., `C:/xampp/htdocs/`).

4. **Import Database (if needed)**: If the you need `ticket-management system` use a database, import it into your local MySQL server using phpMyAdmin.

5. **Access the Website**: Open your web browser and type `http://localhost/mit-healthcenter-website` in the address bar. Replace `mit-healthcenter-website` with the folder name where the website is located.

6. **Explore the Website**: Navigate through the pages and functionalities of the College Health Centre website on your local server.


Sure, in a Linux environment, accessing a website through the Apache server is quite similar. Here are the steps:

### B) Installation with Apache Server (in Linux) 🐧🌐

1. **Install Apache**: Ensure Apache is installed on your Linux system. If not installed, use the package manager to install it. For example, on Ubuntu:

   ```bash
   sudo apt update
   sudo apt install apache2
   ```

2. **Start Apache Service**: Start the Apache service:

   ```bash
   sudo systemctl start apache2
   ```

3. **Clone Repository**: Clone the website repository to the appropriate directory. Typically, the web server root directory is `/var/www/html/`:

   ```bash
   sudo git clone https://github.com/vijaisuria/mit-healthcentre-website.git /var/www/html/college-health-centre
   ```

4. **Adjust Permissions (if necessary)**: Ensure that Apache has appropriate permissions to access the files:

   ```bash
   sudo chown -R www-data:www-data /var/www/html/college-health-centre
   ```

5. **Configure Virtual Host (optional)**: If you want to use a custom domain or configure a virtual host, you'll need to set up Apache accordingly.

6. **Access the Website**: Open a web browser and navigate to `http://localhost/college-health-centre` or `http://your-server-ip/college-health-centre` if accessing from another device in your network.

7. **Explore the Website**: Browse through the pages and functionalities of the College Health Centre website hosted on your Apache server in the Linux environment.

Remember, these steps might vary slightly based on your specific Linux distribution or Apache configuration. Always refer to your distribution's documentation or Apache's documentation for any variations.

Enjoy exploring the College Health Centre website on your Apache server in Linux! 🌟

---
