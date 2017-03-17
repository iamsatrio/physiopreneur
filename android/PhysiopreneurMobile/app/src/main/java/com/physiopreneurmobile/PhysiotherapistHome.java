package com.physiopreneurmobile;

import android.content.Intent;
import android.provider.ContactsContract;
import android.renderscript.Allocation;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;

public class PhysiotherapistHome extends AppCompatActivity {
    ImageView cariPasien, dataPasien, tambahPasien, pembayaran, buatLaporan, profileEmp;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_physiotherapist_home);

        cariPasien = (ImageView) findViewById(R.id.cari_pasien);
        tambahPasien = (ImageView) findViewById(R.id.tambah_pasien);
        dataPasien = (ImageView) findViewById(R.id.data_pasien);
        pembayaran = (ImageView) findViewById(R.id.pembayaran);
        buatLaporan = (ImageView) findViewById(R.id.buat_laporan);
        profileEmp = (ImageView) findViewById(R.id.profile_emp);


        cariPasien.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent(PhysiotherapistHome.this, CariPasien.class);
                startActivity(i);
            }
        });

        tambahPasien.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent(PhysiotherapistHome.this, TambahPasien.class);
                startActivity(i);
            }
        });

        dataPasien.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent(PhysiotherapistHome.this, DataPasien.class);
                startActivity(i);
            }
        });

        pembayaran.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent i = new Intent(PhysiotherapistHome.this, Pembayaran.class);
                startActivity(i);
            }
        });



    }
}
