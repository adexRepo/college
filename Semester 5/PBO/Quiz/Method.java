package Quiz;

import java.util.Scanner;

public class Method extends Attribute {
    public Method(Object[][] arrKaryawan) {
        super(arrKaryawan);
    }
    Attribute attr = new Attribute(arrKaryawan);
    //Default Gaji Pokok
    public static int golA = 3000000;
    public static int golB = 2000000;
    public static int golC = 1000000;

    public Object[][] lihat(Object[][] arrKaryawan)
    {
        System.out.println(" ");
        System.out.println("====================================================================");
        System.out.println("\t\t\tList Karyawan PT. TongSeng Sejahtera");
        System.out.println("====================================================================");
        System.out.println("No. Karyawan\tNama Karyawan\t\tGolongan\tGaji Total");
        System.out.println("====================================================================");
        for(int i = 0; i < arrKaryawan.length; i++)
        {
            if(arrKaryawan[i].length == 0)
            {
                if(arrKaryawan.length == 2){
                    continue;
                }else{
                    System.out.println("Data Kosong");
                }
            }else{
                System.out.println("\t" +arrKaryawan[i][0] + "\t\t" + arrKaryawan[i][1] + "\t\t" + arrKaryawan[i][2] + "\t\t" + arrKaryawan[i][3]);
            }
        }
        System.out.println("====================================================================");
        menu(arrKaryawan,"procced");
        return arrKaryawan;
    }


    public Object[][] tambah(Object[][] arrKaryawan)
    {
        System.out.println(" ");
        Object[] data = new Object[4];
        Scanner input = new Scanner(System.in);
        System.out.println("=================================");
        System.out.println("\tInput Karyawan Baru");
        System.out.println("=================================");
        //No Karyawan
        for(int i = 0; i < arrKaryawan.length; i++)
        {
            var a  = i;
            if(arrKaryawan[i].length == 0)
            {
                data[0] = a + 1;
            }else{
                if(arrKaryawan[i][0] == "1")
                {
                    data[0] = a + 2;
                }
                else{
                    data[0] = a + 1;
                }
            }
        }
        //Nama Karyawan
        System.out.print("Masukkan Nama Karyawan  : ");
        data[1] = input.nextLine();
        //Golongan
        System.out.println("Kode 1 -> Golongan A");
        System.out.println("Kode 2 -> Golongan B");
        System.out.println("Kode 3 -> Golongan C");
        System.out.print("Masukkan Kode : ");
        int golongan = input.nextInt();
        data[2] = golongan;
        //Gaji
            if (golongan == 1) {
                data[3] = golA + 500000;
            } else if (golongan == 2) {
                data[3] = golB + 250000;
            } else if (golongan == 3) {
                data[3] = golC + 100000;
            }else{
                System.out.println("Golongan tidak ditemukan, ulangi lagi");
                tambah(arrKaryawan);
            }
        attr.setArrKaryawan(data);
        menu(attr.getArrKaryawan(),"procced");
        input.close();
        return attr.getArrKaryawan();
    }

    public Object[][] perbarui(Object[][] arrKaryawan)
    {
        System.out.println(" ");
        Scanner input = new Scanner(System.in);
        Scanner input2 = new Scanner(System.in); //prevent habbit java scanner
        System.out.println("=================================");
        System.out.println("\tPerbarui Data Karyawan");
        System.out.println("=================================");
        System.out.println("Kode 1 -> Perbarui Nama");
        System.out.println("Kode 2 -> Perbarui Golongan");
        System.out.print("Masukkan Kode : ");
        int kode = input.nextInt();
        System.out.print("Masukkan No Karyawan yang ingin diupdate : ");
        int noKaryawan = input.nextInt();
            if(kode == 1){
                System.out.print("Masukkan Nama Baru : ");
                String namaBaru = input2.nextLine();
                for(int i = 1; i < arrKaryawan.length; i++)
                {
                    if(arrKaryawan[i][0].equals(noKaryawan))
                    {
                        arrKaryawan[i][1] = null; // prevent value " "
                        arrKaryawan[i][1] = namaBaru;
                    }
                }
            }else if(kode == 2){
                System.out.print("Masukkan Golongan Baru : ");
                int golonganBaru = input.nextInt();
                for(int i = 1; i < arrKaryawan.length; i++)
                {
                    if(arrKaryawan[i][0].equals(noKaryawan))
                    {
                        arrKaryawan[i][2] = null;
                        arrKaryawan[i][2] = golonganBaru;
                    }
                }
            }else{
                System.out.println("Kode tidak ditemukan, ulangi lagi");
                perbarui(arrKaryawan);
            }
            attr.setArrKaryawan(arrKaryawan);
            Menu.Run(arrKaryawan,"procced");
            input.close();
            input2.close();
        return arrKaryawan;
    }

