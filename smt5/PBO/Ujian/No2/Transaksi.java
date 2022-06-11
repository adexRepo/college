package No2;

import java.text.NumberFormat;
import java.util.Locale;

public class Transaksi {
    private int biaya_Jasa;
    private int biaya_Alat;
    private int biaya_Bahan;
    private int biaya_Transpotasi;

    Transaksi(int biaya_Jasa, int biaya_Alat, int biaya_Bahan, int biaya_Transpotasi) {
        this.biaya_Jasa = biaya_Jasa;
        this.biaya_Alat = biaya_Alat;
        this.biaya_Bahan = biaya_Bahan;
        this.biaya_Transpotasi = biaya_Transpotasi;
    }

    String hitungTotalBiaya(int jasaS,int teamS,String Ket){
        System.out.println("---------------------o0o---------------------");
        System.out.println("=============================================");
        int totalBiaya = biaya_Jasa + biaya_Alat + biaya_Bahan + biaya_Transpotasi;
        var jenisJasa = jasaS;
        var jenisTeam = teamS;
        var keterangan = Ket;
        String jasa = "";
        String team = "";
        switch (jenisJasa){
            case 1 -> jasa = "Cuci Mobil";
            case 2 -> jasa = "Salon Mobil Interior";
            case 3 -> jasa = "Salon Mobil Eksterior";
            default -> jasa = "Kode salah nih";
        }
        switch (jenisTeam){
            case 1 -> team = "Team Sea";
            case 2 -> team = "Team Mountain";
            case 3 -> team = "Team Forest";
            default -> team = "Kode salah nih";
        }

        NumberFormat nf = NumberFormat.getInstance(new Locale("id", "ID"));
        String totalBiayaFix = nf.format(totalBiaya);

        System.out.println("Jasa yang di Pesan  :       " + jasa);
        System.out.println("Nama Penyedia Jasa  :       " + team);
        System.out.println("Keterangan          :       " + keterangan);
        return totalBiayaFix;
    };
}
