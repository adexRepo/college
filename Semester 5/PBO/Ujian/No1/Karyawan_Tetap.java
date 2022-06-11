package No1;
import java.text.NumberFormat;
import java.util.Locale;
import java.util.Scanner;

public class Karyawan_Tetap 
{
    protected String nama = "";
    protected int nik = 0 ;

    void setNama(String nama) {
        this.nama = nama;
    }

    void setNik(int nik) {
        this.nik = nik;
    }

    String getNama() {
        return nama;
    }

    int getNik() {
        return nik;
    }

    void show(String nama, int nik) {
        this.nama = nama;
        this.nik = nik;
        calc();
    }

    Object[] golongan()
    {
        Scanner input3 = new Scanner(System.in);
        System.out.println("==========================================");
        System.out.println("Pilih Golongan Pinjaman");
        System.out.println("==========================================");
        System.out.println("1. Golongan A");
        System.out.println("2. Golongan B");
        System.out.println("3. Golongan C");
        System.out.print("Masukkan Pilihan Golongan ==> ");
        int pilih = input3.nextInt();
        System.out.print("Berapa Lama Pinjaman (bulan) : ");
        int lama = input3.nextInt();
        System.out.println("");
        input3.close();
        return new Object[] {getNama(), getNik(),pilih,lama};
    }

    private void calc()
    {
        Object[] data = golongan();
        String nama = (String) data[0];
        int nik = (int) data[1];
        int pilih = (int) data[2];
        int lama = (int) data[3];
        int golA = 100000000;
        int golB = 75000000;
        int golC = 50000000;
        int bunga = 0;
        long totalPinjaman = 0;
        switch (pilih) {
            case 1  : 
                bunga = (int) (golA*0.025); 
                totalPinjaman = (long) (bunga * lama) + golA;
                System.out.println("Anda Memilih Golongan A");
                System.out.println("Dengan Pinjaman : Rp. " + golA);
                System.out.println("Dengan Bunga    : Rp. " + bunga);
                break;
            case 2  : 
                bunga = (int) (golB*0.025);
                totalPinjaman = (long) (bunga * lama) + golB;
                System.out.println("Anda Memilih Golongan B");
                System.out.println("Dengan Pinjaman : Rp. " + golB);
                System.out.println("Dengan Bunga    : Rp. " + bunga);
                break;
            case 3  : 
                bunga = (int) (golC*0.025);
                totalPinjaman = (long) (bunga * lama) + golC;
                System.out.println("Anda Memilih Golongan C");
                System.out.println("Dengan Pinjaman : Rp. " + golC);
                System.out.println("Dengan Bunga    : Rp. " + bunga);
                break;
            default : 
                System.out.println("Pilihan Anda Salah");
        }
        
        int kewajibanBulanan = (int) (totalPinjaman / lama);
        NumberFormat nf = NumberFormat.getInstance(new Locale("id", "ID"));
        String totalPinjamanFix = nf.format(totalPinjaman);
        String kewajibanBulananFix = nf.format(kewajibanBulanan);
        System.out.println("");

        System.out.println("------------------------------------------");
        System.out.println("-------- Total Kewajiban Pinjaman ---------");
        System.out.println("Nama Peminjam        : " + nama);
        System.out.println("NIK Peminjam         : " + nik);
        System.out.println("Kewajiban Bulanan    : Rp. " + kewajibanBulananFix);
        System.out.println("");
        System.out.println("Total Pinjaman       : Rp. " + totalPinjamanFix);
        System.out.println("");
        System.out.println("Terimakasih sudah meminjam di Koperasi PT. Sejahtera Abadi Jaya");
        System.out.println("Kesejahteraan Karyawan dalam urusan Keuangan... Kami Solusinya (*_-)");
        System.out.println("_____________________________________________________________________");
    }

}
