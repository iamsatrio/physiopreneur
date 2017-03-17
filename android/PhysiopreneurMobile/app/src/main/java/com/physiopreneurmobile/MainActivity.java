package com.physiopreneurmobile;

import android.content.Intent;
import android.graphics.Typeface;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {
    EditText pswd,usrusr;
    Button lin;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);


        lin = (Button) findViewById(R.id.lin);
        usrusr = (EditText) findViewById(R.id.usrusr);
        pswd = (EditText) findViewById(R.id.pswrdd);

        Typeface custom_font = Typeface.createFromAsset(getAssets(), "fonts/LatoLight.ttf");
        Typeface custom_font1 = Typeface.createFromAsset(getAssets(), "fonts/LatoRegular.ttf");
        lin.setTypeface(custom_font1);
        usrusr.setTypeface(custom_font);
        pswd.setTypeface(custom_font);

        lin.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                if(usrusr.getText().toString().equals("")||pswd.getText().toString().equals("")){
                    Toast.makeText(getApplicationContext(), "mohon isi dengan benar", Toast.LENGTH_SHORT).show();
                }else {
                    if (usrusr.getText().toString().equals("manager") && pswd.getText().toString().equals("manager")) {
                        Intent it = new Intent(MainActivity.this, ManagerHome.class);
                        startActivity(it);
//                    Toast.makeText(getApplicationContext(), pswd.getText().toString(),
//                            Toast.LENGTH_LONG).show();
                    } else if(usrusr.getText().toString().equals("emp")||pswd.getText().toString().equals("emp")){
                        Intent it = new Intent(MainActivity.this, PhysiotherapistHome.class);
                        startActivity(it);
                    }
                }
            }
        });
    }
}
