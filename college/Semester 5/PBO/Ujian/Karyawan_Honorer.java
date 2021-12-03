// import java.text.NumberFormat;
// import java.util.Locale;
// import java.util.Scanner;

// public class Karyawan_Honorer extends Karyawan_Tetap {
//     super(nama,nik);

//     Karyawan_Tetap ovveriding = new Karyawan_Tetap();

//     public void tampilData(String nama, int nik) {
//         this.nama = nama;
//         this.nik = nik;
//         ovveriding.golongan();
//     }


//     private void calculateKaryawanHonorer(int pilih,int lama, String nama,int nik) {
//         int golA = 100000000;
//         int golB = 75000000;
//         int golC = 50000000;
//         int bunga = 0;
//         long totalPinjaman = 0;
//         switch (pilih) {
//             case 1  : 
//                 bunga = (int) (golA*0.025); 
//                 totalPinjaman = (long) (bunga * lama) + golA;
//                 System.out.println("Anda Memilih Golongan A");
//                 System.out.println("Dengan Pinjaman : Rp. " + golA);
//                 System.out.println("Dengan Bunga    : Rp. " + bunga);
//                 break;
//             case 2  : 
//                 bunga = (int) (golB*0.025);
//                 totalPinjaman = (long) (bunga * lama) + golB;
//                 System.out.println("Anda Memilih Golongan B");
//                 System.out.println("Dengan Pinjaman : Rp. " + golB);
//                 System.out.println("Dengan Bunga    : Rp. " + bunga);
//                 break;
//             case 3  : 
//                 bunga = (int) (golC*0.025);
//                 totalPinjaman = (long) (bunga * lama) + golC;
//                 System.out.println("Anda Memilih Golongan C");
//                 System.out.println("Dengan Pinjaman : Rp. " + golC);
//                 System.out.println("Dengan Bunga    : Rp. " + bunga);
//                 break;
//             default : 
//                 System.out.println("Pilihan Anda Salah");
//         }
        
//         int kewajibanBulanan = (int) (totalPinjaman / lama);
//         NumberFormat nf = NumberFormat.getInstance(new Locale("id", "ID"));
//         String totalPinjamanFix = nf.format(totalPinjaman);
//         String kewajibanBulananFix = nf.format(kewajibanBulanan);

//         System.out.println("------------------------------------------");
//         System.out.println("-------- Total Kewajiban Pinjaman ---------");
//         System.out.println("Nama Peminjam        : " + nama);
//         System.out.println("NIK Peminjam         : " + nik);
//         System.out.println("Kewajiban Bulanan    : Rp. " + kewajibanBulananFix);
//         System.out.println("");
//         System.out.println("Total Pinjaman       : Rp. " + totalPinjamanFix);
//         System.out.println("");
//         System.out.println("Terimakasih sudah meminjam di Koperasi PT. Sejahtera Abadi Jaya");
//         System.out.println("Kesejahteraan Karyawan dalam urusan Keuangan... Kami Solusinya (*_-)");
//         System.out.println("_____________________________________________________________________");
//     }
//     }
// }
