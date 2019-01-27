package com.nikolaev.service;

import com.nikolaev.presentation.dto.DivisionDto;
import com.nikolaev.presentation.dto.EmployeeDto;

import java.util.List;

public interface DivisionService {
    List<DivisionDto> getAll();
    DivisionDto get(Integer id);
    List<EmployeeDto> getStaff(Integer id);
}
