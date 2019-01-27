package guice.xml.config;
/**
 * <p><b>Description:</b><br>
 * This exception is thrown when the Configuration cannot be read from the external store.
 * <p><b>Usage and remarks:</b><br>
 * RuntimeException which indicates total failure.
 * <b>Created:</b> 3 Oct 2007 18:33:38<br>
 * <b>@author:</b> MPETZSCH<br>
 * <b>@since:</b> JDK 1.5<br>
 */
@SuppressWarnings("serial")
public class GuiceExternalConfigReadException extends RuntimeException {
	public GuiceExternalConfigReadException(Throwable cause) {
		super(cause);
	}
}
