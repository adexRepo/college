import java.util.Scanner;

public class Pinjam_Uang {
    
    /**
     * Author   : Adek Kristiyanto
     * Npm      : 201943501163
     * Date     : 03/12/2021
     * Class    : X5E
     * Deskripsi: Program Koperasi PT. Sejahtera Abadi Jaya
     */

    public static void main(String[] args) {
        var input = new Scanner(System.in);
        System.out.println("=========================================");
        System.out.println("--- Koperasi PT. Sejahtera Abadi Jaya ---");
        System.out.println("=========================================");
        System.out.println("");
        System.out.println("Pilih Status Karyawan :");
        System.out.println("1. Karyawan Tetap");
        System.out.println("2. Karyawan Honorer");
        System.out.println("");
        System.out.print("Masukkan Pilihan Status : ");
        int pilihan = input.nextInt();
        System.out.println("-------------------<*>-------------------");
        aksesClass(pilihan);
        input.close();
    }

    static void aksesClass(int pilihan) {
        Karyawan_Tetap tetap = new Karyawan_Tetap();
        if(pilihan > 2 || pilihan < 1){Pinjam_Uang.main(null); return;}
        var input2 = new Scanner(System.in);
        System.out.println("");
        System.out.println("Silahkan Masukkan Data Anda :");
        System.out.println("-------------------<*>-------------------");
        System.out.println("Masukkan Nama Peminjam : ");
        String nama = input2.next();
        System.out.println("Masukkan NIK Peminjam : ");
        int nik = Integer.parseInt(input2.next());
        System.out.println("");
        tetap.tampilData(nama,nik);
        input2.close();
    }
}