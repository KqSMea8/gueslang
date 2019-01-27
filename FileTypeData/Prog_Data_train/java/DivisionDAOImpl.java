package com.nikolaev.data_access.dao.impl;

import com.nikolaev.data_access.dao.AbstractDao;
import com.nikolaev.data_access.dao.DivisionDAO;
import com.nikolaev.data_access.entity.Division;
import org.springframework.stereotype.Repository;

import java.util.List;

@Repository
public class DivisionDAOImpl extends AbstractDao<Integer, Division> implements DivisionDAO {

    public void save(Division division) {
        super.persist(division);
    }

    public void delete(Division division) {
        super.delete(division);
    }

    public Division get(Integer key) {
        final Division entity = super.getByKey(key);
        return entity;
    }

    public List<Division> getAll() {
        final List<Division> divisionList = super.getAll();
        return divisionList;
    }

    public void update(Division division) {
        super.update(division);
    }
}
