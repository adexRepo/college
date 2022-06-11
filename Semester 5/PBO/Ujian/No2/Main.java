package No2;

import java.util.Scanner;

public class Main {
    
    /**
     * Author   : Adek Kristiyanto
     * Npm      : 201943501163
     * Date     : 03/12/2021
     * Class    : X5E
     * Deskripsi: Program Koperasi PT. Sejahtera Abadi Jaya
     */

    
    public static void main(String[] args) {
        Scanner input1 = new Scanner(System.in);
        Data_Pemesan dataPemesanan = new Data_Pemesan();
        System.out.println("--- Car Cleaning.. Anda Pesan Kami Datang ---");
        System.out.println("=============================================");
        System.out.println("");
        System.out.println("---------------------o0o---------------------");
        System.out.println("*Masukkan Data Pemesan*");
        System.out.print("Masukkan Nama     : ");
        String nama = input1.nextLine();
        dataPemesanan.setNama(nama);
        System.out.print("Masukkan Alamat   : ");
        String alamat = input1.nextLine();
        dataPemesanan.setAlamat(alamat);
        System.out.print("Masukkan No.Telp  : ");
        int noTelp = input1.nextInt();
        dataPemesanan.setNo_hp(noTelp);
        System.out.print("Masukkan Email    : ");
        String email = input1.next();
        dataPemesanan.setEmail(email);
        System.out.println("");
        dataPemesanan.percabangan();
        input1.close();
    }
}
