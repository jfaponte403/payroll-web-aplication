-- DROP DATABASE payroll;

CREATE DATABASE IF NOT EXISTS payroll;

USE payroll;

-- All roles in the company
CREATE TABLE IF NOT EXISTS role (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL
);

-- All cost center in the company
CREATE TABLE IF NOT EXISTS cost_center (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL
);

-- All data about the employees
CREATE TABLE IF NOT EXISTS employee (
  identification VARCHAR(12) NOT NULL,
  first_name VARCHAR(30) NOT NULL,
  last_name VARCHAR(30) NOT NULL,
  cost_center_id INT NOT NULL,
  role_id INT NOT NULL,
  PRIMARY KEY (identification),
  FOREIGN KEY (cost_center_id) REFERENCES cost_center(id),
  FOREIGN KEY (role_id) REFERENCES role(id)
);

-- All data about the pays that the company should pay to the employee.
CREATE TABLE IF NOT EXISTS accrued (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  employee_id VARCHAR(12) NOT NULL,
  salary INT NOT NULL,
  worked_days INT NOT NULL,
  salary_worked INT NOT NULL,
  vacations_taken INT NULL,
  transport_allowance INT NULL,
  incapacity_eps INT NULL,
  incapacity_arl INT NULL,
  night_surcharge INT NULL,
  sunday_hours INT NULL,
  alimentary_allowance INT NULL,
  FOREIGN KEY (employee_id) REFERENCES employee(identification)
);

-- All data about the pays to be paid by the employee.
CREATE TABLE IF NOT EXISTS deduction (
  employee_id VARCHAR(12) NOT NULL,
  health INT NOT NULL,
  pension INT NOT NULL,
  pension_solidary INT NULL,
  PRIMARY KEY (employee_id),
  FOREIGN KEY (employee_id) REFERENCES employee(identification)
);

-- All data about the employee loans with the company.
CREATE TABLE IF NOT EXISTS loan (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  employee_id VARCHAR(12) NOT NULL,
  date DATE NOT NULL,
  value INT NOT NULL,
  quotes TINYINT NOT NULL,
  quote_value INT NOT NULL,
  FOREIGN KEY (employee_id) REFERENCES employee(identification)
);

-- All data about the quotes paids
CREATE TABLE IF NOT EXISTS pay (
  loan_id INT NOT NULL,
  num_quota INT NOT NULL,
  date DATE NOT NULL,
  PRIMARY KEY (loan_id, num_quota),
  FOREIGN KEY (loan_id) REFERENCES loan(id)
)