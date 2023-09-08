# PAYROLL APP | Team Of Teams

---

# Table of Contents:

- [Windows Installation](#WINDOWS-INSTALLATION)
- [Ubuntu Installation](#UBUNTU-INSTALLATION-GUIDE)

# **WINDOWS INSTALLATION:**

To set up the project on Windows, follow these steps:

1. Open your command prompt or PowerShell.

2. Navigate to the project directory.

3. Run the following command to install all project dependencies using Composer:

    ```shell
    composer install
    ```

   This command will automatically download and install all the required dependencies for your project.

# **UBUNTU INSTALLATION GUIDE:**

## Installing Composer

1. First, install Composer by following the steps provided in this guide: [How to Install and Use Composer on Ubuntu 20.04](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-composer-on-ubuntu-20-04).

2. After successfully installing Composer, open your terminal.

3. Use the following command to install the required packages for your project. This command will also ignore the platform requirement for `ext-mysqli`, which can be useful in some cases:

    ```shell
    composer install --ignore-platform-req=ext-mysqli
    ```

4. If you encounter any issues related to missing PHP extensions, you can try installing them with the following commands:

    ```shell
    sudo apt-get install php-mysqlnd
    sudo apt install php-xml
    ```
---

&copy; 2023 Team Of Teams. All rights reserved.

**Contributors:**
- Jhonattan Aponte
- Brayan Peña
- Faihd Pineda
- Quiles Gonzalez