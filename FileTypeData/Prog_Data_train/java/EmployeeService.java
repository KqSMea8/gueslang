package com.nikolaev.service;

import com.nikolaev.presentation.dto.EmployeeDto;

public interface EmployeeService {
    void delete(Integer id);
    void save(EmployeeDto employeeDto);
}