    public Object[][] delete(Object[][] arrKaryawan) {
        System.out.println(" ");
        Scanner input = new Scanner(System.in);
        System.out.println("=================================");
        System.out.println("\tDelete Data Karyawan");
        System.out.println("=================================");
            System.out.print("Masukkan No Karyawan yang ingin dihapus : ");
            int noKaryawan = input.nextInt();
            Object[][] arrKaryawan2 = new Object[arrKaryawan.length - 1][4];
            for (int i = 1; i < arrKaryawan.length; i++) {
                if (arrKaryawan[i][0].equals(noKaryawan)) {
                    System.out.println("Data Karyawan dengan No Karyawan " + noKaryawan + " telah dihapus");
                    for (int j = 0; j < arrKaryawan.length; j++) {
                        if (j < i) {
                            arrKaryawan2[j] = arrKaryawan[j];
                        } else if (j > i) {
                            arrKaryawan2[j - 1] = arrKaryawan[j];
                        }
                    }
                } else {
                    arrKaryawan2[i - 1] = arrKaryawan[i];
                }
            }
            System.out.println("Data Berhasil dihapus");
        attr.setArrKaryawan(arrKaryawan2);
        Menu.Run(arrKaryawan2,"procced");
        input.close();
        return arrKaryawan2;
    }

    public Object[][] menu(Object[][] objects,String flag) {
        Scanner input5 = new Scanner(System.in);
        System.out.println("__________________________________");
        System.out.println("Kode 1 -> Tambah Karyawan Baru");
        System.out.println("Kode 2 -> Delete Data Karyawan");
        System.out.println("Kode 3 -> Update Data Karyawan");
        System.out.println("Kode 4 -> kembali ke Menu Utama");
        System.out.println("Kode 5 -> Exit Program");
        System.out.print("Masukkan Kode : ");
        int back = input5.nextInt();
        switch (back){
            case 1  -> tambah(objects);
            case 2  -> delete(objects);
            case 3  -> perbarui(objects);
            case 4  -> Menu.Run(objects,"procced");
            case 5  -> System.exit(0);
            default -> reChoice(objects, "procced");
        }
        input5.close();
        return objects;
    }

    public Object[][] reChoice(Object[][] objects,String flag) {
        System.out.println("Maaf.. Kode yang anda masukkan salah.. pilih lagi..");
        menu(objects, "procced");
        return objects;
    }

    public String getData(){
        System.out.println(" ");
        System.out.println("=================================");
        System.out.println("No. Karyawan : " + attr.getNoKaryawan());
        System.out.println("Nama Karyawan : " + attr.getNama());
        System.out.println("Golongan : " + attr.getGolongan());
        System.out.println("Gaji : " + attr.getGaji());
        //Main.Run(null, "start");
        return "";
    }

    public Object setData() {
        System.out.println(" ");
        System.out.println("=================================");
        Scanner input5 = new Scanner(System.in);
        Scanner input6 = new Scanner(System.in);//prevent habbit java scanner
        System.out.print("Masukkan No Karyawan : ");
        attr.setNoKaryawan(input5.nextInt());
        System.out.print("Masukkan Nama Karyawan : ");
        var nama = input6.nextLine();
        attr.setNama(nama);
        System.out.print("Masukkan Golongan : ");
        int kode = input5.nextInt();
        attr.setGolongan(kode);
        var gaji = 0;
            if (kode == 1) {
                gaji = golA + 500000;
            } else if (kode == 2) {
                gaji = golB + 250000;
            } else if (kode == 3) {
                gaji = golC + 100000;
            };
        attr.setGaji(gaji);
        input5.close();
        input6.close();
        System.out.println("DATA BARU");
        getData();
        return null;
    };
}