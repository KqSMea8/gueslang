package org.homemade.testproject.model.dto;

import java.math.BigDecimal;

import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;

/**
 * @author Dmytro Legeza
 */
@AllArgsConstructor
@NoArgsConstructor
@Data
public class Attr {

	private Long id;

	private String name;

	private BigDecimal defaultValue;

	private Boolean mutable;

	private Long elementId;

}
