package cloakedsec.in.librarymanagement.repositories;

import cloakedsec.in.librarymanagement.entity.Author;
import org.springframework.data.jpa.repository.JpaRepository;

public interface AuthorRepository extends JpaRepository<Author, Long> {

}
