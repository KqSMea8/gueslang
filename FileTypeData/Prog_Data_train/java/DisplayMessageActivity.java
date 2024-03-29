package com.myfirst.androidapp;

import android.app.Activity;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.TextView;

public class DisplayMessageActivity extends Activity {
    public final static String testString = "com.myfirst.androidapp.TEST_STRING";
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        Intent intent = getIntent();
        String message = intent.getStringExtra(MainActivity.EXTRA_MESSAGE);
        TextView textView = new TextView(this);
        textView.setText(message);
        setContentView(textView);
    }
    
    public void testFunction(View view){
    	Intent intent = new Intent(this, MainActivity.class);
    	TextView textView = new TextView(this);
    	String value = (String) textView.getText();
    	intent.putExtra(testString , value);
    	finish();
    }
}
