package pl.dmichalski.c10.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import pl.dmichalski.c10.entity.Owner;

/**
 * Author: Daniel
 */
public interface OwnerRepository extends JpaRepository<Owner, Long>{
}
