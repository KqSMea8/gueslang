package config.view;

import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.PrintWriter;
import java.util.Map;

/**
 * Created by belenov on 3/5/17.
 */

// A view
public class ErrorPlainTextView extends PlainTextView {

    @Override
    protected void renderMergedOutputModel(Map<String, Object> map, HttpServletRequest request,
                                           HttpServletResponse response) throws Exception {
        PrintWriter writer = response.getWriter();
        writer.println("Hello from ErrorPlainTextView");
        response.sendError(500);
    }
}
