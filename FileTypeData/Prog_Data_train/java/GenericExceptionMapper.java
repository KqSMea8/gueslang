package org.deeplearning4j.ui.exception;


import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;
import javax.ws.rs.ext.ExceptionMapper;
import javax.ws.rs.ext.Provider;

import org.apache.commons.lang.exception.ExceptionUtils;


@Provider
public class GenericExceptionMapper implements ExceptionMapper<Throwable> {

    @Override
    public Response toResponse(Throwable ex) {
        return Response.status(500)
                .entity("Error occurred\n\n" + ex.getMessage() + "\n" +
                        (ex != null ? ExceptionUtils.getStackTrace(ex) : ""))
                .type(MediaType.APPLICATION_JSON)
                .build();
    }

}