package com.example.veglegesgyakorlo;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    EditText name;
    Button rendelesbtn;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        name = findViewById(R.id.name);
        rendelesbtn = findViewById(R.id.rendelesbtn);

        rendelesbtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                String username = name.getText().toString().trim();
                if(name.getText().toString().trim().isEmpty()){
                    Toast.makeText(MainActivity.this,"ird be a neved", Toast.LENGTH_SHORT).show();
                }
                else {
                    Intent intent = new Intent(MainActivity.this,Listatorles.class);
                    startActivity(intent);
                }
            }
        });
    }
}