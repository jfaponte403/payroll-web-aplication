<?php

    function redirection($page) {
        $URL_FORM_EMPLOYEE = "./pages/form_employee.php";
        $URL_CONSULT_EMPLOYEE = "./pages/consult_employee.php";

        switch ($page) {
          case 'form_employee':
            $pagePath = $URL_FORM_EMPLOYEE;
            break;
          case 'consult_employee':
            $pagePath = $URL_CONSULT_EMPLOYEE;
            break;
          default: 
            $pagePath = false;
            break;
        }

        return $pagePath;
    }