-- DROP DATABASE payroll;

CREATE
DATABASE IF NOT EXISTS payroll;

USE
payroll;

-- All roles in the company
CREATE TABLE IF NOT EXISTS role
(
    id
    INT
    NOT
    NULL
    AUTO_INCREMENT
    PRIMARY
    KEY,
    name
    VARCHAR
(
    50
) NOT NULL
    );

-- All cost center in the company
CREATE TABLE IF NOT EXISTS cost_center
(
    id
    INT
    NOT
    NULL
    AUTO_INCREMENT
    PRIMARY
    KEY,
    name
    VARCHAR
(
    50
) NOT NULL
    );

-- All data about the employees
CREATE TABLE IF NOT EXISTS employee
(
    identification VARCHAR
(
    12
) NOT NULL,
    first_name VARCHAR
(
    30
) NOT NULL,
    last_name VARCHAR
(
    30
) NOT NULL,
    cost_center_id INT NOT NULL,
    role_id INT NOT NULL,
    PRIMARY KEY
(
    identification
),
    FOREIGN KEY
(
    cost_center_id
) REFERENCES cost_center
(
    id
),
    FOREIGN KEY
(
    role_id
) REFERENCES role
(
    id
)
    );

-- All data about the pays that the company should pay to the employee.
CREATE TABLE IF NOT EXISTS accrued
(
    id
    INT
    NOT
    NULL
    AUTO_INCREMENT
    PRIMARY
    KEY,
    employee_id
    VARCHAR
(
    12
) NOT NULL,
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
    FOREIGN KEY
(
    employee_id
) REFERENCES employee
(
    identification
)
    );

-- All data about the pays to be paid by the employee.
CREATE TABLE IF NOT EXISTS deduction
(
    employee_id VARCHAR
(
    12
) NOT NULL,
    health INT NOT NULL,
    pension INT NOT NULL,
    pension_solidary INT NULL,
    PRIMARY KEY
(
    employee_id
),
    FOREIGN KEY
(
    employee_id
) REFERENCES employee
(
    identification
)
    );

-- All data about the employee loans with the company.
CREATE TABLE IF NOT EXISTS loan
(
    id
    INT
    NOT
    NULL
    AUTO_INCREMENT
    PRIMARY
    KEY,
    employee_id
    VARCHAR
(
    12
) NOT NULL,
    date DATE NOT NULL,
    value INT NOT NULL,
    quotes TINYINT NOT NULL,
    quote_value INT NOT NULL,
    FOREIGN KEY
(
    employee_id
) REFERENCES employee
(
    identification
)
    );

-- All data about the quotes paids
CREATE TABLE IF NOT EXISTS pay
(
    loan_id
    INT
    NOT
    NULL,
    num_quota
    INT
    NOT
    NULL,
    date
    DATE
    NOT
    NULL,
    PRIMARY
    KEY
(
    loan_id,
    num_quota
),
    FOREIGN KEY
(
    loan_id
) REFERENCES loan
(
    id
)
    )
    INSERT INTO role
(
    name
) VALUES
(
    'Administrador del Sistema'
),
(
    'Gerente de Proyecto'
),
(
    'Desarrollador de Software'
),
(
    'Diseñador Gráfico'
),
(
    'Analista de Datos'
),
(
    'Especialista en Marketing'
);

INSERT INTO cost_center (name)
VALUES ('Departamento de Ventas'),
       ('Departamento de Desarrollo'),
       ('Departamento de Marketing'),
       ('Departamento de Recursos Humanos'),
       ('Departamento de Finanzas'),
       ('Departamento de Soporte Técnico');

INSERT INTO employee (identification, first_name, last_name, cost_center_id, role_id)
VALUES ('1234567890', 'Juan', 'Pérez', 1, 3),
       ('9876543210', 'María', 'González', 2, 4),
       ('5678901234', 'Pedro', 'Sánchez', 3, 2),
       ('3456789012', 'Ana', 'López', 1, 5),
       ('6789012345', 'Luis', 'Martínez', 2, 6);

INSERT INTO accrued (employee_id, salary, worked_days, salary_worked, vacations_taken, transport_allowance,
                     incapacity_eps, incapacity_arl, night_surcharge, sunday_hours, alimentary_allowance)
VALUES ('1234567890', 3000, 20, 2400, 5, 100, NULL, NULL, 50, NULL, 150),
       ('9876543210', 3500, 22, 3080, 8, NULL, 200, NULL, 70, 10, 200),
       ('5678901234', 4000, 20, 3200, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
       ('3456789012', 3200, 18, 2880, 4, 80, NULL, NULL, 40, 5, NULL),
       ('6789012345', 3800, 21, 3610, 6, 120, NULL, NULL, 60, NULL, 180);

INSERT INTO deduction (employee_id, health, pension, pension_solidary)
VALUES ('1234567890', 100, 150, NULL),
       ('9876543210', 120, 180, 20),
       ('5678901234', 90, 140, NULL),
       ('3456789012', 110, 160, 15),
       ('6789012345', 105, 155, NULL);

INSERT INTO loan (employee_id, date, value, quotes, quote_value)
VALUES ('1234567890', '2023-01-15', 5000, 12, 450),
       ('9876543210', '2023-02-10', 3000, 6, 550),
       ('5678901234', '2023-03-05', 6000, 24, 250),
       ('3456789012', '2023-04-20', 4000, 8, 500),
       ('6789012345', '2023-05-12', 7500, 18, 420);

INSERT INTO pay (loan_id, num_quota, date)
VALUES (1, 1, '2023-02-15'),
       (1, 2, '2023-03-15'),
       (1, 3, '2023-04-15'),
       (2, 1, '2023-03-10'),
       (2, 2, '2023-04-10'),
       (3, 1, '2023-04-05'),
       (3, 2, '2023-05-05'),
       (3, 3, '2023-06-05'),
       (4, 1, '2023-05-20'),
       (4, 2, '2023-06-20'),
       (5, 1, '2023-06-12'),
       (5, 2, '2023-07-12'),
       (5, 3, '2023-08-12');