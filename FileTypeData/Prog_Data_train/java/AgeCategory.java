package com.michalwiacek.tournamentmanager.entities.ageCategory;

import com.michalwiacek.tournamentmanager.entities.sport.Sport;
import lombok.Data;

import javax.persistence.*;

@Entity
@Data
public class AgeCategory {

    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private Long id;

    @ManyToOne(fetch = FetchType.LAZY)
    @JoinColumn(name = "sport_id")
    private Sport sport;
    private String name;
    private Integer minAge, maxAge;
}
