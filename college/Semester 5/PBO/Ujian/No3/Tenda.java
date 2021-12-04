package No3;

import java.text.NumberFormat;
import java.util.Locale;

public class Tenda extends Sewa_Tenda {
    @Override
    void cetakData() {
        // TODO Auto-generated method stub
        var jenisFix = "";
        var ukuranFix = "";
        var dekorFix = "";
        switch (this.jenis){
            case 1 -> jenisFix = "Tenda Terpal";
            case 2 -> jenisFix = "Tenda Umum";
            default -> jenisFix = "Tenda Pernikahan";
        }
        switch (this.ukuran){
            case 1 -> ukuranFix = "S";
            case 2 -> ukuranFix = "M";
            default -> ukuranFix = "L";
        }
        switch (this.dekor){
            case 1 -> dekorFix = "Bronze";
            case 2 -> dekorFix = "Silver";
            default -> dekorFix = "Gold";
        }

        System.out.println("=======================================");
        System.out.println("     *****    Data Pemesan   *****     ");
        System.out.println("Nama Pemesan       = " + this.nama);
        System.out.println("Tenda yang Dipesan = ");
        System.out.println("Jenis        : " + jenisFix);
        System.out.println("Ukuran       : " + ukuranFix);
        System.out.println("Dekor        : " + dekorFix);
        System.out.println("=======================================");
    }

    @Override
    void jenis() {
        // TODO Auto-generated method stub
        System.out.println("List Jenis Tenda");
        System.out.println("1. Tenda Terpal     ||   Rp. 1.200.000");
        System.out.println("2. Tenda Umum       ||   Rp. 2.000.000");
        System.out.println("3. Tenda Pernikahan ||   Rp. 3.500.000");
        System.out.println("-------------------o0o-------------------");
    }

    @Override
    void ukuran() {
        // TODO Auto-generated method stub
        System.out.println("List Ukuran Tenda");
        System.out.println("1. S                ||   Rp. 1.500.000");
        System.out.println("2. M                ||   Rp. 2.300.000");
        System.out.println("3. XL               ||   Rp. 3.800.000");
        System.out.println("-------------------o0o-------------------");
    }

    @Override
    void dekor() {
        // TODO Auto-generated method stub
        System.out.println("List Dekorasi Tenda");
        System.out.println("1. Bronze           ||   Rp. 2.000.000");
        System.out.println("2. Silver           ||   Rp. 3.000.000");
        System.out.println("3. Gold             ||   Rp. 4.000.000");
        System.out.println("-------------------o0o-------------------");
        System.out.println("");
    }

    @Override
    void cetakTotal() {
        // TODO Auto-generated method stub
        var valueJenis = 0;
        var valueUkuran = 0;
        var valueDekor = 0;

        switch (this.jenis) {
            case 1 -> valueJenis = (int) this.terpal;
            case 2 -> valueJenis = (int) this.umum;
            default -> valueJenis = (int) this.pernikahan;
        }

        switch (this.ukuran) {
            case 1 -> valueUkuran = (int) this.s;
            case 2 -> valueUkuran = (int) this.m;
            default -> valueUkuran = (int) this.xl;
        }

        switch (this.dekor) {
            case 1 -> valueDekor = (int) this.bronze;
            case 2 -> valueDekor = (int) this.silver;
            default -> valueDekor = (int) this.gold;
        }

        var totalBiaya = valueJenis + valueUkuran + valueDekor;
        NumberFormat nf = NumberFormat.getInstance(new Locale("id", "ID"));
        String totalBiayaFix = nf.format(totalBiaya);

        System.out.println("Total Biaya       = Rp. " + totalBiayaFix);
        System.out.println("=======================================");
    }
    
}
