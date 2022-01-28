package com.example.veglegesgyakorlo;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.content.SharedPreferences;
import android.graphics.Bitmap;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.ImageView;
import android.widget.TextView;

public class PizzaDetails extends AppCompatActivity {

    Pizzaclass pizza;
    TextView rendnev;
    ImageView rendimg;
    Button btnkuld;
    CheckBox extra;
    CheckBox elvitel;
    SharedPreferences sharedPreferences;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_pizza_details);
        btnkuld = findViewById(R.id.btnkuld);
        rendnev = findViewById(R.id.pizzanev);
        rendimg = findViewById(R.id.pizzakep);
        extra = findViewById(R.id.extra);
        elvitel = findViewById(R.id.elvitel);

        Bitmap bmp = getIntent().getExtras().getParcelable("IMG");
        String nev = getIntent().getExtras().getString("NAME", "");
        rendnev.setText(nev);
        rendimg.setImageBitmap(bmp);

        sharedPreferences = getSharedPreferences("SHARED_PREF",MODE_PRIVATE);

        btnkuld.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int osszeg = 25;//alapar

                if(extra.isChecked()){
                    osszeg +=10;
                }
                else if (elvitel.isChecked()){
                    osszeg +=5;
                }
                SharedPreferences.Editor editor = sharedPreferences.edit();
                editor.putString("NAME", nev);
                editor.putInt("PASS", osszeg);
                editor.apply();
                MyDatabaseHelper myDB = new MyDatabaseHelper(PizzaDetails.this);
                myDB.addPizza(nev, osszeg);

                Intent intent = new Intent(PizzaDetails.this, ListViewActivity.class);

                startActivity(intent);






            }
        });
    }
}