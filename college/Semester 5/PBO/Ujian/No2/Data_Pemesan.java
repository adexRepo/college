package No2;

import java.util.Scanner;

public class Data_Pemesan {
    private String nama;
    private String alamat;
    private String keterangan;
    private String email;
    private int no_hp;
    private int kode_jasa;
    private int kode_team;

    //getter Setter
    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public String getAlamat() {
        return alamat;
    }

    public void setAlamat(String alamat) {
        this.alamat = alamat;
    }

    public int getNo_hp() {
        return no_hp;
    }

    public void setNo_hp(int no_hp) {
        this.no_hp = no_hp;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public int getKode_jasa() {
        return kode_jasa;
    }

    public void setKode_jasa(int kode_jasa) {
        this.kode_jasa = kode_jasa;
    }

    public int getKode_team() {
        return kode_team;
    }

    public void setKode_team(int kode_team) {
        this.kode_team = kode_team;
    }

    public String getKeterangan() {
        return keterangan;
    }

    public void setKeterangan(String keterangan) {
        this.keterangan = keterangan;
    }

    void percabangan(){
        Scanner input2 = new Scanner(System.in);
        System.out.println("* Jenis Jasa *");
        System.out.println("1. Cuci Mobil");
        System.out.println("2. Salon Mobil Interior");
        System.out.println("3. Salon Mobil Eksterior");
        System.out.println("");
        System.out.print("Pilih Jasa : ");
        int pilihJasa = input2.nextInt();
        setKode_jasa(pilihJasa);
        if(pilihJasa > 3){preventSalahInput();};
        System.out.println("");
        System.out.println("* Team Penyedia Jasa *");
        System.out.println("1. Team Sea [2 Orang]");
        System.out.println("2. Team Mountain [3 Orang]");
        System.out.println("3. Team Forest [5 Orang]");
        System.out.println("");
        System.out.print("Pilih Team : ");
        int pilihTeam = input2.nextInt();
        setKode_team(pilihTeam);
        if(pilihTeam > 3){preventSalahInput();};
        System.out.println("");
        System.out.println("Berikan Keterangan Pemesan : ");
        String keterangan = input2.next();
        setKeterangan(keterangan);
        System.out.println("");
        System.out.print("Masukkan Biaya Peneyedia Jasa   : Rp. ");
        int biayaPenyedia = input2.nextInt();
        System.out.print("Masukkan Biaya Jasa Alat        : Rp. ");
        int biayaAlat = input2.nextInt();
        System.out.print("Masukkan Biaya Bahan Jasa       : Rp. ");
        int biayaBahan = input2.nextInt();
        System.out.print("Masukkan Biaya Transpotasi      : Rp. ");
        int biayaTranspotasi = input2.nextInt();
        Transaksi trx = new Transaksi(biayaPenyedia,biayaAlat,biayaBahan,biayaTranspotasi);
        String totalBiaya = trx.hitungTotalBiaya(this.kode_jasa,this.kode_team,this.keterangan);
        System.out.println("");
        System.out.println("Total Biaya yang di Bayar Pemesan Rp. " +totalBiaya);
        System.out.println("");
        System.out.println("Salam Bersih "+this.nama+", Terimakasih Telah Menggunakan Jasa Kami");
        input2.close();
    }

    static void preventSalahInput() {
        System.out.println("Pilihan tidak ada, Ulangi Lagi!");
        System.out.println("|");
        System.out.println("|");
        return;
    }
}
