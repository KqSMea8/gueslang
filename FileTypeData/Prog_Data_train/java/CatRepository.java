package pl.dmichalski.c10.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import pl.dmichalski.c10.entity.Cat;

/**
 * Author: Daniel
 */
public interface CatRepository extends JpaRepository<Cat, Long>{
}
