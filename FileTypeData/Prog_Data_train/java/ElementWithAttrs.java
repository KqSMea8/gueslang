package org.homemade.testproject.model.dto;

import java.util.Set;

import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

/**
 * @author Dmytro Legeza
 */
@AllArgsConstructor
@NoArgsConstructor
@Data
public class ElementWithAttrs {

	private String name;

	private String description;

	private Set<Attr> attrs;

}
