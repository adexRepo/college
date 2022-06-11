package No3;

import java.util.Scanner;

public class Customer {
    public static void main(String[] args) {
        Tenda tenda = new Tenda();
        Scanner input = new Scanner(System.in);
        System.out.println("===========================================");
        System.out.println("       ---- Tenda Adem Organizer ----      ");
        System.out.println("===========================================");
        System.out.println("");
        System.out.println("   ** Data Penyewa **");
        System.out.println("Masukkan Nama Penyewa        : ");
        tenda.setNama(input.nextLine());
        System.out.println("Masukkan No.Telp Penyewa     : ");
        tenda.setNo_tlp(input.nextLine());
        System.out.println("");
        tenda.jenis();
        tenda.ukuran();
        tenda.dekor();
        System.out.println("");
        System.out.print("Jenis Tenda Pilihan Anda    = ");
        tenda.setJenis(input.nextInt());
        System.out.print("Ukuran Tenda Pilihan Anda   = ");
        tenda.setUkuran(input.nextInt());
        System.out.print("Dekor Tenda Pilihan Anda    = ");
        tenda.setDekor(input.nextInt());
        System.out.println("");
        tenda.cetakData();
        tenda.cetakTotal();
        input.close();
    }
}
