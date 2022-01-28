package com.example.veglegesgyakorlo;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.ListView;

public class ListViewActivity extends AppCompatActivity {


    String[] nameArray = {"Octopus","Pig","Sheep","Rabbit",
            "Snake","Spider","Spider","Spider","Spider" };

    String[] infoArray = {
            "8 tentacled monster",
            "Delicious in rolls",
            "Great for jumpers",
            "Nice in a stew",
            "Great for shoes",
            "Scary",
            "Scary",
            "Scary",
            "Scary"
    };

    ListView listView;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_list_view);

        ListAdapter whatever = new ListAdapter(this, nameArray, infoArray);
        listView = findViewById(R.id.listview);
        listView.setAdapter(whatever);

        /*listView.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position,
                                    long id) {
                Toast.makeText(getApplicationContext(), "asdsd", Toast.LENGTH_SHORT).show();

                Intent intent = new Intent(MainActivity.this, DetailActivity.class);
                String message = nameArray[position];
                intent.putExtra("animal", message);

                startActivity(intent);
            }
        });*/
    }
}